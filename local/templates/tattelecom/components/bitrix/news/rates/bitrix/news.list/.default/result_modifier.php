<?php
/** @var array $arResult */
foreach ($arResult["ITEMS"] as $key => $arItem){
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