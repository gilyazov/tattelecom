<?php


namespace Tattelecom\Core\EventHandlers\Main;
use Bitrix\Main\Application,
    Bitrix\Main\Web\Uri;
class Page
{
    public function OnPageStartHandler()
    {
        $server = \Bitrix\Main\Context::getCurrent()->getServer();
        $realPath = GetDirPath($server->get('REAL_FILE_PATH'));
        $realPathArr = explode('/', $realPath);
        $realPathArr = array_values(array_diff($realPathArr, array('')));

        $request = Application::getInstance()->getContext()->getRequest();
        $uriString = $request->getRequestUri();
        $uri = new Uri($uriString);
        $redirect = $uri->getPath();

        if (($realPathArr[0] == "dynamic") || (self::dynamicPage($redirect))){
            define('SITE_TEMPLATE_ID','tattelecom');
        }
    }

    protected static function dynamicPage($url){
        $arPage = [
            "/search/"
        ];

        if (in_array($url, $arPage)){
            return true;
        }
        else{
            return false;
        }
    }
}