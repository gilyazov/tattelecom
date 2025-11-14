<?php
/** @var array $arResult */

foreach ($arResult["ITEMS"] as $key => $arItem){
    if (!$arItem["PROPERTIES"]["TARIFFING"]["VALUE"]){
        $arResult["ITEMS"][$key]["PROPERTIES"]["TARIFFING"]["VALUE"] = "₽/мес";
    }

    if ($arItem["CODE"] == "blizkie"){
        $arResult["ITEMS"][$key]["PROPERTIES"]["HINT"]["VALUE"] = "";
    }
}

foreach ($arResult["ITEMS"] as $key => $arItem){
    if($arItem["PROPERTIES"]["HIT"]["VALUE"] == "Y"){
        $promoClass = "rates-list__slide-hit";
    }
    elseif($arItem["PROPERTIES"]["PROMO_RATE"]["VALUE"] == "Y"){
        $promoClass = "rates-list__slide-promo";
    }
    else{
        continue;
    }

    $arResult["ITEMS"][$key]["PROMO_CLASS"] = $promoClass;
}