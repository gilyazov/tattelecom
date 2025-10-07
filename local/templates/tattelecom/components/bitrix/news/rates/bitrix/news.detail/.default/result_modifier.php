<?php

// Включено в абонентскую плату
$arSelect = Array("ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE");
$arFilter = ["IBLOCK_ID"=>26, "SECTION_ID"=>$arResult["PROPERTIES"]["CONDITIONS"]["VALUE"], "ACTIVE"=>"Y"];
$res = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement()){
    $arFields = $ob->GetFields();
    $arFields["PROPS"] = $ob->GetProperties();

    $arResult["CONDITIONS"][] = $arFields;
}
//end

if ($arResult["CODE"] == "bezlimit"){
    $hint = "Акция действует при переходе с сохранением номера";
}
elseif ($arResult["CODE"] == "bezlimit-ekstra"){
    $hint = "Акция действует при переходе с сохранением номера";
}
$arResult["HINT"] = $hint;