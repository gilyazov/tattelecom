<?php

use Bitrix\Main\Config\Configuration;
use Bitrix\Main\Web\HttpClient;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

class PhoneType extends CBitrixComponent
{
    private $configuration;
    private $httpClient;

    protected function __construct($component = null)
    {
        parent::__construct($component);

        $this->configuration = Configuration::getValue("api");

        $this->httpClient = new HttpClient();
        $this->httpClient
             ->setHeader('Authorization', 'Bearer ' . $this->configuration['token']);
    }

    protected function buildUrl(): string
    {
        return $this->configuration['host'] . $this->configuration['beautiful_phone']['path']['types'];
    }

    protected function getTypes()
    {
        $url = $this->buildUrl();
        $response = $this->httpClient->get($url);

        try {
            $jsonResponse = \Bitrix\Main\Web\Json::decode($response);
        }
        catch (Exception $e){
            echo $e->getMessage();
        }

        return $jsonResponse;
    }

    /**
     * Оставим только те типы где реально есть тарифы.
     * @return array
     */
    protected function getFullTypes(): array
    {
        $arTypes = $this->getTypes();
        foreach ($arTypes as $key => $arType)
        {
            $basePath = $this->configuration['host'] . $this->configuration['beautiful_phone']['path']['list'];
            $uri = new \Bitrix\Main\Web\Uri($basePath);
            $uri->addParams([
                "type" => $arType['id'],
                "page" => 2
            ]);

            $response = $this->httpClient->get($uri->getUri());

            if (json_decode($response, true)) {
                $arFullTypes[] = $arType;
            };
        }
        return $arFullTypes;
    }

    public function executeComponent()
    {
        $this->arResult['TYPES'] = $this->getFullTypes();

        $this->includeComponentTemplate();
    }
}