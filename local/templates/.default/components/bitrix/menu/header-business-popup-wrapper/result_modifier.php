<?php
foreach($arResult as &$arItem){
    // отступ вложенных пунктов
    if ($arItem['PARAMS']['DEPTH_LEVEL'] == 1){
        $arItem['PARAMS']['ALIGNMENT'] = ($arItem['PARAMS']['CODE'] == "promotion" ? 3 : 0);
    }

    // todo хардкод
    // стиль выпадающих пунктов
    if (in_array($arItem['PARAMS']['ID'], ["202", "205"])){
        $arItem['PARAMS']["DEPTH_SUBSECTIONS"] = "2";
    }
    // стиль ссылок в выпадающем меню
    if (in_array($arItem['PARAMS']['IBLOCK_SECTION_ID'], [202, 205])){
        $arItem["SECOND_LEVEL_ITEM"] = "1";
    }
}
