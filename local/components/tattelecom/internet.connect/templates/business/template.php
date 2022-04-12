<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>

<form class="js-internet-connect-form" data-need-validation data-parsley-validate data-parsley-focus="none">
    <div class="rates-internet-application__form-controls">
        <input type="hidden" name="uuid" value="">
        <label class="gl-input__wrapper js-input-text">
            <input type="text" id="address" class="gl-input__input"
                   placeholder="Введите адрес" name="address"
                   data-parsley-required=""
                   data-parsley-house=""
            />
        </label>
        <div class="rates-internet-application__form-btn-wrapper">
            <button type="submit" class="gl__main-btn rates-internet-application__form-btn">Проверить</button>
        </div>
    </div>
</form>