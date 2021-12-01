<?php


namespace Tattelecom\Core\EventHandlers\Main;

class Page
{
    public function OnPageStartHandler()
    {

        $server = \Bitrix\Main\Context::getCurrent()->getServer();
        $realPath = GetDirPath($server->get('REAL_FILE_PATH'));
        $realPathArr = explode('/', $realPath);
        $realPathArr = array_values(array_diff($realPathArr, array('')));

        if ($realPathArr[0] == "dynamic"){
            define('SITE_TEMPLATE_ID','tattelecom');
        }
    }
}