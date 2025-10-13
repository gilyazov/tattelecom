<div class="modal" id="modal-callback-host">
    <div class="modal__container mod-small js-modal-container">
        <div class="modal__content js-modal-content">
            <div class="modal__head">
                <div class="modal__title">Оставьте свой номер и мы свяжемся с Вами в ближайшее время.</div>
                <button type="button" class="modal__btn-close js-close-callback-modal">
                    <svg width="32" height="32" aria-hidden="true" class="modal__close-icon">
                        <use xlink:href="#close"></use>
                    </svg>
                </button>
            </div>

            <?$APPLICATION->IncludeComponent(
                "bitrix:iblock.element.add.form",
                "modal-callback-host",
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
                    "PROPERTY_CODES" => ["NAME", "174", "309", "337", "338"],
                    "PROPERTY_CODES_REQUIRED" => ["NAME", "174"],
                    "RESIZE_IMAGES" => "N",
                    "SEF_MODE" => "N",
                    "STATUS" => "ANY",
                    "STATUS_NEW" => "N",
                    "USER_MESSAGE_ADD" => "",
                    "USER_MESSAGE_EDIT" => "",
                    "USE_CAPTCHA" => "Y"
                )
            );?>

            <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallbackRecap&render=<?=GoogleReCaptcha::PUBLIC_KEY?>" async defer></script>
            <script>
                var onloadCallbackRecap = function() {
                    grecaptcha.ready(function () {
                        grecaptcha.execute('<?=GoogleReCaptcha::PUBLIC_KEY?>', { action: 'contact_callback' }).then(function (token) {
                            var recaptchaResponse = document.getElementById('recaptchaResponse');
                            recaptchaResponse.dataset.value = token;
                        });
                    });
                };
            </script>
            <div id="recaptchaResponse" data-value=""></div>
        </div>
    </div>
</div>
<div class="modal" id="modal-thanks">
    <div class="modal-thanks__container modal__container mod-small" id="modal-thanks-container">
        <div class="modal__content js-modal-content">
            <img src="<?=BUILD_PATH?>img/modals/background.svg" alt="" class="modal-thanks__background">
            <div class="modal-thanks__head">
                <button class="modal__btn-close mod-modal-thanks" id="close-thanks-modal">
                    <svg width="32" height="32" aria-hidden="true" class="modal__close-icon mod-white">
                        <use xlink:href="#close"></use>
                    </svg>
                </button>
            </div>
            <div class="modal-thanks__title">Спасибо!</div>
            <div class="modal-thanks__image-wrapper">
                <img src="<?=BUILD_PATH?>img/modals/thanks.svg" alt="" class="modal-thanks__image">
            </div>
            <div class="modal-thanks__text">
                <div>Ваша заявка принята в обработку.</div>
                <div>Мы свяжемся с вами в ближайшее время.</div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="b-modal-thanks">
    <div class="modal-thanks__container modal__container mod-small mod-b-modal-thanks" id="b-modal-thanks-container">
        <div class="modal__content">
            <div class="modal-thanks__head">
                <button class="modal__btn-close mod-modal-thanks" id="b-close-thanks-modal">
                    <svg width="32" height="32" aria-hidden="true" class="modal__close-icon mod-white">
                        <use xlink:href="#close"></use>
                    </svg>
                </button>
            </div>
            <div class="modal-thanks__title">Спасибо за заявку, мы свяжемся с вами в ближайшее время!</div>
            <div class="modal-thanks__social-list">
                <p class="modal-thanks__social-text">Мы в социальных сетях:</p>
                <ul class="b-socials">
                    <li class="b-socials__item">
                        <a class="b-socials__link" title="Написать в VK" href="https://vk.com/letairu" target="_blank">
                            <svg width="60" height="60" aria-hidden="true" class="b-socials__link-icon">
                                <use xlink:href="#b-VK"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="b-socials__item">
                        <a class="b-socials__link" title="Написать в Instagram" href="https://www.instagram.com/letai2.0/" target="_blank">
                            <svg width="60" height="60" aria-hidden="true" class="b-socials__link-icon">
                                <use xlink:href="#b-Instagram"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="b-socials__item">
                        <a class="b-socials__link" title="Написать в wt" href="https://api.whatsapp.com/send?phone=79027182268" target="_blank">
                            <svg width="60" height="60" aria-hidden="true" class="b-socials__link-icon">
                                <use xlink:href="#b-wt"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="b-socials__item">
                        <a class="b-socials__link" title="Написать в tg" href="https://t.me/tattelecomru_bot" target="_blank">
                            <svg width="60" height="60" aria-hidden="true" class="b-socials__link-icon">
                                <use xlink:href="#b-tg"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal-send-request-host">
    <div class="modal__container mod-middle js-modal-container">
        <div class="modal__content js-modal-content">
            <div class="modal__head">
                <div class="modal__title">
                    Тариф «Много интернета»
                </div>
                <button type="button" class="modal__btn-close js-close-send-request-modal">
                    <svg width="32" height="32" aria-hidden="true" class="modal__close-icon">
                        <use xlink:href="#close"></use>
                    </svg>
                </button>
            </div>

            <div class="send-request__content">
                <div class="send-request__info">
                    <div class="send-request__price">
                        <span class="number">240</span>₽/мес
                    </div>
                    <div class="send-request__info-hint">
                        <div>Укажите имя и контактный номер телефона.</div>
                        <!--<div>Мы перезвоним Вам в течение 15 минут.</div>-->
                        <div>Клиентская служба работает с 08-00 до 20-00.</div>
                    </div>
                </div>

                <div class="send-request__product-wrapper">
                    <div>
                        <div class="send-request__product-caption">тип</div>
                        <div class="send-request__product-value">модель</div>
                        <div class="send-request__product-price-wrapper">
                            <span class="send-request__product-price">0</span>₽
                        </div>
                    </div>
                </div>

                <?$APPLICATION->IncludeComponent(
                    "tattelecom:form",
                    "form-modal",
                    [],
                    false
                );?>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal-requestLetai-host">
    <div class="modal__container mod-small js-modal-container">
        <div class="modal__content js-modal-content">
            <div class="modal__head">
                <div class="modal__title">Поздравляем! Адрес подходит для подключения пакетной услуги Летай.</div>
                <button type="button" class="modal__btn-close js-close-requestLetai-modal">
                    <svg width="32" height="32" aria-hidden="true" class="modal__close-icon">
                        <use xlink:href="#close"></use>
                    </svg>
                </button>
            </div>
            <p class="modal__text">Оставьте номер телефона и дождитесь звонка оператора для подтверждения технической возможности подключения новых абонентов</p>
            <?$APPLICATION->IncludeComponent(
                "tattelecom:form",
                "",
                [],
                false
            );?>
        </div>
    </div>
