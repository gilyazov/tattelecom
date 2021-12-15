<?php

// Включено в абонентскую плату
$arSelect = Array("ID", "IBLOCK_ID", "NAME");
$arFilter = ["IBLOCK_ID"=>26, "SECTION_ID"=>$arResult["PROPERTIES"]["CONDITIONS"]["VALUE"], "ACTIVE"=>"Y"];
$res = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement()){
    $arFields = $ob->GetFields();
    $arFields["PROPS"] = $ob->GetProperties();

    $arResult["CONDITIONS"][] = $arFields;
}
//end