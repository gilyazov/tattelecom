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
                        "PROPERTY_CODES" => array("NAME", "174"),
                        "PROPERTY_CODES_REQUIRED" => ["NAME", "174"],
                        "RESIZE_IMAGES" => "N",
                        "SEF_MODE" => "N",
                        "STATUS" => "ANY",
                        "STATUS_NEW" => "N",
                        "USER_MESSAGE_ADD" => "",
                        "USER_MESSAGE_EDIT" => "",
                        "USE_CAPTCHA" => "N"
                    )
                );?>
            </div>
            <div class="b-support__block b-support__contacts-block">
                <div>
                    <h3 class="b-support__contacts-title">Служба поддержки</h3>
                    <span class="b-support__contacts-label">Для оперативной связи со службой поддержки обращайтесь одним из удобных способов</span>
                    <a class="b-support__contacts-tel" title="Позвонить" href="tel:+78432222222">(843) 238-00-00</a>
                    <ul class="b-socials">
                        <li class="b-socials__item">
                            <a class="b-socials__link" title="Написать в Whatsapp" href="https://api.whatsapp.com/send?phone=79027182268" target="_blank">
                                <span class="b-socials__link-content whatsapp">
                                    <svg width="22" height="22" aria-hidden="true" class="b-socials__link-icon">
                                        <use xlink:href="#soc-whatsapp"></use>
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li class="b-socials__item">
                            <a class="b-socials__link" title="Написать в Telegram" href="https://t.me/tattelecomru_bot" target="_blank">
                                <span class="b-socials__link-content telegram">
                                    <svg width="22" height="20" aria-hidden="true" class="b-socials__link-icon">
                                        <use xlink:href="#soc-telegram"></use>
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li class="b-socials__item">
                            <a class="b-socials__link" title="Написать в VK" href="#">
                                <span class="b-socials__link-content vk">
                                    <svg width="26" height="16" aria-hidden="true" class="b-socials__link-icon">
                                        <use xlink:href="#soc-vk"></use>
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li class="b-socials__item">
                            <a class="b-socials__link" title="Написать в Инстаграмм" href="https://www.instagram.com/letai2.0/" target="_blank">
                                <span class="b-socials__link-content inst">
                                    <svg width="22" height="22" aria-hidden="true" class="b-socials__link-icon">
                                        <use xlink:href="#inst-social"></use>
                                    </svg>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>