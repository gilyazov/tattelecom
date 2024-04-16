<section class="application" id="application">
    <div class="container">
        <div class="application__inner">
            <h2 class="application__title title">Остались вопросы? Оставьте заявку и наш специалист свяжется с вами в самое ближайшее время</h2>

            <?$APPLICATION->IncludeComponent(
                "bitrix:iblock.element.add.form",
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
                    "IBLOCK_ID" => "67",
                    "IBLOCK_TYPE" => "forms",
                    "LEVEL_LAST" => "Y",
                    "LIST_URL" => "",
                    "MAX_FILE_SIZE" => "0",
                    "MAX_LEVELS" => "100000",
                    "MAX_USER_ENTRIES" => "100000",
                    "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
                    "PROPERTY_CODES" => ["NAME", "299", "300"],
                    "PROPERTY_CODES_REQUIRED" => ["NAME", "299", "300"],
                    "RESIZE_IMAGES" => "N",
                    "SEF_MODE" => "N",
                    "STATUS" => "ANY",
                    "STATUS_NEW" => "N",
                    "USER_MESSAGE_ADD" => "",
                    "USER_MESSAGE_EDIT" => "",
                    "USE_CAPTCHA" => "N"
                )
            );?>
            <form class="application__form form" action="/" data-need-validation="data-need-validation">
                <div class="input js-validation-wrapper">
                    <input class="input__control" type="text" name="name" placeholder="Как к Вам обращаться?" required="required">
                </div>
                <div class="input js-validation-wrapper">
                    <input class="input__control js-phone-mask" type="text" name="name" placeholder="+7(___)___-__-__" required="required">
                </div>
                <div class="input js-validation-wrapper">
                    <input class="input__control" type="text" name="inn" placeholder="ИНН">
                </div>
                <div class="cheackbox">
                    <input class="visually-hidden" type="checkbox" id="checkbox-1" required="required">
                    <label class="checkbox__container" for="checkbox-1"><span class="checkbox__control">Отправляя заявку, я соглашаюсь на обработку персональных данных</span>
                    </label>
                </div>
                <button class="form__button button" type="submit">Отправить заявку</button>
            </form>
        </div>
    </div>
</section>