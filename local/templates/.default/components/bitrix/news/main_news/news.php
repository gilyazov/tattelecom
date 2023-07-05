<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?php

global $newsFilter;
// На основе GET-параметров собираем фильтр и фильтруем выдачу
// Проверяем на заполнение. Если оба GET-параметра пустые, то в компонет отправляем пустой фильтр
if($_GET['year'] == "" && $_GET["month"] == "" && $_GET["type"] == "") {
    $newsFilter = [/*"PROPERTY_TYPE_VALUE" => "О компании"*/];
} else {
    // 1. Месяц
    // Если месяц не задан, то выбираем диапазон от Января до Декабря
    if(!empty($_GET['month'])) {
        $monthStart = $_GET['month'];
        $monthEnd = $_GET['month'];
    } else {
        $monthStart = '01';
        $monthEnd = '12';
    }

    // 2. Год
    // Если год не задан, то выбираем все года до текущего
    if(!empty($_GET['year']) || !($_GET['year'] == "")) {
        $year = $_GET['year'];
        $yearFrom = $_GET['year'];
    } else {
        $year = date('Y');
        $yearFrom = 1970;
        
        if(!empty($_GET['month'])) {
            $yearFrom = date('Y');
        }
    }

    if(!empty($_GET['type']) || !($_GET['type'] == "")) {
        $type = $_GET['type'];
    } else {
        $type = null;
    }
    // 3. Фильтр
    // Собираем фильтр для компонента news.list
    if (!$type):
        $newsFilter = array(
            "LOGIC" => "AND",
            ">=DATE_ACTIVE_FROM" => '01.' . $monthStart . '.' . $yearFrom,
            "<=DATE_ACTIVE_FROM" => '31.' . $monthEnd . '.' . $year
        );
    else:
        $newsFilter = array(
            "LOGIC" => "AND",
            ">=DATE_ACTIVE_FROM" => '01.' . $monthStart . '.' . $yearFrom,
            "<=DATE_ACTIVE_FROM" => '31.' . $monthEnd . '.' . $year,
            "PROPERTY_TYPE_VALUE" => $type,
        );
    endif;
}?>

<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    '',
    Array(
        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "NEWS_COUNT" => $arParams["NEWS_COUNT"],
        "SORT_BY1" => $arParams["SORT_BY1"],
        "SORT_ORDER1" => $arParams["SORT_ORDER1"],
        "SORT_BY2" => $arParams["SORT_BY2"],
        "SORT_ORDER2" => $arParams["SORT_ORDER2"],
        "FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
        "PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
        "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
        "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
        "IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
        "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
        "SET_TITLE" => "N",
        "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
        "MESSAGE_404" => $arParams["MESSAGE_404"],
        "SET_STATUS_404" => $arParams["SET_STATUS_404"],
        "SHOW_404" => $arParams["SHOW_404"],
        "FILE_404" => $arParams["FILE_404"],
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
        "CACHE_TIME" => $arParams["CACHE_TIME"],
        "CACHE_FILTER" => $arParams["CACHE_FILTER"],
        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
        "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
        "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
        "PAGER_TITLE" => $arParams["PAGER_TITLE"],
        "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
        "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
        "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
        "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
        "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
        "PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
        "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
        "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
        "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
        "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
        "PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
        "ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
        "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
        "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
        "FILTER_NAME" => "newsFilter",
        "HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
        "CHECK_DATES" => $arParams["CHECK_DATES"],
    ),
    $component
);?>

