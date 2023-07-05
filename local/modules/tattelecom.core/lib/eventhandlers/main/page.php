<?php


namespace Tattelecom\Core\EventHandlers\Main;
use Bitrix\Main\Application,
    Bitrix\Main\Web\Uri;
class Page
{
    public static function OnPageStartHandler()
    {
        $server = \Bitrix\Main\Context::getCurrent()->getServer();
        $realPath = GetDirPath($server->get('REAL_FILE_PATH'));
        $realPathArr = explode('/', $realPath);
        $realPathArr = array_values(array_diff($realPathArr, array('')));

        $request = Application::getInstance()->getContext()->getRequest();
        $uriString = $request->getRequestUri();
        $uri = new Uri($uriString);
        $redirect = $uri->getPath();

        if ((self::dynamicPath($realPathArr[0])) || (self::dynamicPage($redirect))){
            define('SITE_TEMPLATE_ID','tattelecom');
        }
    }

    protected static function dynamicPath($path){
        $arPage = [
            "dynamic",
            "news"
        ];

        if (in_array($path, $arPage)){
            return true;
        }
        else{
            return false;
        }
    }

    protected static function dynamicPage($url){
        $arPage = [
            "/search/",
            "/news/"
        ];

        if (in_array($url, $arPage)){
            return true;
        }
        else{
            return false;
        }
    }
}