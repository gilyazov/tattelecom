<?php

use Bitrix\Main\Config\Configuration;
use Bitrix\Main\Web\HttpClient;
use Bitrix\Main\Web\Json;
use Bitrix\Main\Engine\Contract\Controllerable;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

class InternetConnect extends \CBitrixComponent implements Controllerable
{
    private $configuration;
    private $httpClient;

    public function __construct($component = null)
    {
        parent::__construct($component);

        $this->configuration = Configuration::getValue("api");

        $this->httpClient = new HttpClient();
        $this->httpClient
             ->setHeader('Authorization', 'Bearer ' . $this->configuration['token']);
    }

    public function configureActions() : array
    {
        return [
            'checkingCapability' => [ // Ajax-метод
                'prefilters' => [],
            ],
        ];
    }

    public function checkingCapabilityAction($post)
    {
        $url = $this->buildUrl();

        $data = [
            "address" => $post['address'],
            "uuid" => $post['uuid']
        ];

        $response = $this->httpClient->post($url, Json::encode($data));

        return Json::decode($response);
    }

    protected function buildUrl(): string
    {
        return $this->configuration['host'] . $this->configuration['checking_capability']['path']['url'];
    }

    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
}