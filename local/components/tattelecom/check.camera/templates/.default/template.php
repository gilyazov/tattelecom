<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>

<form class="rates-internet-application__form js-internet-connect-form" data-need-validation data-parsley-validate data-parsley-focus="none">
    <div class="gl__title">Проверить установленные камеры в моем дворе</div>
    <!--<div class="rates-internet-application__form-subtitle">Проверьте возможность подключения по вашему адресу:</div>-->
    <div class="rates-internet-application__form-controls">
        <input type="hidden" name="uuid" value="">
        <label class="gl-input__wrapper js-input-text">
            <input type="text" id="address" class="gl-input__input" placeholder="Введите адрес" name="address" data-parsley-required="">
        </label>
        <div class="rates-internet-application__form-btn-wrapper">
            <button type="submit" class="gl__main-btn rates-internet-application__form-btn">Проверить</button>
        </div>
    </div>
</form>


<div class="modal" id="modal-check-camera-ok">
    <div class="modal__container mod-small js-modal-container">
        <div class="modal__content js-modal-content">
            <div class="modal__head">
                <div class="modal__title">Поздравляем! В вашем дворе установлены <span class="js-camera-count">0</span>-камер по программе "Безопасный двор".</div>
                <button type="button" class="modal__btn-close js-close-requestLetai-modal">
                    <svg width="32" height="32" aria-hidden="true" class="modal__close-icon">
                        <use xlink:href="#close"></use>
                    </svg>
                </button>
            </div>
            <p class="modal__text">Вы можете их просматривать в мобильном приложение Летай 2.0.</p>

            <div class="applications-list__item-links-wrapper">
                <a href="https://play.google.com/store/apps/details?id=lc.deck.tattelecom" class="applications-list__item-link link-google" target="_self">
                    <img src="<?=BUILD_PATH?>img/common/google-play.svg" alt="" class="applications-list__item-link-icon">
                </a>
                <a href="https://apps.apple.com/ru/app/%D0%BB%D0%B5%D1%82%D0%B0%D0%B9-2-0/id1574494891" class="applications-list__item-link link-apple" target="_self">
                    <img src="<?=BUILD_PATH?>img/common/app-store.svg" alt="" class="applications-list__item-link-icon">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal-check-camera-no">
    <div class="modal__container mod-small js-modal-container">
        <div class="modal__content js-modal-content">
            <div class="modal__head">
                <div class="modal__title">К сожалению, на данный момент в вашем дворе не установлены камеры по программе "Безопасный двор".</div>
                <button type="button" class="modal__btn-close js-close-badRequestLetai-modal">
                    <svg width="32" height="32" aria-hidden="true" class="modal__close-icon">
                        <use xlink:href="#close"></use>
                    </svg>
                </button>
            </div>
            <p class="modal__text">Если у вас остались вопросы - оставьте заявку и мы вам перезвоним.</p>
            <?$APPLICATION->IncludeComponent(
                "tattelecom:form",
                "",
                [],
                false
            );?>
        </div>
    </div>
</div>