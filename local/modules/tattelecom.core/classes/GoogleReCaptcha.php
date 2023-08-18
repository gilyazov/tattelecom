<?php
use Bitrix\Main\Web\HttpClient;

class GoogleReCaptcha
{
    const PUBLIC_KEY = '6LcqjLcnAAAAAOAFmW8GhJ5jhcbsKxalF3jQEVpo';
    const SECRET_KEY = '6LcqjLcnAAAAAMDnHMXRqG65ecWx90zCUv4Ri8yl';

    /**
     * @return array - if validation is failed, returns an array with errors, otherwise - empty array. This format is expected by component.
     */
    public static function checkClientResponse($captchaResponse)
    {
        if (!$captchaResponse){
            return "";
        }

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => self::SECRET_KEY,
            'response'=> $captchaResponse,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        );

        $httpClient = new HttpClient();
        $response = $httpClient->post($url,$data);

        return \Bitrix\Main\Web\Json::decode($response,true);
    }
}