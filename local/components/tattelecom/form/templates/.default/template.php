<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
$this->addExternalJS($componentPath . '/script.js');
?>

<form class="js-form-modal callback__form js-potok-form" data-need-validation data-parsley-validate data-parsley-focus="none">
    <label class="gl-input__wrapper js-input-tel">
        <input
                type="tel" class="gl-input__input js-phone-mask"
                placeholder="+7 (___) ___-__-__" name="phone" data-parsley-required="">
    </label>
    <div class="callback__content-checkbox-wrapper">
        <label class="checkbox__wrapper">
            <input type="checkbox" class="checkbox" name="modal-callback-agree" data-parsley-required="">
            <span class="checkbox__content mod-modal">
                <svg width="16" height="16" aria-hidden="true" class="checkbox__content-icon">
                    <use xlink:href="#checkbox-checked"></use>
                </svg>
            </span>
            <span class="checkbox__text mod-modal">Я согласен на обработку своих персональных данных</span>
        </label>
    </div>
    <button type="submit" class="gl__main-btn modal__btn-submit js-btn-submit">Жду звонка</button>
</form>