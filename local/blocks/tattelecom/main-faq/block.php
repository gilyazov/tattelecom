<section class="questions" id="questions-host">
    <div class="gl__page-content">
        <h1 class="gl__title">Часто задаваемые вопросы</h1>
        <div class="questions__content">
            <label class="input-search__wrapper">
                <input type="text" class="input-search js-input-search" placeholder="Что будем искать?">
                <svg width="24" height="24" aria-hidden="true" class="input-search__icon">
                    <use xlink:href="#search"></use>
                </svg>
            </label>
            <?php $APPLICATION->IncludeComponent("bitrix:catalog.section.list","questions-list",
                Array(
                    "IBLOCK_TYPE" => "support",
                    "IBLOCK_ID" => "21",
                    "SECTION_URL" => "",
                    "COUNT_ELEMENTS" => "N",
                    "SECTION_FIELDS" => Array(),
                    "SECTION_USER_FIELDS" => Array(),
                    "ADD_SECTIONS_CHAIN" => "N",
                    "TOP_DEPTH" => 1,
                    "CACHE_TYPE" => "N",
                    "CACHE_TIME" => "0",
                )
            );?>
        </div>
    </div>
</section>