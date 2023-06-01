<section class="sales-offices-map" id="sales-offices-map-host">
    <div class="gl__page-content">
        <h1 class="gl__title">Офисы продаж</h1>
    </div>
    <div class="sales-offices-map__container">
        <div class="sales-offices-map__points-list">
            <div class="gl__page-content">
                <div class="sales-offices-map__points-list__content">
                    <form class="sales-offices-map__form">
                        <label class="sales-offices-map__input-search-wrapper">
                            <input type="text" class="sales-offices-map__input-search js-input-search" placeholder="Поиск">
                            <svg width="24" height="24" aria-hidden="true" class="sales-offices-map__input-search-icon">
                                <use xlink:href="#search"></use>
                            </svg>
                        </label>
                        <label class="checkbox__wrapper">
                            <input type="checkbox" class="checkbox js-checkbox" name="checkbox-ofice">
                            <span class="checkbox__content mod-main">
												<svg width="16" height="16" aria-hidden="true" class="checkbox__content-icon">
													<use xlink:href="#checkbox-checked"></use>
												</svg>
											</span>
                            <span class="checkbox__text mod-black">Офисы партнёров</span>
                        </label>
                    </form>
                    <div class="sales-offices-map__not-found js-not-found">По вашему запросу ничего не найдено</div>
                    <?php
                        global $arOffices2Filter;
                        $arOffices2Filter = ["PROPERTY_SECTION_VALUE" => "Частным клиентам"];

//                        $GLOBALS['arOfficesFilter'] = array(
//                            '=PROPERTY_TYPE_VALUE' => CIBlockPropertyEnum::GetList(Array(),
//                                Array("IBLOCK_ID"=>24, "XML_ID"=>"1"))->GetNext()["VALUE"]
//                        );
                    ?>
                    <?php $APPLICATION->IncludeComponent("bitrix:news.list","offices-list",Array(
                            "IBLOCK_TYPE" => "mobile",
                            "IBLOCK_ID" => "24",
                            "NEWS_COUNT" => "9999",
                            "SORT_BY1" => "SORT",
                            "SORT_ORDER1" => "ASC",
                            "SORT_BY2" => "ACTIVE_FROM",
                            "SORT_ORDER2" => "DESC",
                            "FILTER_NAME" => "arOffices2Filter",
                            "FIELD_CODE" => Array("ID", "NAME"),
                            "PROPERTY_CODE" => Array("SETTLEMENT", "ADDRESS", "COORDINATES", "WEEKDAY", "SATURDAY", "SUNDAY", "IS_PARTNER", "TIME", "DAY", "DAY_TIME", "SECTION"),
                            "CHECK_DATES" => "N",
                            "DETAIL_URL" => "/#SECTION_CODE#/#ELEMENT_CODE#/",
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
        <div
                class="sales-offices-map__map js-map"
                data-center="[55.78, 49.1]"
                data-pin="/local/js/template/tattelecom-1/img/common/balloon.svg"
        >
        </div>
    </div>
</section>