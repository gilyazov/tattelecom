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
<form action="/search/" method="GET" class="header__input-search-form <?=(SITE_ID == "s2") ? "mod-business" : ""?> js-show-when-search">
    <label class="header__input-search-wrapper">
        <svg width="24" height="24" aria-hidden="true" class="header__input-search-icon">
            <use xlink:href="#search"></use>
        </svg>
        <input id="search-input" type="text" name="q" value="<?=$_GET["q"]?>" class="header__input-search js-input-search" placeholder="Поиск">
        <button type="button" name="s" class="header__search-btn-close js-close-search-btn">
            <svg width="30" height="30" aria-hidden="true" class="header__search-btn-close-icon">
                <use xlink:href="#close"></use>
            </svg>
        </button>
    </label>
</form>