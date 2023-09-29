<section class="articles">
    <div class="site-container">
        <div class="articles__inner">
            <h2 class="articles__title title">Полезные статьи</h2>

            <?php $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "articles__swiper-wrapper",
                Array(
                    "IBLOCK_TYPE" => "buisness",
                    "IBLOCK_ID" => "10",
                    "NEWS_COUNT" => "",
                    "SORT_BY1" => "SORT",
                    "SORT_ORDER1" => "ASC",
                    "SORT_BY2" => "ACTIVE_FROM",
                    "SORT_ORDER2" => "DESC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => Array("ID", "NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE"),
                    "PROPERTY_CODE" => Array(),
                    "CHECK_DATES" => "N",
                    "DETAIL_URL" => "/articles/#ELEMENT_CODE#/",
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
</section>