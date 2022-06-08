<div class="tatt-section-news">
    <section class="news-list" id="news-list-host">
        <div class="gl__page-content">
            <div class="gl__title-head">
                <h2 class="gl__title">Новости Таттелеком</h2>
                <div class="gl__xs-hide">
                    <a href="/press-center/news/" class="gl__link-show-all">Все новости<svg width="20" height="20" aria-hidden="true" class="gl__link-show-all-icon">
                            <use xlink:href="#arrow-right"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="gl-slider js-swiper" data-swiper-slides-preview="3">
                <div class="gl-slider__container swiper-container js-swiper-container">
                    <?
                    global $arrFilter;
                    $arrFilter = array(
                        "PROPERTY_TYPE_VALUE" => "О компании"
                    );
                    ?>
                    <?php $APPLICATION->IncludeComponent("bitrix:news.list","main-news",Array(
                            "IBLOCK_TYPE" => "mobile",
                            "IBLOCK_ID" => "29",
                            "NEWS_COUNT" => "30",
                            "SORT_BY1" => "SORT",
                            "SORT_ORDER1" => "ASC",
                            "SORT_BY2" => "ACTIVE_FROM",
                            "SORT_ORDER2" => "DESC",
                            "FILTER_NAME" => "arrFilter",
                            "FIELD_CODE" => Array("ID", "NAME", "DETAIL_PAGE_URL"),
                            "PROPERTY_CODE" => Array("",),
                            "CHECK_DATES" => "N",
                            "DETAIL_URL" => "/press-center/news/#ELEMENT_CODE#/",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "ACTIVE_DATE_FORMAT" => "d F",
                            "SET_TITLE" => "N",
                            "PAGER_TEMPLATE" => "",
                            "DISPLAY_TOP_PAGER" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "N"
                        )
                    );?>
                </div>
                <div class="gl__bg-hide">
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
            </div>
            <div class="gl__xs-show">
                <a href="/press-center/news/" class="gl__link-show-all">Все новости<svg width="20" height="20" aria-hidden="true" class="gl__link-show-all-icon">
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</div>