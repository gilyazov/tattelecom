<?php
/** @var array $arResult */

foreach ($arResult["ITEMS"] as $key => $arItem){
    if (!$arItem["PROPERTIES"]["TARIFFING"]["VALUE"]){
        $arResult["ITEMS"][$key]["PROPERTIES"]["TARIFFING"]["VALUE"] = "₽/мес";
    }
}