</div>
<div class="modal" id="modal-badRequestLetai-host">
    <div class="modal__container mod-small js-modal-container">
        <div class="modal__content js-modal-content">
            <div class="modal__head">
                <div class="modal__title">К сожалению, на данный момент, техническую возможность по указанному адресу определить невозможно!</div>
                <button type="button" class="modal__btn-close js-close-badRequestLetai-modal">
                    <svg width="32" height="32" aria-hidden="true" class="modal__close-icon">
                        <use xlink:href="#close"></use>
                    </svg>
                </button>
            </div>
            <p class="modal__text">Для уточнения технической возможности пожалуйста заполните поля ниже и наш менеджер свяжется по указанным Вами контактным данным в ближайшее время</p>
            <?$APPLICATION->IncludeComponent(
                "tattelecom:form",
                "",
                [],
                false
            );?>
        </div>
    </div>
</div>

<div class="side-bar gl__bg-show" id="side-bar-host">
    <div class="side-bar__content" id="side-bar-content">
        <div class="side-bar__top">
            <div class="side-bar__header">
                <button type="button" class="side-bar__close-btn js-close-side-bar">
                    <svg width="30" height="30" aria-hidden="true" class="side-bar__close-btn-icon">
                        <use xlink:href="#close"></use>
                    </svg>
                </button>
            </div>

            <?$APPLICATION->IncludeComponent(
                "bitrix:search.form",
                "side-bar__search",
                array(
                    "PAGE" => "#SITE_DIR#search/",
                    "USE_SUGGEST" => "N",
                    "COMPONENT_TEMPLATE" => "side-bar__search"
                ),
                false
            );?>
            <button type="button" class="side-bar__btn gl__main-btn js-open-callback-modal">Стать абонентом</button>

            <?$APPLICATION->IncludeComponent("bitrix:menu", "side-bar__drops", Array(
                "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "",    // Тип меню для остальных уровней
                "DELAY" => "N", // Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "4", // Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => array( // Значимые переменные запроса
                    0 => "",
                ),
                "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "N",   // Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                "ROOT_MENU_TYPE" => "top",  // Тип меню для первого уровня
                "USE_EXT" => "Y",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
            ),
                false
            );?>

        </div>
        <div class="side-bar__bottom">
            <a href="/support/" class="side-bar__bottom-link">Поддержка</a>
            <a href="/offices/" class="side-bar__bottom-link">Офисы продаж</a>
        </div>
    </div>
