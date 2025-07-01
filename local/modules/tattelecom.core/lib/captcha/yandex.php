<?php


namespace Tattelecom\Core\Captcha;

use Bitrix\Main\Application;
use Tattelecom\Core\Captcha\Loader;

class Yandex
{
    public static function OnPageStart()
    {
        // только для b2b
        if (SITE_ID != "s2" && SITE_ID != "s6"){
            return;
        }

        $request = \Bitrix\Main\Context::getCurrent()->getRequest();
        if ($request->isAdminSection()){
            return;
        }

        $loader = new Loader();
        $loader->loadInitScripts();
    }
}