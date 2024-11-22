<?php

use Bitrix\Main\Config\Configuration;
use Bitrix\Main\Web\HttpClient;
use Bitrix\Main\Engine\Contract\Controllerable;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

class TtkPay extends \CBitrixComponent implements Controllerable
{
    private $configuration;
    private $httpClient;

    public function __construct($component = null)
    {
        parent::__construct($component);
        //todo подумать как вынести все подключения к API в фабрику
        $this->configuration = Configuration::getValue("api");

        $this->httpClient = new HttpClient();
        $this->httpClient
             ->setHeader('Authorization', 'Bearer ' . $this->configuration['token'])
             ->setHeader('Content-Type', 'application/json', true);
    }

    // Обязательный метод
    public function configureActions()
    {
        // Сбрасываем фильтры по-умолчанию (ActionFilter\Authentication и ActionFilter\HttpMethod)
        // Предустановленные фильтры находятся в папке /bitrix/modules/main/lib/engine/actionfilter/
        return [
            'payUrl' => [ // Ajax-метод
                'prefilters' => [],
            ],
        ];
    }

    // Ajax-методы должны быть с постфиксом Action
    public function payUrlAction($post)
    {
        $url = $this->buildUrl();

        $data = [
            "amount_of_pay" => $post['amount_of_pay'],
            "user_email" => $post['user_email'],
            "error_url" => $this->configuration['payment']['error_url'],
            "success_url" => $this->configuration['payment']['success_url']
        ];

        if ($post['account_number']){
            $data['account_number'] = $post['account_number'];
        }

        if ($post['pay_service'] == "raifaizen"){
            $data['pay_service'] = "raifaizen";
        }

        if ($post['phone_number']){
            $data['phone_number'] = $post['phone_number'];
        }

        $response = $this->httpClient->post($url, \Bitrix\Main\Web\Json::encode($data));
        try {
            $arResponse = \Bitrix\Main\Web\Json::decode($response);
        } catch (\Bitrix\Main\SystemException $e) {
            throw new Exception($e->getMessage() . "response: " . $response);
        }

        return $arResponse;
    }

    protected function buildUrl(): string
    {
        return $this->configuration['host'] . $this->configuration['payment']['path']['url'];
    }

    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
}