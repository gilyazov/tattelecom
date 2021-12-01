<?php
use Bitrix\Main\Web\HttpClient;

class GoogleReCaptcha
{
    public static function getPublicKey() { return '6LdbZEUaAAAAAC9uQhYgdpFjJ43K-PJaGhPcM_3Z';}
    public static function getSecretKey() { return '6LdbZEUaAAAAAGrlgbV9P1AyNI-EPIIgLDyHzVc9';}

    /**
     * @return array - if validation is failed, returns an array with errors, otherwise - empty array. This format is expected by component.
     */
    public static function checkClientResponse()
    {
        $context = \Bitrix\Main\Application::getInstance()->getContext();

        $request = $context->getRequest();
        $captchaResponse = $request->getPost("g-recaptcha-response");
        if($captchaResponse)
        {
            $url = ' https://www.google.com/recaptcha/api/siteverify';
            $data = array('secret' => static::getSecretKey(), 'response'=> $captchaResponse);

            $httpClient = new HttpClient();
            $response = $httpClient->post($url,$data);
            if($response)
                $response = \Bitrix\Main\Web\Json::decode($response,true);

            if(!$response['success']) {
                return $response['error-codes'];
            }

            return array();
        }

        return array('no captcha response');

    }
}