<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
$this->addExternalJS($componentPath . '/script.js');
?>
<form class="fly-top-block__form js-potok-form" data-need-validation data-parsley-validate data-parsley-focus="none">
    <input type="hidden" name="param_referer" value="<?=$APPLICATION->GetTitle()?>">
    <label class="gl-input__wrapper js-input-tel">
        <input type="tel" class="gl-input__input js-phone-mask" placeholder="+7 (___) ___-__-__" name="phone" data-parsley-required="">
    </label>
    <button type="submit" class="fly-top-block__btn gl__main-btn">Оставить заявку</button>
    <div class="fly-top-block__checkbox-wrapper">
        <label class="checkbox__wrapper">
            <input type="checkbox" class="checkbox" name="fly-top-block-approval" data-parsley-required="">
            <span class="checkbox__content mod-main">
                <svg width="16" height="16" aria-hidden="true" class="checkbox__content-icon">
                    <use xlink:href="#checkbox-checked"></use>
                </svg>
            </span>
            <span class="checkbox__text mod-main">Я соглашаюсь на получение консультации по переносу номера</span>
        </label>
    </div>
</form>