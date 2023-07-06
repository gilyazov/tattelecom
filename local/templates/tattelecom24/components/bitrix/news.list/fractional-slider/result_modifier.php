<?php
$arLinked = [];
foreach ($arResult["ITEMS"] as $arItem){
    if ($linked = $arItem["PROPERTIES"]["LINKED"]["VALUE"]){
        $arLinked[] = $linked;
    }
}
foreach ($arResult["ITEMS"] as $key => $arItem){
    if (in_array($arItem["ID"], $arLinked)){
        $arResult["LINKED"][$arItem["ID"]] = $arItem;
        unset($arResult["ITEMS"][$key]);
    }
}

