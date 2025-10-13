<?php
/** @var array $arResult */
unset($arResult["PROPERTY_LIST"][3],$arResult["PROPERTY_LIST"][4]);

$utm = [
    "utm_source" => $_COOKIE["utm_source"],
    "utm_medium" => $_COOKIE["utm_medium"],
    "utm_campaign" => $_COOKIE["utm_campaign"],
    "utm_content" => $_COOKIE["utm_content"],
    "utm_term" => $_COOKIE["utm_term"],
];

$arResult["UTM_QUERY"] = http_build_query($utm);