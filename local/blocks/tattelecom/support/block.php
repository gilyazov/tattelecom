<section class="support" id="support-host">
    <div class="gl__page-content">
        <h1 class="gl__title">Служба поддержки</h1>
        <div class="support__subtitle">Для оперативной связи со службой поддержки рекомендуем обращаться одним из удобных способов:</div>
        <a href="tel:+78432222222" class="support__tel">(843)222-22-22</a>
        <ul class="support__messages-list">
            <li class="support__messages-item">
                <a href="#" class="support__messages-link">
                    <img src="/local/js/template/tattelecom/img/common/apps/wp.svg" alt="" class="support__messages-icon">
                </a>
            </li>
            <li class="support__messages-item">
                <a href="#" class="support__messages-link">
                    <img src="/local/js/template/tattelecom/img/common/apps/telegram.png" alt="" class="support__messages-icon">
                </a>
            </li>
            <li class="support__messages-item">
                <a href="#" class="support__messages-link">
                    <img src="/local/js/template/tattelecom/img/common/apps/vk.png" alt="" class="support__messages-icon">
                </a>
            </li>
            <li class="support__messages-item">
                <a href="#" class="support__messages-link">
                    <img src="/local/js/template/tattelecom/img/common/apps/facebook.svg" alt="" class="support__messages-icon">
                </a>
            </li>
        </ul>
        <ul class="support__links-list">
            <li class="support__link-item gl__white-container">
                <div class="support__link-item-title">Часто задаваемые вопросы</div>
                <a href="#" class="support__link">Подробнее<svg width="38" height="38" aria-hidden="true" class="support__link-icon">
                        <use xlink:href="#arrow-line-right"></use>
                    </svg>
                </a>
            </li>
            <li class="support__link-item gl__white-container">
                <div class="support__link-item-title">Инструкции</div>
                <a href="#" class="support__link">Подробнее<svg width="38" height="38" aria-hidden="true" class="support__link-icon">
                        <use xlink:href="#arrow-line-right"></use>
                    </svg>
                </a>
            </li>
            <li class="support__link-item gl__white-container">
                <div class="support__link-item-title">Технические работы</div>
                <a href="#" class="support__link">Подробнее<svg width="38" height="38" aria-hidden="true" class="support__link-icon">
                        <use xlink:href="#arrow-line-right"></use>
                    </svg>
                </a>
            </li>
            <li class="support__link-item gl__white-container">
                <div class="support__link-item-title">Документы</div>
                <a href="#" class="support__link">Подробнее<svg width="38" height="38" aria-hidden="true" class="support__link-icon">
                        <use xlink:href="#arrow-line-right"></use>
                    </svg>
                </a>
            </li>
            <li class="support__link-item gl__white-container">
                <div class="support__link-item-title">Третьи лица</div>
                <a href="#" class="support__link">Подробнее<svg width="38" height="38" aria-hidden="true" class="support__link-icon">
                        <use xlink:href="#arrow-line-right"></use>
                    </svg>
                </a>
            </li>
        </ul>

        <?$APPLICATION->IncludeComponent(
            "bitrix:search.form",
            "support-input",
            array(
                "PAGE" => "#SITE_DIR#search/",
                "USE_SUGGEST" => "N",
                "COMPONENT_TEMPLATE" => "support-input"
            ),
            false
        );?>

        <?$APPLICATION->IncludeComponent(
            "bitrix:catalog.section.list",
            "support__info-links",
            Array(
                "ADD_SECTIONS_CHAIN" => "N",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COUNT_ELEMENTS" => "Y",
                "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                "FILTER_NAME" => "sectionsFilter",
                "IBLOCK_ID" => "21",
                "IBLOCK_TYPE" => "support",
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