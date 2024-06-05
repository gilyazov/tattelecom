<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости компании «Летай»");
$APPLICATION->SetPageProperty("title", "Свежие новости | Оператор Летай в Татарстане");
$APPLICATION->SetPageProperty("description", "Свежие новости оператора связи Летай в Татарстане. Интересные факты и советы. Узнать подробнее об услугах компании и тарифах связи можно на сайте или по телефону +7 (843) 222-22-22.");
?><section class="news-page <?=(SITE_ID == "s2") ? "mod-business" : ""?>">
    <div class="gl__page-content">
        <?$APPLICATION->IncludeComponent("bitrix:news", "main_news", array(
            "IBLOCK_TYPE" => "mobile",
            "IBLOCK_ID" => "29",
            "NEWS_COUNT" => "6",
            "USE_SEARCH" => "N",
            "USE_RSS" => "Y",
            "NUM_NEWS" => "20",
            "NUM_DAYS" => "30",
            "YANDEX" => "N",
            "USE_RATING" => "N",
            "USE_CATEGORIES" => "N",
            "USE_FILTER" => "N",
            "FILTER_NAME" => "newsFilter",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_ORDER1" => "DESC",
            "SORT_BY2" => "SORT",
            "SORT_ORDER2" => "ASC",
            "CHECK_DATES" => "Y",
            "SEF_MODE" => "Y",
            "SEF_FOLDER" => "/news/",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_SHADOW" => "N",
            "AJAX_OPTION_JUMP" => "Y",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "Y",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "DISPLAY_PANEL" => "N",
            "SET_TITLE" => "N",
            "SET_STATUS_404" => "Y",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "ADD_SECTIONS_CHAIN" => "Y",
            "USE_PERMISSIONS" => "N",
            "PREVIEW_TRUNCATE_LEN" => "",
            "LIST_ACTIVE_DATE_FORMAT" => "d F",
            "LIST_FIELD_CODE" => array(
                0 => "NAME",
                1 => "DATE_ACTIVE_FROM",
                2 => "ACTIVE_FROM",
            ),
            "LIST_PROPERTY_CODE" => array(
                0 => "TYPE",
                1 => "",
            ),
            "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
            "DISPLAY_NAME" => "Y",
            "META_KEYWORDS" => "-",
            "META_DESCRIPTION" => "-",
            "BROWSER_TITLE" => "-",
            "DETAIL_ACTIVE_DATE_FORMAT" => "d F Y",
            "DETAIL_FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "DETAIL_PROPERTY_CODE" => array(
                0 => "TYPE",
                1 => "",
            ),
            "DETAIL_DISPLAY_TOP_PAGER" => "N",
            "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
            "DETAIL_PAGER_TITLE" => "Страница",
            "DETAIL_PAGER_TEMPLATE" => "",
            "DETAIL_PAGER_SHOW_ALL" => "N",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "PAGER_TITLE" => "Новости",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => "pagination",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
            "PAGER_SHOW_ALL" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "SEF_URL_TEMPLATES" => array(
                "news" => "/news/",
                "section" => "",
                "detail" => "#ELEMENT_CODE#/",
//                        "search" => "search/",
//                        "rss" => "rss/",
//                        "rss_section" => "#SECTION_ID#/rss/",
            )
        ),
            false
        );?>
    </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>