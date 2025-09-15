<section class="participate" id="participate">
    <div class="participate__content">
        <h2 class="participate__heading">
            Участвуй в розыгрыше прямо сейчас
        </h2>
        <?$APPLICATION->IncludeComponent(
            "bitrix:iblock.element.add.form",
            "participate__form",
            Array(
                "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
                "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
                "CUSTOM_TITLE_DETAIL_PICTURE" => "",
                "CUSTOM_TITLE_DETAIL_TEXT" => "",
                "CUSTOM_TITLE_IBLOCK_SECTION" => "",
                "CUSTOM_TITLE_NAME" => "ФИО",
                "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
                "CUSTOM_TITLE_PREVIEW_TEXT" => "",
                "CUSTOM_TITLE_TAGS" => "",
                "DEFAULT_INPUT_SIZE" => "30",
                "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
                "ELEMENT_ASSOC" => "CREATED_BY",
                "GROUPS" => array("2"),
                "IBLOCK_ID" => "80",
                "IBLOCK_TYPE" => "forms",
                "LEVEL_LAST" => "Y",
                "LIST_URL" => "",
                "MAX_FILE_SIZE" => "0",
                "MAX_LEVELS" => "100000",
                "MAX_USER_ENTRIES" => "100000",
                "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
                "PROPERTY_CODES" => ["NAME", "336"],
                "PROPERTY_CODES_REQUIRED" => ["NAME", "336"],
                "RESIZE_IMAGES" => "N",
                "SEF_MODE" => "N",
                "STATUS" => "ANY",
                "STATUS_NEW" => "N",
                "USER_MESSAGE_ADD" => "",
                "USER_MESSAGE_EDIT" => "",
                "USE_CAPTCHA" => "N",
                "FORM_CLASS" => "participate__form"
            )
        );?>
    </div>
</section>