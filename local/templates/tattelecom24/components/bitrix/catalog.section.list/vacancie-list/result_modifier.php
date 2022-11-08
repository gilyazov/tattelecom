<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arParams */
/** @var array $arResult */

$arSelect = Array("ID", "NAME", "IBLOCK_SECTION_ID", "PROPERTY_SALARY_FROM", "PROPERTY_CITY", "EXTERNAL_ID");
$arFilter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    $arSec[$arFields["IBLOCK_SECTION_ID"]][] = $arFields;
}
foreach ($arResult['SECTIONS'] as $key => $arSection){
    if ($arSection["ELEMENT_CNT"] == 0){
        unset($arResult['SECTIONS'][$key]);
    }
    else{
        $arResult['SECTIONS'][$key]["ELEMENTS"] = $arSec[$arSection["ID"]];
    }
}