<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
    "millcom:menu",
    "",
    Array(
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "DEPTH_LEVEL" => "4",
        "IBLOCK_ID" => "37",
        "IBLOCK_TYPE" => "mobile",
        "SORT" => "Y",
    )
);

$aMenuLinks = $aMenuLinksExt;
?>