<div class="rates-preview__wrapper">
    <div class="gl-slider__container swiper-container js-swiper-custom css-slider-v2" data-swiper-autoplay="5000">
        <?
        global $arrFilterCity;
        $arrFilterCity[0][1] = [
            "!ID" => \CIBlockElement::SubQuery(
                "ID",
                array(
                    "IBLOCK_ID" => 59,
                    "PROPERTY_EXCLUDE_CITY" => $_SESSION['city']['id'],
                )
            )
        ];
        ?>
        <?$APPLICATION->IncludeComponent("bitrix:news.list", "rates-preview",
            Array(
                "IBLOCK_TYPE" => "mobile",
                "IBLOCK_ID" => "59",
                "NEWS_COUNT" => "999",
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "ACTIVE_FROM",
                "SORT_ORDER2" => "DESC",
                "FILTER_NAME" => "arrFilterCity",
                "FIELD_CODE" => ["DETAIL_PICTURE"],
                "PROPERTY_CODE" => ["LINK"],
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "PARENT_SECTION" => "",
                "INCLUDE_SUBSECTIONS" => "N",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600",
                "CACHE_FILTER" => "Y",
                "CACHE_GROUPS" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => ""
            )
        );?>

        <button type="button" class="gl-slider__slider-btn mod-prev js-slider-btn-prev">
            <svg width="26" height="26" aria-hidden="true" class="gl-slider__slider-btn-icon">
                <use xlink:href="#arrow-left"></use>
            </svg>
        </button>
        <button type="button" class="gl-slider__slider-btn mod-next js-slider-btn-next">
            <svg width="26" height="26" aria-hidden="true" class="gl-slider__slider-btn-icon">
                <use xlink:href="#arrow-right"></use>
            </svg>
        </button>
    </div>

    <div class="gl__bg-hide">
        <div class="rates-preview__sldier-pagination"></div>
    </div>
</div>