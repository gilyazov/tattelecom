<section class="b-support gl__section">
    <div class="gl__page-content">
        <div class="b-support__content">
            <div class="b-support__block b-support__form-block">
                <h3 class="b-support__form-title">Хотите узнать больше?</h3>
                <span class="b-support__form-label">Наши специалисты помогут подобрать решения, отталкиваясь от ваших бизнес-потребностей</span>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:iblock.element.add.form",
                    "b-support__form",
                    Array(
                        "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
                        "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
                        "CUSTOM_TITLE_DETAIL_PICTURE" => "",
                        "CUSTOM_TITLE_DETAIL_TEXT" => "",
                        "CUSTOM_TITLE_IBLOCK_SECTION" => "",
                        "CUSTOM_TITLE_NAME" => "Ваше имя",
                        "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
                        "CUSTOM_TITLE_PREVIEW_TEXT" => "",
                        "CUSTOM_TITLE_TAGS" => "",
                        "DEFAULT_INPUT_SIZE" => "30",
                        "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
                        "ELEMENT_ASSOC" => "CREATED_BY",
                        "GROUPS" => array("2"),
                        "IBLOCK_ID" => "45",
                        "IBLOCK_TYPE" => "buisness",
                        "LEVEL_LAST" => "Y",
                        "LIST_URL" => "",
                        "MAX_FILE_SIZE" => "0",
                        "MAX_LEVELS" => "100000",
                        "MAX_USER_ENTRIES" => "100000",
                        "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
                        "PROPERTY_CODES" => array("NAME", "174", "220", "337", "338"),
                        "PROPERTY_CODES_REQUIRED" => ["NAME", "174", "220"],
                        "RESIZE_IMAGES" => "N",
                        "SEF_MODE" => "N",
                        "STATUS" => "ANY",
                        "STATUS_NEW" => "N",
                        "USER_MESSAGE_ADD" => "",
                        "USER_MESSAGE_EDIT" => "",
                        "USE_CAPTCHA" => "Y"
                    )
                );?>
            </div>
            <div class="b-support__block b-support__contacts-block">
                <div>
                    <h3 class="b-support__contacts-title">Служба поддержки</h3>
                    <span class="b-support__contacts-label">Для оперативной связи со службой поддержки обращайтесь одним из удобных способов</span>
                    <a class="b-support__contacts-tel" title="Позвонить" href="tel:+78432380000">(843) 238-00-00</a>
                    <?$APPLICATION->IncludeComponent("bitrix:news.list", "b-socials",
                        Array(
                            "IBLOCK_TYPE" => "about",
                            "IBLOCK_ID" => "51",
                            "NEWS_COUNT" => "999",
                            "SORT_BY1" => "SORT",
                            "SORT_ORDER1" => "ASC",
                            "SORT_BY2" => "ACTIVE_FROM",
                            "SORT_ORDER2" => "DESC",
                            "FILTER_NAME" => "",
                            "FIELD_CODE" => [],
                            "PROPERTY_CODE" => ["LINK", "CLASS", "ICON"],
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
                            "PARENT_SECTION" => "823",
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
                </div>
            </div>
        </div>
    </div>
</section>