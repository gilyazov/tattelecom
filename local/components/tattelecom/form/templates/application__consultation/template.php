<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
$this->addExternalJS($componentPath . '/script.js');
?>
<form data-need-validation data-parsley-validate data-parsley-focus="none" class="application-consultation__form js-potok-form">
    <input type="hidden" name="param_referer" value="<?=$APPLICATION->GetTitle()?>">
    <label class="gl-input__wrapper js-input-text">
        <input type="text" class="gl-input__input" placeholder="Ваше имя" name="firstname" data-parsley-required="">
    </label>
    <label class="gl-input__wrapper js-input-tel">
        <input type="tel" class="gl-input__input js-phone-mask" placeholder="+7 (___) ___-__-__" name="phone" data-parsley-required="">
    </label>
    <button type="submit" class="gl__main-btn mod-white-grey">Оставить заявку</button>
    <span class="checkbox__text mod-main">Нажимая кнопку «Оставить заявку», вы принимаете <b>условия пользовательского соглашения</b> и <a href="/policy.php"><b>политику конфиденциальности</b></a>.<br> Защита от спама reCAPTCHA <a href="https://policies.google.com/privacy?hl=ru" target="_blank">Конфиденциальность</a> и <a href="https://policies.google.com/terms?hl=ru" target="_blank">Условия использования</a>.</span>
    <div class="callback__content-checkbox-wrapper">
        <label class="checkbox__wrapper">
            <input type="checkbox" class="checkbox" name="modal-callback-agree" data-parsley-required="" data-parsley-multiple="modal-callback-agree">
            <span class="checkbox__content mod-modal">
                <svg width="16" height="16" aria-hidden="true" class="checkbox__content-icon">
                    <use xlink:href="#checkbox-checked"></use>
                </svg>
            </span>
            <span class="checkbox__text mod-main">Я согласен на <a href="/app/personaldata/" target="_blank">обработку своих персональных данных</a></span>
        </label>
    </div>
</form>