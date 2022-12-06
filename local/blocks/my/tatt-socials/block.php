<section class="tatt-about-company-support tatt-about-company__section">
    <div class="gl__page-content tatt-about-company-support__content">
        <div>
            <h3 class="b-support__contacts-title">Служба поддержки</h3>
            <span class="b-support__contacts-label">Для оперативной связи со службой поддержки обращайтесь одним из удобных способов</span>
            <a class="b-support__contacts-tel" title="Позвонить" href="tel:+78432222222">(843) 238-00-00</a>
            <?php $APPLICATION->IncludeComponent("bitrix:news.list","socials",Array(
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
</section>