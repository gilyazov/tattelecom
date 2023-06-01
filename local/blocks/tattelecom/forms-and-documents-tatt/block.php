<section class="documents">
    <div class="gl__page-content">
        <h1 class="gl__title">Бланки и Документы</h1>
        <?php $APPLICATION->IncludeComponent("bitrix:catalog.section.list","forms-and-documents-list",
            Array(
                "IBLOCK_TYPE" => "support",
                "IBLOCK_ID" => "22",
                "SECTION_URL" => "",
                "COUNT_ELEMENTS" => "N",
                "SECTION_FIELDS" => Array(),
                "SECTION_USER_FIELDS" => Array(),
                "ADD_SECTIONS_CHAIN" => "N",
                "TOP_DEPTH" => 2
            )
        );?>
    </div>
</section>