<?php

use Bitrix\Main\Config\Configuration;
use Bitrix\Main\Web\HttpClient;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

class PhoneList extends CBitrixComponent
{
    private $configuration;
    private $httpClient;
    private $type;

    protected function __construct($component = null)
    {
        parent::__construct($component);

        // todo вынести в отдельный метод для всех интеграций
        $this->configuration = Configuration::getValue("api");
        $this->httpClient = new HttpClient();
        $this->httpClient
             ->setHeader('Authorization', 'Bearer ' . $this->configuration['token']);
    }

    protected function buildUrl(): string
    {
        $this->type = $this->arParams['TYPE'];
        $page = $this->arParams['PAGE'];

        $basePath = $this->configuration['host'] . $this->configuration['beautiful_phone']['path']['list'];
        $uri = new \Bitrix\Main\Web\Uri($basePath);
        $uri->addParams([
            "type" => $this->type,
            "page" => $page
        ]);

        return $uri->getUri();
    }

    protected function getList()
    {
        $url = $this->buildUrl();
        //todo need кеш
        $response = $this->httpClient->get($url);

        try {
            $jsonResponse = \Bitrix\Main\Web\Json::decode($response);
        }
        catch (Exception $e){
            echo $e->getMessage();
        }

        return $jsonResponse;
    }

    public function executeComponent()
    {
        $this->arResult['ITEMS'] = $this->getList();

        $this->includeComponentTemplate();
    }
}