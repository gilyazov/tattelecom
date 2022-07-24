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
$this->setFrameMode(true);
?>

<h1 class="tatt-achievements__title gl__title"><?=$arResult["NAME"];?></h1>
<div class="tatt-head__main head--detail">
    <img src="<?=$arResult["PREVIEW_PICTURE"]["SRC"];?>" alt="<?=$arResult["NAME"];?>" class="tatt-head__main-img">
    <div class="tatt-head__main-text">
        <span><?=$arResult["PROPERTIES"]["POSITION"]["VALUE"];?></span>

        <div>
            <?=$arResult["DETAIL_TEXT"]?>
        </div>
    </div>
</div>

<a href="/about/head/" class="back-link">
    <svg width="20" height="20" aria-hidden="true">
        <use xlink:href="#arrow-left"></use>
    </svg> вернуться
</a>