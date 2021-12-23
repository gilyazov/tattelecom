<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
    "bitrix:menu.sections",
    "",
    array(
        "IS_SEF" => "Y",
        "ID" => $_REQUEST["ID"],
        "IBLOCK_TYPE" => "mobile",
        "IBLOCK_ID" => "17",
        "SECTION_URL" => "",
        "DEPTH_LEVEL" => "3",
        "CACHE_TYPE" => "Y",
        "CACHE_TIME" => "3600",
        "SEF_BASE_URL" => "/internet/rates/",
        "SECTION_PAGE_URL" => "#SECTION_CODE#/",
        "DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_CODE#/"
    ),
    false
);

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>