<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
$this->addExternalJS($componentPath . '/script.js');
?>
<form
    action="" method="post"
    class="services__form-wrapper gl__menu-tab-content js-menu-tab-content js-payment-form" data-menu="internet" data-need-validation data-parsley-validate data-parsley-focus="none">
    <div class="services__form-inputs-wrapper">
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
        <div class="services__btn-submit-wrapper">
            <button type="submit" class="gl__main-btn services__btn-submit">Продолжить</button>
        </div>
    </div>
</form>