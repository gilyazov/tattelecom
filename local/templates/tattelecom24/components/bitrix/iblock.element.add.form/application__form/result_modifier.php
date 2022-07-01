<?php
$arFilter = array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ACTIVE" => "Y");
$res = \CIBlockElement::GetList(array(), $arFilter, ["PROPERTY_TIME"]);
while ($ob = $res->GetNextElement()) {
    $arFields = $ob->GetFields();

    $arResult["TIME_SLOT"][$arFields["PROPERTY_TIME_ENUM_ID"]] = $arFields["CNT"];
}

/*echo "<pre>";
print_r($arResult["TIME_SLOT"]);
echo "</pre>";*/