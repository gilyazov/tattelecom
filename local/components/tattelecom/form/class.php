<?php

use Bitrix\Main\Config\Configuration;
use Bitrix\Main\Web\HttpClient;
use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\PhoneNumber\Format;
use Bitrix\Main\PhoneNumber\Parser;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

class Form extends \CBitrixComponent implements Controllerable
{
    private $configuration;
    private $httpClient;

    public function __construct($component = null)
    {
        parent::__construct($component);

        $this->configuration = Configuration::getValue("potok");
        $this->httpClient = new HttpClient();
    }

    protected function buildUrl(): string
    {
        $isAdmin = \Bitrix\Main\Engine\CurrentUser::get()->isAdmin();

        if ($isAdmin){
            return $this->configuration['dev_host'];
        }
        else{
            return $this->configuration['host'];
        }
    }

    public function configureActions() : array
    {
        return [
            'sendLead' => [ // Ajax-метод
                'prefilters' => [],
            ],
        ];
    }

    public function sendLeadAction($post)
    {
        global $APPLICATION;
        $url = $this->buildUrl();
        $phone = $this->parsePhone($post['phone']);

        $data = [
            "phone" => $phone,
            "firstname" => $post['firstname'],
            "param_comment" => $post['param_comment'],

            "service" => 2,
            "param_referer" => $post['param_referer'],
            "param_clientstatus" => 1
        ];

        //pre($data);die();

        $response = $this->httpClient->post($url, $data);

        return \Bitrix\Main\Web\Json::decode($response);
    }

    /**
     * Форматирует телефонный номер в формат нужный для API.
     * @param string $phone Phone number.
     * @return string
     */
    protected function parsePhone(string $phone) : string
    {
        $parsedPhone = Parser::getInstance()->parse($phone);
        $phone = $parsedPhone->format(Format::E164);

        // api пережует любой формат?
        return str_replace("+7", "", $phone);
    }

    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
}