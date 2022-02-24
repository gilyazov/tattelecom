<?php

// Включено в абонентскую плату
$arSelect = Array("ID", "IBLOCK_ID", "NAME");
$arFilter = ["IBLOCK_ID"=>32, "SECTION_ID"=>$arResult["PROPERTIES"]["CONDITIONS"]["VALUE"], "ACTIVE"=>"Y"];
$res = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement()){
    $arFields = $ob->GetFields();
    $arFields["PROPS"] = $ob->GetProperties();

    $arResult["CONDITIONS"][] = $arFields;
}
// доп.опции
if ($arResult["PROPERTIES"]["ADDITIONAL_CONDITIONS"]["VALUE"]){
    $arFilter = ["IBLOCK_ID"=>32, "SECTION_ID"=>$arResult["PROPERTIES"]["ADDITIONAL_CONDITIONS"]["VALUE"], "ACTIVE"=>"Y"];
    $res = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, false, $arSelect);
    while($ob = $res->GetNextElement()){
        $arFields = $ob->GetFields();
        $arFields["PROPS"] = $ob->GetProperties();

        $arResult["ADDITIONAL_CONDITIONS"][] = $arFields;
    }
}
//end