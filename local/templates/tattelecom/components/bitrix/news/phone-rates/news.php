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
$APPLICATION->IncludeFile($templateFolder . '/menu.php', ["IBLOCK_ID" => $arParams["IBLOCK_ID"]], [])
?>


<section class="rates-list">
    <div class="gl__page-content">
        <div class="rates-list__content">
            <h1 class="rates-list__title gl__title"><?$APPLICATION->ShowTitle(false)?></h1>

            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "rates-list__menu",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "COMPONENT_TEMPLATE" => ".default",
                    "DELAY" => "Y",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "N",
                    "MENU_THEME" => "site",
                    "ROOT_MENU_TYPE" => "left",
                    "USE_EXT" => "Y"
                ),
                $component
            );?>

            <div class="gl__lg-show">
                <button type="button" class="gl__btn-settings js-open-filter-modal">Безлимитный интернет<svg width="20" height="20" aria-hidden="true" class="gl__btn-settings-icon">
                        <use xlink:href="#settigs"></use>
                    </svg>
                </button>
            </div>

            <div class="rates-list__list-wrapper">
                <?
                global $arrFilterCity;
                if ($arParams['IBLOCK_ID'] == 17){
                    $arrFilterCity[0][1] = [
                        "!ID" => \CIBlockElement::SubQuery(
                            "ID",
                            array(
                                "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                                "PROPERTY_EXCLUDE_CITY" => $_SESSION['city']['id'],
                            )
                        )
                    ];
                }
                ?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    ($arParams['IBLOCK_ID'] == 6 ? "" : "internet"),
                    Array(
                        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                        "PARENT_SECTION" => 636,
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
                        "FILTER_NAME" => "arrFilterCity",
                        "HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
                        "CHECK_DATES" => $arParams["CHECK_DATES"],
                    ),
                    $component
                );?>
            </div>
        </div>
    </div>
</section>