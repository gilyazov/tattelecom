<?php

$pattern = '/ (\d{3}) \d{4} (\d{4}) /';
foreach($arResult["ITEMS"] as &$arItem){
    if ($phone = $arItem["PROPERTIES"]["PHONE"]["VALUE"]){
        $arItem["PROPERTIES"]["PHONE"]["VALUE"] = substr ($phone,  0, 8)  .  ' ***-*' .  substr ($phone,  14, 4) ;
    }
}