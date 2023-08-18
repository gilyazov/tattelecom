<div class="modal" id="modal-callback-host">
    <div class="modal__container mod-small js-modal-container">
        <div class="modal__content js-modal-content">
            <div class="modal__head">
                <div class="modal__title">Оставьте свой номер, мы перезвоним Вам в течение 15 минут.</div>
                <button type="button" class="modal__btn-close js-close-callback-modal">
                    <svg width="32" height="32" aria-hidden="true" class="modal__close-icon">
                        <use xlink:href="#close"></use>
                    </svg>
                </button>
            </div>
            <?$APPLICATION->IncludeComponent(
                "tattelecom:form",
                "",
                [],
                false
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
                <button type="button" class="modal__btn-close mod-modal-thanks" id="close-thanks-modal">
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
                        <div>Мы перезвоним Вам в течение 15 минут.</div>
                        <div>Клиентская служба работает с 08-00 до 20-00.</div>
                    </div>
                </div>

                <div class="send-request__product-wrapper">
                    <img src="" alt="" class="send-request__product-img">
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
            <a href="/payment/" class="side-bar__bottom-link">Оплата</a>
        </div>
    </div>
</div>