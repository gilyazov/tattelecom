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
<form action="<?=$arResult["FORM_ACTION"]?>" class="side-bar__search-form">
    <label class="side-bar__input-search-wrapper">
        <svg width="24" height="24" aria-hidden="true" class="side-bar__input-search-icon">
            <use xlink:href="#search"></use>
        </svg>
        <input type="text" name="q" value="<?=$_GET["q"]?>" class="side-bar__input-search" placeholder="Поиск">

        <input name="s" type="hidden" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>" />
    </label>
</form>