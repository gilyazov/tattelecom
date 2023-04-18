<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
<form action="<?=$arResult["FORM_ACTION"]?>" method="GET" class="support-input">
    <div class="support-input__container">
        <label class="support-input__wrapper">
            <input type="text" name="q" value="<?=$_GET["q"]?>" class="support-input__input" placeholder="Что будем искать?">
            <svg width="24" height="24" aria-hidden="true" class="support-input__icon">
                <use xlink:href="#search"></use>
            </svg>
        </label>
        <div class="support-input__hint">
            Например: <span class="mark">Платеж мобильной связи</span>
        </div>
    </div>

    <input name="s" type="hidden" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>" />
</form>