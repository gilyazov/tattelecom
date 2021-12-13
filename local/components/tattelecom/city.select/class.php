<?php
use Bitrix\Main\Engine\Contract\Controllerable;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

class CitySelect extends \CBitrixComponent implements Controllerable
{

    public function __construct($component = null)
    {
        parent::__construct($component);
    }

    protected function getRegions()
    {
        $arOrder = ["NAME"=>"ASC"];
        $arFilter = Array('IBLOCK_ID'=>25, 'ACTIVE'=>'Y');

        $cache_id = md5(serialize(['ib_getlist', $arFilter, $arOrder]));
        $cache_dir = "/getlist";
        $arResult = [];
        $obCache = new \CPHPCache;
        if ($obCache->InitCache(3600, $cache_id, $cache_dir)) {
            $arResult = $obCache->GetVars();
        } elseif ($obCache->StartDataCache()) {
            global $CACHE_MANAGER;
            $res = \CIBlockSection::GetList($arOrder, $arFilter, false);
            $CACHE_MANAGER->StartTagCache($cache_dir);
            $CACHE_MANAGER->RegisterTag("iblock_id_25");
            while ($arSection = $res->GetNext()) {

                $arResult[] = $arSection;
                $CACHE_MANAGER->RegisterTag("section_" . $arSection["ID"]);
            }

            $CACHE_MANAGER->RegisterTag("iblock_list");
            $CACHE_MANAGER->EndTagCache();
            $obCache->EndDataCache($arResult);
        } else {
            global $CACHE_MANAGER;
            $CACHE_MANAGER->ClearByTag('iblock_list');
        }

        return $arResult;
    }

    public function configureActions() : array
    {
        // Сбрасываем фильтры по-умолчанию (ActionFilter\Authentication и ActionFilter\HttpMethod)
        // Предустановленные фильтры находятся в папке /bitrix/modules/main/lib/engine/actionfilter/
        return [
            'getCity' => [ // Ajax-метод
                'prefilters' => [],
            ],
        ];
    }

    public function getCityAction(array $post) : array
    {
        \Bitrix\Main\Loader::includeModule('iblock');

        $arCity = \Bitrix\Iblock\Elements\ElementCityTable::getList([
            'select' => ['ID', 'NAME'],
            'filter' => ['=ACTIVE' => 'Y', '=IBLOCK_SECTION_ID' => $post['region']],
        ])->fetchAll();

        return $arCity;
    }

    public function executeComponent()
    {
        $this->arResult['REGIONS'] = $this->getRegions();

        $this->includeComponentTemplate();
    }
}