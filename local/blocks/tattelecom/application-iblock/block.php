<section class="application" id="application-host">
    <img src="/local/js/template/tattelecom-1/img/main-page/application/background.svg" alt="" class="application__background">
    <div class="gl__page-content">
        <div class="application__content">
            <h2 class="gl__title application__title">Регистрация на SUP прогулку</h2>
            <div class="application__subtitle mod-no-answer">Отправь заявку и забронируй время на прогулку</div>

            <?$APPLICATION->IncludeComponent(
                "tattelecom:iblock.event.add.form",
                "application__form",
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
                    "IBLOCK_ID" => "57",
                    "IBLOCK_TYPE" => "forms",
                    "LEVEL_LAST" => "Y",
                    "LIST_URL" => "",
                    "MAX_FILE_SIZE" => "0",
                    "MAX_LEVELS" => "100000",
                    "MAX_USER_ENTRIES" => "100000",
                    "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
                    "PROPERTY_CODES" => ["NAME", "238"],
                    "PROPERTY_CODES_REQUIRED" => ["NAME", "238"],
                    "RESIZE_IMAGES" => "N",
                    "SEF_MODE" => "N",
                    "STATUS" => "ANY",
                    "STATUS_NEW" => "N",
                    "USER_MESSAGE_ADD" => "",
                    "USER_MESSAGE_EDIT" => "",
                    "USE_CAPTCHA" => "N",
                    "EVENT" => "12013",
                    "SUCCESS_MSG" => "Вы успешно зарегистрировались в розыгрыше. Ждём Вас на подведении итогов в 18:40 у главной сцены"
                )
            );?>
        </div>
    </div>
</section>