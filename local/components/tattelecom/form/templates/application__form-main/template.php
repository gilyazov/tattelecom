<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
$this->addExternalJS($componentPath . '/script.js');
?>

<form class="application__form mod-leave-request js-potok-form" data-need-validation data-parsley-validate data-parsley-focus="none">
    <input type="hidden" name="param_referer" value="<?=$APPLICATION->GetTitle()?>">
    <label class="gl-input__wrapper js-input-text">
        <input type="text" class="gl-input__input" placeholder="Ваше имя" name="firstname" data-parsley-required="">
    </label>
    <label class="gl-input__wrapper js-input-tel">
        <input type="tel" class="gl-input__input js-phone-mask" placeholder="+7 (___) ___-__-__" name="phone" data-parsley-required="">
    </label>
    <div class="application__btn-wrapper">
        <button type="submit" class="gl__main-btn application__btn">Жду звонка</button>
    </div>
</form>