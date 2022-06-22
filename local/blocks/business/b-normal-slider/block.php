<section class="b-normal-slider gl__section" id="b-normal-slider-host">
    <div class="gl__page-content">
        <h2 class="gl__title">Кейсы</h2>
    </div>
    <div class="gl__page-content">
        <div class="gl-slider js-swiper" data-swiper-slides-preview="2.5" data-swiper-gap="20">
            <div class="gl__bg-hide">
                <button type="button" class="gl-slider__slider-btn mod-prev gl__no-default-hover js-slider-btn-prev gl-slider__b-slider-btn">
                    <svg class="gl-slider__slider-btn-icon" width="26" height="26" aria-hidden="true">
                        <use xlink:href="#arrow-left"></use>
                    </svg>
                </button>
                <button type="button" class="gl-slider__slider-btn mod-next gl__no-default-hover js-slider-btn-next gl-slider__b-slider-btn">
                    <svg class="gl-slider__slider-btn-icon" width="26" height="26" aria-hidden="true">
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                </button>
            </div>
            <div class="gl-slider__b-container gl-slider__container swiper-container js-swiper-container">
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "cases-list",
                    Array(
                        "IBLOCK_TYPE" => "buisness",
                        "IBLOCK_ID" => "9",
                        "NEWS_COUNT" => "",
                        "SORT_BY1" => "SORT",
                        "SORT_ORDER1" => "ASC",
                        "SORT_BY2" => "ACTIVE_FROM",
                        "SORT_ORDER2" => "DESC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => Array("ID", "NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE"),
                        "PROPERTY_CODE" => Array(),
                        "CHECK_DATES" => "N",
                        "DETAIL_URL" => "/cases/#ELEMENT_CODE#/",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_TITLE" => "N",
                        "PAGER_TEMPLATE" => "",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "N"
                    )
                );?>
            </div>
        </div>
    </div>
</section>