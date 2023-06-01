<section class="support support-title" id="support-host">
    <div class="gl__page-content">
        <h1 class="gl__title">Служба поддержки</h1>
        <div class="support__subtitle">Для оперативной связи со службой поддержки рекомендуем обращаться одним из удобных способов:</div>
        <a href="tel:+78432222222" class="support__tel">(843)222-22-22</a>

        <?$APPLICATION->IncludeComponent("bitrix:news.list", "support__messages-list",
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
                "PROPERTY_CODE" => ["LINK", "ICON_SUPPORT"],
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
</section>