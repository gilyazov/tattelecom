<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
/** @var array $arResult */
?>
<form data-need-validation data-parsley-validate data-parsley-focus="none" method="post" class="application-consultation__form">
    <input type="hidden" name="param_referer" value="<?=$APPLICATION->GetTitle()?>">
    <label class="gl-input__wrapper js-input-text">
        <input type="text" class="gl-input__input" placeholder="Количество победителей" name="count" data-parsley-required="">
    </label>
    <div class="select">
        <div class="select__container mod-small-choices-list mod-simple-design mod-b-select">
            <label class="select__wrapper">
                <select class="gl__select js-custom-select" data-parsley-class-handler="#gift" name="gift" required data-parsley-required="" data-parsley-trigger="change">
                    <option placeholder value="">Подарок</option>
                    <?foreach ($arResult["GIFTS"] as $id => $gift):?>
                        <option value="<?=$id?>"><?=$gift?></option>
                    <?endforeach;?>
                </select>
            </label>
        </div>
    </div>
    <button type="submit" class="gl__main-btn mod-white-grey">Разыграть</button>
</form>