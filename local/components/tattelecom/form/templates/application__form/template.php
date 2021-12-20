<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
$this->addExternalJS($componentPath . '/script.js');
?>
<form class="application__form mod-no-answer js-potok-form" data-need-validation data-parsley-validate data-parsley-focus="none">
    <div class="application__form-item mod-no-answer">
        <label class="gl-input__wrapper js-input-text">
            <input type="text" class="gl-input__input" placeholder="Ваше имя" name="firstname" data-parsley-required="">
        </label>
    </div>
    <div class="application__form-item mod-no-answer">
        <label class="gl-input__wrapper js-input-tel">
            <input type="tel" class="gl-input__input js-phone-mask" placeholder="+7 (___) ___-__-__" name="phone" data-parsley-required="">
        </label>
    </div>
    <div class="application__form-item mod-no-answer">
        <label>
            <textarea class="gl-input__input mod-textarea" placeholder="Ваш вопрос" name="param_comment" data-parsley-required="" data-parsley-minlength="2"></textarea>
        </label>
    </div>
    <div class="application__btn-wrapper mod-no-answer">
        <button type="submit" class="gl__main-btn application__btn">Отправить</button>
    </div>
</form>