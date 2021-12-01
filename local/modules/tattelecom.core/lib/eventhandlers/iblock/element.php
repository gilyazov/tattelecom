<?php


namespace Tattelecom\Core\EventHandlers\Iblock;


class Element
{
    public function OnBeforeIBlockElementAddHandler(&$arFields)
    {
        /*if (in_array($arFields['IBLOCK_ID'], [9, 10, 11])) {
            global $APPLICATION;
            $arFields['PROPERTY_VALUES']['TITLE'] = $APPLICATION->GetTitle();
            $arFields['PROPERTY_VALUES']['LINK'] = $APPLICATION->GetCurPage();
        }*/
    }

    public function OnAfterIBlockElementAddHandler(&$arFields)
    {
        /*if (in_array($arFields['IBLOCK_ID'], [9, 10, 11])) {
            global $APPLICATION;
            $APPLICATION->RestartBuffer();

            $arSelect = Array("ID", "IBLOCK_ID", "NAME", "IBLOCK_NAME");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
            $arFilter = Array("IBLOCK_ID"=>$arFields["IBLOCK_ID"], "ID"=>$arFields["ID"], "ACTIVE"=>"Y");
            $res = \CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
            if($ob = $res->GetNextElement()){
                $arFields = $ob->GetFields();
                $arProps = $ob->GetProperties();

                $sendFields['THEME'] = $arFields['IBLOCK_NAME'];

                foreach ($arProps as $prop){
                    if ($prop['PROPERTY_TYPE'] == 'F'){
                        $sendFields['FIELDS'] .= "<tr><td>$prop[NAME]</td><td><a href='".\CFile::GetPath($prop["VALUE"])."'>Скачать</a></td></tr>";
                    }
                    else{
                        if ($prop['VALUE']){
                            $sendFields['FIELDS'] .= "<tr><td>$prop[NAME]</td><td>$prop[VALUE]</td></tr>";
                        }
                    }
                }
            }

            \Bitrix\Main\Mail\Event::send(array(
                "EVENT_NAME" => "FEEDBACK_FORM",
                "LANGUAGE_ID" => LANGUAGE_ID,
                "MESSAGE_ID" => 7,
                "LID" => SITE_ID,
                "DUPLICATE" => "N",
                "C_FIELDS" => $sendFields
            ));

            echo \Bitrix\Main\Web\Json::encode(['ID' => $arFields['ID']]);
            die();
        }*/
    }
}