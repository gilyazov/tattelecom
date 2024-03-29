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
        $this->httpClient
            ->setHeader('Authorization', 'Bearer ' . $this->configuration['token'])
            ->setHeader('Content-Type', 'application/json', true);
    }

    protected function buildUrl(): string
    {
        $isAdmin = \Bitrix\Main\Engine\CurrentUser::get()->isAdmin();
        if ($isAdmin){
            $host = $this->configuration['dev_host'];
        }
        else{
            $host = $this->configuration['host'];
        }

        return $host . $this->configuration['methods']['lead'];
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
        // валидация номера телефона
        $parsedPhone = Parser::getInstance()->parse($post['phone']);
        if (!$parsedPhone->isValid()){
            throw new Exception('Некорректный номер телефона: ' . $post['phone']);
        }

        $url = $this->buildUrl();
        $phone = $this->parsePhone($post['phone']);
        $utm = $this->getUtmQuery();
        $recaptchaResponse = GoogleReCaptcha::checkClientResponse($post['recaptcha_response']);

        if ($recaptchaResponse['score'] < 0.5){
            throw new Exception('Не пройдена проверка на робота. Ваш результат: ' . $recaptchaResponse['score']);
        }

        $data = [
            "phone" => $phone,
            "service" => 2,
            "name" => ($post['firstname'] ? $post['firstname'] : "Нет Имени"),
            "referer" => $post['param_referer'],
            "address" => $_SESSION['city']['name'],
            "comment" => $post['param_comment'],
            "utm" => $utm,
        ];

        $response = $this->httpClient->post($url, \Bitrix\Main\Web\Json::encode($data));

        return \Bitrix\Main\Web\Json::decode($response);
    }

    protected function getUtmQuery()
    {
        $utm = [
            "utm_source" => $_COOKIE["utm_source"],
            "utm_medium" => $_COOKIE["utm_medium"],
            "utm_campaign" => $_COOKIE["utm_campaign"],
            "utm_content" => $_COOKIE["utm_content"],
            "utm_term" => $_COOKIE["utm_term"],
        ];

        return http_build_query($utm);
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