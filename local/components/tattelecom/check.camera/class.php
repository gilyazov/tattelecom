<?php

use Bitrix\Main\Config\Configuration;
use Bitrix\Main\Web\HttpClient;
use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Web\Json;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

class CheckCamera extends \CBitrixComponent implements Controllerable
{
    private $configuration;
    private $httpClient;

    public function __construct($component = null)
    {
        parent::__construct($component);
    }

    public function configureActions() : array
    {
        return [
            'checkingAddress' => [ // Ajax-метод
                'prefilters' => [],
            ],
        ];
    }

    /**
     * @throws Exception
     */
    public function checkingAddressAction($post)
    {
        $this->configuration = Configuration::getValue("potok");
        $this->httpClient = new HttpClient();
        $this->setAuthorization();

        $data = [
            "address" => $post['address']
        ];

        $response = $this->httpClient->post($this->buildUrl(), Json::encode($data));
        $responseArr = Json::decode($response);

        if ($responseArr['error']){
            throw new \Exception($responseArr['error']);
        }

        if ($responseArr['count'] == 0){
            throw new \Exception("В доме 0 камер.");
        }

        return $responseArr;
    }

    protected function setAuthorization()
    {
        $this->httpClient
            ->setHeader('Authorization', 'Bearer ' . $this->configuration['token']);
    }

    /**
     * Построение URL запроса
     * @return string
     */
    protected function buildUrl(): string
    {
        return $this->configuration['host'] . $this->configuration['methods']['camera'];
    }

    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
}