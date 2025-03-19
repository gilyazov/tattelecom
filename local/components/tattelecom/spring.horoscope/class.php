<?php
use Bitrix\Main\Loader;
use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Entity;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

class SpringHoroscope extends \CBitrixComponent implements Controllerable
{
    public function __construct($component = null)
    {
        parent::__construct($component);
    }

    public function configureActions() : array
    {
        return [
            'prediction' => [ // Ajax-метод
                'prefilters' => [],
            ],
        ];
    }

    /**
     * @throws Exception
     */
    public function predictionAction($zodiac, $email): array
    {
        if (!$this->checkHoroscopeToday($email)){
            $el = new \CIBlockElement;
            $PROP = array();
            $PROP[334] = $zodiac;
            $arLoadProductArray = Array(
                "IBLOCK_ID"      => 77,
                "ACTIVE_FROM"    => date("d.m.Y"),
                "PROPERTY_VALUES"=> $PROP,
                "NAME"           => $email
            );
            $result = $el->Add($arLoadProductArray);

            if(!$result){
                throw new \Exception($el->LAST_ERROR);
            }
        }

        return $this->getHoroscope($zodiac);
    }

    protected function getHoroscope($zodiac): array
    {
        $arHoroscope= [];
        $arSelect = Array("ID", "PROPERTY_HOROSCOPE");
        $arFilter = Array(
            "IBLOCK_ID"=>78,
            "ACTIVE"=>"Y",
            "=PROPERTY_ZODIAC" => $zodiac,
            "=PROPERTY_DATE" => date("Y-m-d")
        );
        $res = \CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
        if($ob = $res->GetNextElement())
        {
            $arFields = $ob->GetFields();

            $arHoroscope = [
                'id' => $arFields['ID'],
                'horoscope' => $arFields["PROPERTY_HOROSCOPE_VALUE"],
                'today' => \FormatDate('d F Y', time())
            ];
        }

        $res = \CIBlockElement::GetByID($zodiac);
        if($arZodiac = $res->GetNext()){
            $arHoroscope["zodiac"] = $arZodiac["NAME"];
            $arHoroscope["zodiac_code"] = $arZodiac["CODE"];
        }

        return $arHoroscope;
    }

    protected function getZodiac()
    {
        $arSelect = Array("ID", "NAME");
        $arFilter = Array("IBLOCK_ID"=>79, "ACTIVE"=>"Y");
        $res = \CIBlockElement::GetList(Array("SORT" => "ASC"), $arFilter, false, false, $arSelect);
        while($ob = $res->GetNextElement())
        {
            $arFields = $ob->GetFields();

            $this->arResult["ZODIAC"][$arFields["ID"]] = $arFields["NAME"];
        }
    }

    protected function checkHoroscopeToday($email): bool
    {
        $arFilter = Array("IBLOCK_ID"=>77, "NAME" => $email, "DATE_ACTIVE_FROM" => date("d.m.Y"));
        $res = \CIBlockElement::GetList(Array(), $arFilter, false, false, ["ID"]);
        if($ob = $res->GetNextElement())
        {
            return true;
        }

        return false;
    }

    public function executeComponent()
    {
        $this->getZodiac();

        $this->includeComponentTemplate();
    }
}