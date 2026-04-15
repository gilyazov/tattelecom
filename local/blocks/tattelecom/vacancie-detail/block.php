<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
/** @global CMain $APPLICATION */
$variables = \Bitrix\Landing\Landing::getVariables();
$elementCode = $variables['sef'][0] ?? "";
?>

<?php $ElementID = $APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "vacancy-detail",
    Array(
        "ACTIVE_DATE_FORMAT" => "j M Y",
        "ADD_ELEMENT_CHAIN" => "Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BROWSER_TITLE" => "-",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "ELEMENT_CODE" => $elementCode,
        //"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
        "FIELD_CODE" => array("PREVIEW_PICTURE", ""),
        "IBLOCK_ID" => "84",
        "IBLOCK_TYPE" => "mobile",
        "IBLOCK_URL" => "",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Страница",
        "PROPERTY_CODE" => array("FEATURE"),
        "SET_BROWSER_TITLE" => "Y",
        "SET_CANONICAL_URL" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "STRICT_SECTION_CHECK" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_SHARE" => "N"
    )
);?>

<section class="vacancy-response-form gl__section" id="form">
    <div class="gl__page-content">
        <div class="vacancy-response-form__content">
            <h2 class="vacancy-response-form__title">Оставьте отклик</h2>
            <p class="vacancy-response-form__subtitle">Здесь Вы можете оставить свои контакты для связи</p>

            <?$APPLICATION->IncludeComponent(
                "bitrix:iblock.element.add.form",
                "vacancy-response-form__card",
                Array(
                    "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
                    "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
                    "CUSTOM_TITLE_DETAIL_PICTURE" => "",
                    "CUSTOM_TITLE_DETAIL_TEXT" => "",
                    "CUSTOM_TITLE_IBLOCK_SECTION" => "",
                    "CUSTOM_TITLE_NAME" => "Имя",
                    "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
                    "CUSTOM_TITLE_PREVIEW_TEXT" => "",
                    "CUSTOM_TITLE_TAGS" => "",
                    "DEFAULT_INPUT_SIZE" => "30",
                    "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
                    "ELEMENT_ASSOC" => "CREATED_BY",
                    "GROUPS" => array("2"),
                    "IBLOCK_ID" => "85",
                    "IBLOCK_TYPE" => "forms",
                    "LEVEL_LAST" => "Y",
                    "LIST_URL" => "",
                    "MAX_FILE_SIZE" => "0",
                    "MAX_LEVELS" => "100000",
                    "MAX_USER_ENTRIES" => "100000",
                    "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
                    "PROPERTY_CODES" => ["NAME", "362", "363", "364", "365"],
                    "PROPERTY_CODES_REQUIRED" => ["NAME", "364"],
                    "RESIZE_IMAGES" => "N",
                    "SEF_MODE" => "N",
                    "STATUS" => "ANY",
                    "STATUS_NEW" => "N",
                    "USER_MESSAGE_ADD" => "",
                    "USER_MESSAGE_EDIT" => "",
                    "USE_CAPTCHA" => "Y",
                    "FORM_CLASS" => "vacancy-response-form__form"
                )
            );?>
            <div class="vacancy-response-form__card">
                <form class="vacancy-response-form__form" data-need-validation data-parsley-validate data-parsley-focus="none">
                    <div class="vacancy-response-form__field">
                        <div class="select">
                            <div class="select__container" id="vacancy-city">
                                <label class="select__wrapper">
                                    <span class="gl__input-mark-required"></span>
                                    <select class="gl__select js-custom-select" data-parsley-class-handler="#vacancy-city" name="vacancy-city" data-parsley-required="" data-parsley-trigger="change">
                                        <option placeholder value="">Выберите город</option>
                                        <option value="Казань">Казань</option>
                                        <option value="Набережные Челны">Набережные Челны</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="vacancy-response-form__field">
                        <label class="gl-input__wrapper js-input-text">
                            <input type="text" class="gl-input__input" placeholder="Имя" name="vacancy-name" data-parsley-required="" data-parsley-minlength="2">
                        </label>
                    </div>
                    <div class="vacancy-response-form__field">
                        <label class="gl-input__wrapper js-input-text">
                            <input type="text" class="gl-input__input" placeholder="Фамилия" name="vacancy-surname" data-parsley-required="" data-parsley-minlength="2">
                        </label>
                    </div>
                    <div class="vacancy-response-form__field">
                        <label class="gl-input__wrapper js-input-tel">
                            <input type="tel" class="gl-input__input js-phone-mask" placeholder="+7 (___) ___-__-__" name="vacancy-phone" data-parsley-required="">
                        </label>
                    </div>
                    <div class="vacancy-response-form__field">
                        <label class="gl-input__wrapper js-input-text">
                            <input type="text" class="gl-input__input" placeholder="Дата рождения" name="vacancy-birthdate" data-parsley-required="">
                        </label>
                    </div>
                    <div class="vacancy-response-form__checkbox">
                        <label class="checkbox__wrapper">
                            <input type="checkbox" class="checkbox" name="vacancy-policy" data-parsley-required="">
                            <span class="checkbox__content mod-main">
												<svg width="16" height="16" aria-hidden="true" class="checkbox__content-icon">
													<use xlink:href="#checkbox-checked"></use>
												</svg>
											</span>
                            <span class="checkbox__text mod-black">Я принимаю условия политики ПАО &quot;Таттелеком&quot; и даю согласие субъекта на обработку персональных данных</span>
                        </label>
                    </div>
                    <div class="vacancy-response-form__actions">
                        <button type="submit" class="vacancy-response-form__btn gl__main-btn">Откликнуться</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
