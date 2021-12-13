<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
$this->addExternalJS(BUILD_PATH . 'js/payment-services-page.js');
$this->addExternalJS($componentPath . '/script.js');
?>
<form
    action="" method="post"
    data-need-validation data-parsley-validate data-parsley-focus="none"
    data-modal-type="personal-account" class="payment-services__form js-payment-form">
    <div class="payment-services__form-inputs-wrapper">
        <label class="gl-input__wrapper js-input-number">
            <span class="gl-input__title">Введите номер, чтобы выбрать сумму</span>
            <input type="number" class="gl-input__input mod-no-arrow" placeholder="Номер лицевого счета" name="account_number" data-parsley-required=""
                   data-parsley-minlength="9" data-parsley-maxlength="9">
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
    <div>
        <div class="payment-services__form-btn-wrapper">
            <button type="submit" class="payment-services__form-btn gl__main-btn">Продолжить</button>
        </div>
        <div class="payment-services__form-hint-wrapper">
            <div class="payment-services__form-hint-text">Нажимая кнопку «Продолжить», вы принимаете условия пользовательского соглашения.</div>
            <button type="button" class="payment-services__form-link">Подробнее об услуге</button>
        </div>
    </div>
</form>