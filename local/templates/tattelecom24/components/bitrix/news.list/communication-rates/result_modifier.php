<?php
$arFilter = Array('IBLOCK_ID'=>$arParams["IBLOCK_ID"], 'SECTION_ID' => $arParams['PARENT_SECTION'], 'ACTIVE'=>'Y');
$db_list = CIBlockSection::GetList(Array("SORT"=>"ASC"), $arFilter, true);
while($arSection = $db_list->GetNext())
{
    $arResult['SECTIONS'][$arSection["ID"]] = $arSection;
}
foreach ($arResult["ITEMS"] as $arItem){
    $arResult['SECTIONS'][$arItem['IBLOCK_SECTION_ID']]['RATES'][] = $arItem;
}