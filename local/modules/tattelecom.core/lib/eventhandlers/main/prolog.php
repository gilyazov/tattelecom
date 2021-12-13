<?php

namespace Tattelecom\Core\EventHandlers\Main;

use \Bitrix\Main\Service\GeoIp;
use \Bitrix\Main\Application;

class Prolog
{
    public function OnBeforePrologAddHandler()
    {
        self::cityChange();
        if (!$_SESSION['city']) {
            \Bitrix\Main\Loader::includeModule('iblock');
            $default = 'Казань';

            //todo need cache
            $arFilter = array("IBLOCK_ID" => 25, "ACTIVE" => "Y");
            $res = \CIBlockElement::GetList(array(), $arFilter, false, false, ["ID", "NAME"]);
            while ($ob = $res->GetNextElement()) {
                $arFields = $ob->GetFields();
                $arCities[$arFields['NAME']] = $arFields['ID'];
            }

            $ipAddress = GeoIp\Manager::getRealIp();
            $cityName = GeoIp\Manager::getCityName($ipAddress, "ru");
            if (!$cityName) {
                $cityName = $default;
            }

            if ($id = $arCities[$cityName]) {
                $_SESSION['city'] = [
                    'id' => $id,
                    'name' => $cityName
                ];
            } else {
                $_SESSION['city'] = [
                    'id' => $arCities[$default],
                    'name' => $default
                ];
            }
        }
        //    GeoIp\Manager::useCookieToStoreInfo(true);
        //    $result = GeoIp\Manager::getDataResult($ipAddress, "ru", array('cityName'));
    }

    /**
     * Смена города
     * @return void
     */
    protected static function cityChange()
    {
        \Bitrix\Main\Loader::includeModule('iblock');

        $context = Application::getInstance()->getContext();
        $request = $context->getRequest();
        if ($city = $request->get('city')) {

            $res = \CIBlockElement::GetByID($city);
            if ($arElement = $res->GetNext()) {
                $_SESSION['city'] = [
                    'id' => $arElement['ID'],
                    'name' => $arElement['NAME']
                ];
            }
        }
    }
}