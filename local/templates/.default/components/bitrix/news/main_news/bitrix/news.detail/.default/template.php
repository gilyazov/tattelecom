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
<section class="news-page news-page-detail">
    <div class="gl__page-content">

        <div class="news-page-detail__heading">
            <span class="news-page-detail__date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
            <h1 class="news-page-detail__title gl__title"><?=$arResult["NAME"]?></h1>
            <span class="news-page-detail__legend"><?=$arResult["PROPERTIES"]["TYPE"]["VALUE"]?></span>
        </div>
        <div class="news-page-detail__content">
            <div class="lead">
                <?=$arResult["PREVIEW_TEXT"]?>
            </div>
            <?=$arResult["DETAIL_TEXT"]?>
        </div>
    </div>
</section>