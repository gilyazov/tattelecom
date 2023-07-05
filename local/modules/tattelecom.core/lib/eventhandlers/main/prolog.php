<?php

namespace Tattelecom\Core\EventHandlers\Main;

use \Bitrix\Main\Service\GeoIp;
use \Bitrix\Main\Application;

class Prolog
{
    public static function OnBeforePrologAddHandler()
    {
        self::utmSaver();
        self::cityChange();
        self::setPagenMeta();

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

        // фильтр на исключение
        $GLOBALS['arrFilterCity'] = Array(
            [
                "LOGIC" => "AND",
                [
                    "LOGIC" => "OR",
                    [
                        "PROPERTY_CITY" => $_SESSION['city']['id']
                    ],
                    [
                        "PROPERTY_CITY" => false
                    ]
                ],
                [
                    /*"!ID" => \CIBlockElement::SubQuery(
                        "ID",
                        array(
                            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                            "PROPERTY_EXCLUDE_CITY" => $_SESSION['city']['id'],
                        )
                    )*/
                    //"!PROPERTY_EXCLUDE_CITY" => $_SESSION['city']['id'],
                ]
            ]
        );
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

    /**
     * сохраняем utm-метки в cookie
     * @return void
     */
    protected static function utmSaver(){
        if (isset($_GET["utm_source"])) setcookie("utm_source", $_GET["utm_source"], time() + 3600 * 24 * 30, "/");
        if (isset($_GET["utm_medium"])) setcookie("utm_medium", $_GET["utm_medium"], time() + 3600 * 24 * 30, "/");
        if (isset($_GET["utm_campaign"])) setcookie("utm_campaign", $_GET["utm_campaign"], time() + 3600 * 24 * 30, "/");
        if (isset($_GET["utm_content"])) setcookie("utm_content", $_GET["utm_content"], time() + 3600 * 24 * 30, "/");
        if (isset($_GET["utm_term"])) setcookie("utm_term", $_GET["utm_term"], time() + 3600 * 24 * 30, "/");
    }

    protected static function setPagenMeta(){
        $context = Application::getInstance()->getContext();
        $request = $context->getRequest();

        if ($request->get('PAGEN_1')) {
            $GLOBALS["APPLICATION"]->SetPageProperty("robots", "noindex, follow");
        }
    }
}