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