</div>


<div class="modal" id="b-request-services-modal">
    <div class="modal__container mod-small js-modal-container">
        <div class="modal__content js-modal-content">
            <div class="modal__head">
                <div class="modal__title">Получить коммерческое предложение</div>
                <button type="button" class="modal__btn-close js-close-b-request-services-modal">
                    <svg width="32" height="32" aria-hidden="true" class="modal__close-icon">
                        <use xlink:href="#close"></use>
                    </svg>
                </button>
            </div>
            <form class="js-form-modal callback__form" data-need-validation data-parsley-validate data-parsley-focus="none">
                <div class="callback__form-input-wrap-b">
                    <label class="select__wrapper">
                        <select class="gl__select js-custom-select" name="service" data-parsley-required="" data-parsley-trigger="change">
                            <option placeholder value="">Выберите услугу</option>
                            <option value="Выберите услугу">Выберите услугу</option>
                        </select>
                    </label>
                </div>
                <div class="callback__form-input-wrap-b">
                    <label class="gl-input__wrapper js-input-text">
                        <input type="text" class="gl-input__input" placeholder="Ваше имя" name="name" data-parsley-required="">
                    </label>
                </div>
                <div class="callback__form-input-wrap-b">
                    <label class="gl-input__wrapper js-input-email">
                        <input type="email" class="gl-input__input" placeholder="Электронная почта" name="email" data-parsley-required="">
                    </label>
                </div>
                <div class="callback__form-input-wrap-b">
                    <label class="gl-input__wrapper js-input-tel">
                        <input type="tel" class="gl-input__input js-phone-mask" placeholder="+7 (___) ___-__-__" name="tel" data-parsley-required="">
                    </label>
                </div>
                <div class="callback__form-input-wrap-b">
                    <label class="gl-input__wrapper js-input-text">
                        <input type="text" class="gl-input__input" placeholder="Город / населённый пункт" name="city" data-parsley-required="">
                    </label>
                </div>
                <div class="callback__form-input-wrap-b">
                    <label class="gl-input__wrapper js-input-text">
                        <input type="text" class="gl-input__input" placeholder="Улица" name="street" data-parsley-required="">
                    </label>
                </div>
                <div class="callback__form-input-wrap-b">
                    <label class="gl-input__wrapper js-input-text">
                        <input type="text" class="gl-input__input" placeholder="№ дома" name="house-number" data-parsley-required="">
                    </label>
                </div>
                <div class="callback__content-checkbox-wrapper">
                    <label class="checkbox__wrapper">
                        <input type="checkbox" class="checkbox" name="modal-private-house" data-parsley-required="">
                        <span class="checkbox__content mod-modal">
										<svg width="16" height="16" aria-hidden="true" class="checkbox__content-icon">
											<use xlink:href="#checkbox-checked"></use>
										</svg>
									</span>
                        <span class="checkbox__text mod-modal">Частный дом</span>
                    </label>
                </div>
                <p class="modal__required-text">Нажимая кнопку, вы соглашаетесь на обработку персональных данных</p>
                <button type="submit" class="gl__main-btn mod-business modal__btn-submit js-btn-submit">Отправить</button>
                <p class="modal__agreement-true">Нажимая кнопку, вы соглашаетесь на обработку персональных данных</p>
            </form>
        </div>
    </div>
</div>
<div class="modal" id="b-roaming-modal">
    <div class="modal__container mod-small js-modal-container">
        <div class="modal__content js-modal-content">
            <div class="modal__head">
                <div class="modal__title modal__roaming-title">«Весь Мир»</div>
                <button type="button" class="modal__btn-close js-close-b-roaming-modal">
                    <svg width="32" height="32" aria-hidden="true" class="modal__close-icon">
                        <use xlink:href="#close"></use>
                    </svg>
                </button>
            </div>
            <div class="modal__roaming-text">
                <p>Услуга «Весь Мир» подключается бесплатно. Подходит для случаев, когда роуминг должен быть включен всегда. Услуга дает существенную скидку на звонки и интернет по сравнению с базовыми тарифами.</p>
                <p>Абонентская плата всего 10 рублей в месяц.
                    <br>- Подключение по USSD-запросу: *111*328#
                    <br>- Отключение по USSD-запросу: *111*329#
                </p>
                <p>При подключении услуги абонент должен находиться в активном состоянии, должна быть подключена базовая услуга «Международного роуминга».</p>
            </div>
        </div>
    </div>
</div>