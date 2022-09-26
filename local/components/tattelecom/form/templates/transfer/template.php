<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
/** @var string $templateFolder */
$this->addExternalJS($componentPath . '/script.js');
?>
<h3 class="services__item-info-title">
    <img src="<?=$templateFolder?>/img/logo.png" alt="" class="services__item-info-title-icon"> Переходите на «Летай» со своим номером
</h3>
<form class="services__form-wrapper js-potok-form" data-need-validation data-parsley-validate data-parsley-focus="none">
    <input type="hidden" name="param_referer" value="<?=$APPLICATION->GetTitle()?>">
    <div class="services__form-inputs-wrapper">
        <label class="gl-input__wrapper js-input-tel">
            <span class="gl-input__title">Введите номер переноса</span>
            <input type="tel" class="gl-input__input js-phone-mask" placeholder="+7 (___) ___-__-__" name="phone" data-parsley-required="">
        </label>
        <div class="services__btn-submit-wrapper">
            <button type="submit" class="gl__main-btn mod-transparent services__btn-submit">Начать перенос</button>
        </div>
    </div>
    <div class="services__checkbox">
        <label class="checkbox__wrapper">
            <input type="checkbox" class="checkbox" name="services-approval" data-parsley-required="">
            <span class="checkbox__content mod-main">
                <svg width="16" height="16" aria-hidden="true" class="checkbox__content-icon">
                    <use xlink:href="#checkbox-checked"></use>
                </svg>
            </span>
            <span class="checkbox__text mod-main">Я соглашаюсь на получение консультации по переносу номера</span>
        </label>
    </div>
</form>