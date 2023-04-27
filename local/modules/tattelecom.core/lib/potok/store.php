<?php
namespace Tattelecom\Core\Potok;

use Bitrix\Main\Web\HttpClient;
use Bitrix\Main\Config\Configuration;
use Bitrix\Main\Web\Json;

class Store
{
    public static function run()
    {
        $self = new self();

        $arItems = $self->getRequest();
        $arItems = $self->changeKeys($arItems);

        $self->addToDb($arItems);

        return '\\'.__METHOD__.'();';
    }

    private function getRequest()
    {
        $configuration = Configuration::getValue("potok");
        $httpClient = new HttpClient();

        $httpClient
            ->setHeader('Authorization', 'Bearer ' . $configuration['token'])
            ->setHeader('Content-Type', 'application/json', true);

        return Json::decode($httpClient->get($configuration["host"] . $configuration["methods"]["store"]));
    }

    private function addToDb(array $arItems)
    {
        $arSiteStore = $this->getSiteCatalog();

        // удаление неактивных товаров
        foreach($arSiteStore as $id => $vac)
        {
            if(!array_key_exists($id, $arItems))
            {
                if(!\CIBlockElement::Delete($vac['ID']))
                {
                    \Bitrix\Main\Diag\Debug::writeToFile('Ошибка удаления товара');
                }
                unset($arSiteStore[$id]);
            }
        }

/*        echo "<pre>";
        print_r($arItems);
        echo "</pre>";*/

        $arTypes = $this->getTypes();
        $arBrand = $this->getBrands();

        foreach ($arItems as $arItem){
            $el = new \CIBlockElement;
            $sum = $this->checkSum($arItem);

            $PROP['OLD_PRICE']	= $arItem['price']['old'];
            $PROP['PRICE']	= $this->getPrice($arItem['price']);
            $PROP['TYPE']	= $arTypes[$arItem['type']];
            $PROP['BRAND']	= $arBrand[$arItem['brand']];
            $PROP['AVAILABLE']	= $this->officeProp($arItem['office']);
            $PROP = array_merge($PROP, $this->otherProps($arItem['attributes']));

            $arLoadProductArray = array(
                "IBLOCK_ID" => 64,
                "NAME" => $arItem['name'],
                "EXTERNAL_ID" => $arItem['id'],
                "CODE" => $arItem['code'],
                "PROPERTY_VALUES" => $PROP,
                "DETAIL_TEXT" => $arItem['description'],
                "DETAIL_TEXT_TYPE" => 'html',
            );

            if(!array_key_exists($arItem['id'], $arSiteStore)){
                // создаем
                $arLoadProductArray["WF_COMMENTS"] = $sum;
                if(!$el->Add($arLoadProductArray))
                {
                    \Bitrix\Main\Diag\Debug::writeToFile('Ошибка добавления вакансии: '.$el->LAST_ERROR);
                }
            }
            else{
                if($sum != $arSiteStore[$arItem['id']]['WF_COMMENTS'])
                {
                    $arLoadProductArray["WF_COMMENTS"] = $sum;
                    $el->Update($arSiteStore[$arItem['id']]['ID'], $arLoadProductArray);
                }
            }
        }
    }

    private function checkSum($item): int
    {
        $line = '';
        foreach($item as $i)
        {
            if(is_array($i))
            {
                $line .= implode('',$i);
            }
            else
            {
                $line .= $i;
            }
        }
        $checkSum = crc32($line);
        return $checkSum;
    }

    private function getPrice($arPrice)
    {
        foreach ($arPrice['current'] as $price)
        {
            if ($price['title'] == "main"){
                return $price['value'];
            }
        }
    }

    private function getTypes(): array
    {
        $arTypes = [];
        $property_enums = \CIBlockPropertyEnum::GetList(Array("SORT"=>"ASC"), Array("IBLOCK_ID"=>64, "CODE"=>"TYPE"));
        while($enum_fields = $property_enums->GetNext())
        {
            $arTypes[$enum_fields["XML_ID"]] = $enum_fields["ID"];
        }

        return $arTypes;
    }

    private function getBrands(): array
    {
        $arTypes = [];
        $property_enums = \CIBlockPropertyEnum::GetList(Array("SORT"=>"ASC"), Array("IBLOCK_ID"=>64, "CODE"=>"BRAND"));
        while($enum_fields = $property_enums->GetNext())
        {
            $arTypes[$enum_fields["VALUE"]] = $enum_fields["ID"];
        }

        return $arTypes;
    }

    private function otherProps($arAttributes): array
    {
        $arMap = [
            61 => "ANDROID_VERSION",
            62 => "BATTERY_CAPACITY",
            63 => "CAMERA",
            64 => "MEMORY",
            65 => "NUMBER_OF_SIM",
            66 => "DISPLAY_DIAGONAL",
        ];
        $prop = [];
        foreach ($arAttributes as $arProp)
        {
            $prop[$arMap[$arProp['id']]] = $arProp['value'];
        }

        return $prop;
    }

    private function officeProp($arOffices): array
    {

        $prop = [];
        foreach ($arOffices as $office)
        {
            if (!$office['amount']) continue;

            $prop[] = [
                "SUBPROP_VALUES" => [
                    "A_OFFICE" => $office['title'],
                    "A_COUNT" => $office['amount'],
                ]
            ];
        }

        return $prop;
    }

    private function getSiteCatalog(): array
    {
        $arResult = [];
        if (\CModule::IncludeModule("iblock")) {
            $arSelect = ["ID", "NAME", "EXTERNAL_ID", "WF_COMMENTS"];
            $arFilter = ["IBLOCK_ID" => 64];
            $res = \CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
            while ($ob = $res->GetNextElement()) {
                $arFields = $ob->GetFields();
                $arResult[$arFields['EXTERNAL_ID']] = $arFields;
            }
        }
        return $arResult;
    }

    private function changeKeys(array $arItems): array
    {
        foreach ($arItems as $key=>$arItem)
        {
            $arItems[$arItem['id']] = $arItem;
            unset($arItems[$key]);
        }

        return $arItems;
    }
}