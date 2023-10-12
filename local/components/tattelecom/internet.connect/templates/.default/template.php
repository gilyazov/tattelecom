<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>

<form class="rates-internet-application__form js-internet-connect-form" data-need-validation data-parsley-validate data-parsley-focus="none">
    <div class="gl__title">Проверьте возможность подключения по вашему адресу</div>
    <div class="rates-internet-application__form-subtitle">Пожалуйста, введите точный адрес вашего дома:</div>
    <div class="rates-internet-application__form-controls">
        <input type="hidden" name="uuid" value="">
        <label class="gl-input__wrapper js-input-text">
            <input type="text" id="address" class="gl-input__input" placeholder="Введите адрес" name="address" data-parsley-required="">
        </label>
        <div class="rates-internet-application__form-btn-wrapper">
            <button type="submit" class="gl__main-btn rates-internet-application__form-btn">Проверить</button>
        </div>
        <!--<div class="rates-internet-application__form-checkbox-wrapper">
            <label class="checkbox__wrapper">
                <input type="checkbox" class="checkbox" name="private-house">
                <span class="checkbox__content mod-main">
                    <svg width="16" height="16" aria-hidden="true" class="checkbox__content-icon">
                        <use xlink:href="#checkbox-checked"></use>
                    </svg>
                </span>
                <span class="checkbox__text mod-grey-dark">Частный дом</span>
            </label>
        </div>-->
    </div>
</form>