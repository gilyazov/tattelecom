<section class="b-request-for-connection gl__section">
    <div class="gl__page-content">
        <div class="b-request-for-connection__content">
			<h3 class="b-request-for-connection__form-title">Оставить заявку на подключение</h3>
            <span class="b-request-for-connection__form-label">Наши специалисты помогут подобрать решения, отталкиваясь от ваших бизнес-потребностей</span>

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
                    "PROPERTY_CODES" => ["NAME", "174", "309"],
                    "PROPERTY_CODES_REQUIRED" => ["NAME", "174", "309"],
                    "RESIZE_IMAGES" => "N",
                    "SEF_MODE" => "N",
                    "STATUS" => "ANY",
                    "STATUS_NEW" => "N",
                    "USER_MESSAGE_ADD" => "",
                    "USER_MESSAGE_EDIT" => "",
                    "USE_CAPTCHA" => "Y",
                    "FORM_CLASS" => "b-request-for-connection__form mod-4-in-row"
                )
            );?>
        </div>
    </div>
</section>