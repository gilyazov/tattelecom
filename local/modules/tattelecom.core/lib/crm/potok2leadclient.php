<?php

namespace Tattelecom\Core\Crm;

use Bitrix\Main\Config\Configuration;
use Bitrix\Main\SystemException;
use Bitrix\Main\Web\HttpClient;
use Bitrix\Main\Web\Json;

final class Potok2LeadClient
{
    private const CONFIG_KEY = 'potok2';
    private const DEFAULT_TIMEOUT = 10;

    private array $configuration;
    private HttpClient $httpClient;

    public function __construct(?HttpClient $httpClient = null)
    {
        $this->configuration = (array)Configuration::getValue(self::CONFIG_KEY);
        $this->httpClient = $httpClient ?? (new HttpClient());
        $this->httpClient->setTimeout(self::DEFAULT_TIMEOUT);
        $this->httpClient->setHeader('Content-Type', 'application/json', true);
        $this->httpClient->setHeader('Accept', 'application/json', true);

        $token = (string)($this->configuration['token'] ?? '');
        $this->httpClient->setHeader('Authorization', 'Bearer ' . $token, true);
    }

    /**
     * Creates lead in Potok2 CRM via /rest/api/lead/store
     *
     * @param array $payload Arbitrary JSON payload expected by API
     * @return array Decoded JSON response
     * @throws SystemException
     */
    public function storeLead(array $payload): array
    {
        $url = $this->buildStoreLeadUrl();

        $response = $this->httpClient->post($url, Json::encode($payload));

        $status = (int)$this->httpClient->getStatus();
        if ($status === 400) {
            $error = Json::decode((string)$response);

//            $error['details'];
            throw new SystemException($error['errorMessage']);
        }

        if ($status >= 400 || $status === 0) {
            throw new SystemException(sprintf('Potok2 lead store request failed (HTTP %d): %s', $status, (string)$response));
        }

        try {
            $decoded = Json::decode((string)$response);
        } catch (\Throwable $e) {
            throw new SystemException('Potok2 lead store: invalid JSON response: ' . $e->getMessage());
        }

        return is_array($decoded) ? $decoded : ['result' => $decoded];
    }

    private function buildStoreLeadUrl(): string
    {
        $host = (string)($this->configuration['host'] ?? '');
        $path = (string)($this->configuration['methods']['lead_store'] ?? '/rest/api/lead/store');

        if ($host === '') {
            throw new SystemException('Potok2 host is not configured (bitrix/.settings_extra.php -> potok2.host)');
        }

        return rtrim($host, '/') . '/' . ltrim($path, '/');
    }
}

