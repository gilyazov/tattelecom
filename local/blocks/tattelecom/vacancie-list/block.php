<section class="tatt-achievements__section">
    <div class="gl__page-content">
        <h1 class="tatt-achievements__title gl__title">Наши вакансии</h1>

        <?$APPLICATION->IncludeComponent(
            "bitrix:catalog.section.list",
            "vacancie-list",
            Array(
                "ADD_SECTIONS_CHAIN" => "N",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COUNT_ELEMENTS" => "Y",
                "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                "FILTER_NAME" => "sectionsFilter",
                "IBLOCK_ID" => "61",
                "IBLOCK_TYPE" => "mobile",
                "SECTION_CODE" => "",
                "SECTION_FIELDS" => array("",""),
                "SECTION_ID" => $_REQUEST["SECTION_ID"],
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array("",""),
                "SHOW_PARENT_NAME" => "Y",
                "TOP_DEPTH" => "4",
                "VIEW_MODE" => "LIST"
            )
        );?>
    </div>
</section>