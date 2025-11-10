<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
/** @var string $templateFolder */
$this->addExternalJS(BUILD_PATH . 'js/payment-services-page.js');
$this->addExternalJS($componentPath . '/script.js');
$this->addExternalCss($componentPath . '/style.css');
?>
<form
    action="" method="post"
    data-need-validation data-parsley-validate data-parsley-focus="none" data-modal-type="mobile"
    class="payment-services__form js-payment-form">
    <div class="payment-services__form-inputs-wrapper">
        <label class="gl-input__wrapper js-input-tel">
            <span class="gl-input__title">Пополняемый номер</span>
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

    <div class="top-up-account__form-radio-wrapper">
        <div class="top-up-account__form-radio-caption">Способ оплаты:</div>

        <div class="form-radio-wrapper">
            <div class="top-up-account__form-radio-wrapper">
                <label class="radio__wrapper">
                    <input type="radio" class="radio" name="pay_service" value="raifaizen" data-parsley-required="" checked="checked">
                    <span class="radio__content"></span>

                    <span class="radio__text">СБП</span>
                    <img src="https://static.beeline.ru/upload/images/b2c/index-redesign-payment-icons/sfp.svg" class="sbp-ico" alt="">
                </label>
            </div>
            <div class="top-up-account__form-radio-wrapper">
                <label class="radio__wrapper">
                    <input type="radio" class="radio" name="pay_service" value="card" data-parsley-required="">
                    <span class="radio__content"></span>
                    <span class="radio__text">Банковская карта</span>
                </label>
            </div>
        </div>
    </div>

    <div>
        <div class="payment-services__form-btn-wrapper">
            <button type="submit" class="payment-services__form-btn gl__main-btn">Продолжить</button>
        </div>
        <div class="payment-services__form-hint-wrapper">
            <div class="payment-services__form-hint-text">Нажимая кнопку «Продолжить», вы принимаете <a href="/app/serviceuse/">условия пользовательского соглашения</a>.</div>
            <div class="payment-services__form-hint-icons-wrapper">
                <img src="<?=BUILD_PATH?>img/common/pay/mastercard.svg" alt="" class="payment-services__form-hint-icon">
                <img src="<?=BUILD_PATH?>img/common/pay/mir.svg" alt="" class="payment-services__form-hint-icon">
                <img src="<?=BUILD_PATH?>img/common/pay/visa.svg" alt="" class="payment-services__form-hint-icon">
                <a href="https://uniteller.ru/" target="_blank" rel="nofollow" class="payment-services__form-hint-icon"><img src="<?=$templateFolder?>/img/uniteller.svg" height="23" alt=""></a>
            </div>
        </div>
    </div>
</form>