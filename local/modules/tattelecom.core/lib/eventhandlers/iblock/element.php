<?php


namespace Tattelecom\Core\EventHandlers\Iblock;

use Bitrix\Main\Web\HttpClient;

class Element
{
    public static function OnBeforeIBlockElementAddHandler(&$arFields)
    {
        if ($arFields["IBLOCK_ID"] == 80) {
            $arFilter = array(
                "IBLOCK_ID" => $arFields["IBLOCK_ID"],
                "PROPERTY_PHONE" => $arFields["PROPERTY_VALUES"]["336"],
                "ACTIVE" => "Y"
            );
            $res = \CIBlockElement::GetList([], $arFilter, false, false, ["ID"]);
            if ($ob = $res->GetNextElement()) {
                global $APPLICATION;
                $APPLICATION->RestartBuffer();
                echo \Bitrix\Main\Web\Json::encode(["error" => "Вы уже принимаете участие в розыгрыше."]);
                die();
            }
        }
        // регистрация на мероприятия
        if ($arFields["IBLOCK_ID"] == 57 && $event = $arFields["PROPERTY_VALUES"]["240"]) {
            if ($arFields["PROPERTY_VALUES"]["239"]) {
                $arFilter = array("IBLOCK_ID" => $arFields["IBLOCK_ID"], "PROPERTY_TIME" => $arFields["PROPERTY_VALUES"]["239"], "ACTIVE" => "Y");
                $res = \CIBlockElement::GetList(array(), $arFilter, ["PROPERTY_TIME"]);
                if ($ob = $res->GetNextElement()) {
                    $arFieldsBx = $ob->GetFields();

                    if ($arFieldsBx["CNT"] >= 18) {
                        global $APPLICATION;
                        $APPLICATION->throwException("На этот временной слот не осталось мест.");
                        return false;
                    }
                }
            }
        }
    }

    public static function OnAfterIBlockElementAddHandler(&$arFields)
    {
        $iblockMailTemplate = [
            45 => 32,
            62 => 33,
            63 => 35,
            66 => 36,
            67 => 32,
        ];
        if ($arFields["ID"] && in_array($arFields['IBLOCK_ID'], [45, 57, 62, 63, 66, 67, 80])) {
            global $APPLICATION;
            $APPLICATION->RestartBuffer();
        }

        if ($arFields["ID"] && $iblockMailTemplate[$arFields['IBLOCK_ID']]) {
            $arSelect = array("ID", "IBLOCK_ID", "NAME", "IBLOCK_NAME");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
            $arFilter = array("IBLOCK_ID" => $arFields["IBLOCK_ID"], "ID" => $arFields["ID"], "ACTIVE" => "Y");
            $res = \CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
            if ($ob = $res->GetNextElement()) {
                $arFieldsBx = $ob->GetFields();
                $arProps = $ob->GetProperties();

                $sendFields['THEME'] = $arFieldsBx['IBLOCK_NAME'];
                $sendFields['NAME'] = $arFieldsBx['NAME'];

                foreach ($arProps as $prop) {
                    if ($prop['PROPERTY_TYPE'] == 'F') {
                        $sendFields['FIELDS'] .= "<tr><td>$prop[NAME]</td><td><a href='" . \CFile::GetPath($prop["VALUE"]) . "'>Скачать</a></td></tr>";
                    } else {
                        if ($prop['VALUE']) {
                            $sendFields['FIELDS'] .= "<tr><td>$prop[NAME]</td><td>$prop[VALUE]</td></tr>";
                        }
                    }
                }

                if ($arFields['IBLOCK_ID'] == 45) {
                    self::b2bCrmSend($arFieldsBx["NAME"], $arProps["PHONE"]["VALUE"]);
                }
            }

            \Bitrix\Main\Mail\Event::send(array(
                "EVENT_NAME" => "FEEDBACK_FORM",
                "LANGUAGE_ID" => LANGUAGE_ID,
                "MESSAGE_ID" => $iblockMailTemplate[$arFields['IBLOCK_ID']],
                "LID" => SITE_ID,
                "DUPLICATE" => "N",
                "C_FIELDS" => $sendFields
            ));
        }

        if ($arFields["ID"] && in_array($arFields['IBLOCK_ID'], [45, 57, 62, 63, 66, 67, 80])) {
            echo \Bitrix\Main\Web\Json::encode(['ID' => $arFields['ID']]);
            die();
        }
    }

    protected static function b2bCrmSend($name, $phone)
    {
        $httpClient = new HttpClient();
        $httpClient
            ->setHeader('Authorization', 'Bearer app:AvNZ2DtJSREbZnKx:1')
            ->setHeader('Content-Type', 'application/json', true);
        $data = [
            "type" => "irbis",
            "billing_data" => [
                "name" => $name,
                "contact_phone" => $phone
            ]
        ];
        $response = $httpClient->post("http://192.168.143.246:8000/terrasoft/lead", \Bitrix\Main\Web\Json::encode($data));
    }
}