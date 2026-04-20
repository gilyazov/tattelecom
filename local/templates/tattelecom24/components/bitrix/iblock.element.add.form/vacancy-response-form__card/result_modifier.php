<?php
/** @var array $arResult */
unset($arResult["PROPERTY_LIST"][5]);

$arResult["PROPERTY_LIST_FULL"]["362"]["PROPERTY_TYPE"] = "L";
$iblockId = $arResult["PROPERTY_LIST_FULL"]["362"]["LINK_IBLOCK_ID"];

$variables = \Bitrix\Landing\Landing::getVariables();
$elementCode = $variables['sef'][0] ?? 0;
$arSelect = array("ID", "IBLOCK_ID", "NAME", "IBLOCK_NAME");
$arFilter = array("IBLOCK_ID" => 84, "CODE" => $elementCode, "ACTIVE" => "Y");
$res = \CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
if ($ob = $res->GetNextElement()) {
    $arProps = $ob->GetProperties();

    $arCity = $arProps["CITY"]["VALUE"];
}


$arSelect = Array("ID", "NAME");
$arFilter = Array("IBLOCK_ID"=>$iblockId, "ACTIVE"=>"Y", "ID" => $arCity);
$res = CIBlockElement::GetList(Array("SORT" => "ASC"), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    $arResult["PROPERTY_LIST_FULL"]["362"]["ENUM"][$arFields["ID"]] = [
        "DEF" => "N",
        "VALUE" => $arFields["NAME"],
    ];
}
