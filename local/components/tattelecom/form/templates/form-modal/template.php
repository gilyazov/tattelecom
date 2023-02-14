<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
$this->addExternalJS($componentPath . '/script.js');
?>
<form class="js-form-modal js-potok-form" data-need-validation data-parsley-validate data-parsley-focus="none">
    <input type="hidden" name="param_referer" value="<?=$APPLICATION->GetTitle()?>">
    <input type="hidden" name="param_comment" value="">
    <div class="send-request__form-inputs">
        <label class="gl-input__wrapper js-input-text">
            <input type="text" class="gl-input__input" placeholder="Ваше имя" name="firstname" data-parsley-required="">
        </label>
        <label class="gl-input__wrapper js-input-tel">
            <input type="tel" class="gl-input__input js-phone-mask" placeholder="+7 (___) ___-__-__" name="phone" data-parsley-required="">
        </label>
    </div>
    <div class="send-request__form-select-wrapper"></div>
    <div class="send-request__content-checkbox-wrapper">
        <label class="checkbox__wrapper">
            <input type="checkbox" class="checkbox" name="modal-send-request-agree" data-parsley-required="">
            <span class="checkbox__content mod-modal">
                <svg width="16" height="16" aria-hidden="true" class="checkbox__content-icon">
                    <use xlink:href="#checkbox-checked"></use>
                </svg>
            </span>
            <span class="checkbox__text mod-modal">Я согласен на <a href="/app/personaldata/" target="_blank">обработку своих персональных данных</a></span>
        </label>
    </div>
    <button type="submit" class="gl__main-btn modal__btn-submit js-btn-submit">Отправить заявку</button>
    <span class="checkbox__text mod-modal">Нажимая кнопку «Отправить заявку», вы принимаете <b>условия пользовательского соглашения</b> и <a href="/policy.php"><b>политику конфиденциальности</b></a>.</span>
</form>