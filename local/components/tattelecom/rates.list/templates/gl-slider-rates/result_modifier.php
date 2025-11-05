<?php
/** @var array $arResult */

foreach ($arResult["ITEMS"] as $key => $arItem){
    if (!$arItem["PROPERTIES"]["TARIFFING"]["VALUE"]){
        $arResult["ITEMS"][$key]["PROPERTIES"]["TARIFFING"]["VALUE"] = "₽/мес";
    }


    if ($arItem["CODE"] == "bezlimit"){
        $hint = "Акция действует при переходе с сохранением номера";
    }
    elseif ($arItem["CODE"] == "bezlimit-ekstra"){
        $hint = "Акция действует при переходе с сохранением номера";
    }
    else{
        continue;
    }
    $arResult["ITEMS"][$key]["HINT"] = $hint;
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