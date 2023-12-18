<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
$this->addExternalJS($componentPath . '/script.js');
$this->addExternalCss($componentPath . '/style.css');
?>
<form
    action="" method="post"
    class="services__form-wrapper gl__menu-tab-content js-menu-tab-content js-payment-form" data-menu="mobile" data-need-validation data-parsley-validate data-parsley-focus="none">
    <div class="services__form-inputs-wrapper">
        <label class="gl-input__wrapper js-input-tel">
            <span class="gl-input__title">Введите номер</span>
            <input type="tel" class="gl-input__input js-phone-mask" placeholder="+7 (___) ___-__-__" name="phone_number" data-parsley-required="">
        </label>
        <label class="gl-input__wrapper js-input-number">
            <span class="gl-input__title">От 10 до 30 000 Р</span>
            <input type="number" class="gl-input__input" placeholder="Сумма" name="amount_of_pay" min="10" max="30000" data-parsley-required="">
        </label>
        <label class="gl-input__wrapper js-input-email">
            <span class="gl-input__title">Электронная почта</span>
            <input type="email" class="gl-input__input" placeholder="Электронная почта" name="user_email" data-parsley-required="">
        </label>
    </div>

    <!--<div class="top-up-account__form-radio-wrapper">
        <div class="top-up-account__form-radio-caption">Способ оплаты:</div>

        <div class="form-radio-wrapper">
            <div class="top-up-account__form-radio-wrapper">
                <label class="radio__wrapper">
                    <input type="radio" class="radio" name="pay_service" value="card" data-parsley-required="" checked="checked">
                    <span class="radio__content"></span>
                    <span class="radio__text">Банковская карта</span>
                </label>
            </div>
            <div class="top-up-account__form-radio-wrapper">
                <label class="radio__wrapper">
                    <input type="radio" class="radio" name="pay_service" value="raifaizen" data-parsley-required="">
                    <span class="radio__content"></span>

                    <span class="radio__text">СБП</span>
                    <img src="https://static.beeline.ru/upload/images/b2c/index-redesign-payment-icons/sfp.svg" class="sbp-ico" alt="">
                </label>
            </div>
        </div>
    </div>-->

    <div class="callback__content-checkbox-wrapper">
        <label class="checkbox__wrapper">
            <input type="checkbox" class="checkbox" name="modal-callback-agree" data-parsley-required="" data-parsley-multiple="modal-callback-agree">
            <span class="checkbox__content mod-modal">
                <svg width="16" height="16" aria-hidden="true" class="checkbox__content-icon">
                    <use xlink:href="#checkbox-checked"></use>
                </svg>
            </span>
            <span class="checkbox__text mod-modal">Я согласен на <a href="/app/personaldata/" target="_blank">обработку своих персональных данных</a></span>
        </label>
    </div>
    <div class="services__btn-submit-wrapper">
        <button type="submit" class="gl__main-btn services__btn-submit">Продолжить</button>
    </div>
</form>