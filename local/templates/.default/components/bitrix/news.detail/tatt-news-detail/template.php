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

<section class="tatt-news-inner" id="technical-works-host">
    <div class="gl__page-content tatt-news-inner__content news-page-detail__content">
        <h1><?=$arResult["NAME"]?></h1>
        <div class="tatt-news-inner__date">
            <svg width="18" height="20" aria-hidden="true" class="tatt-news-inner__date-icon">
                <use xlink:href="#calendar"></use>
            </svg>
            <?=$arResult["DISPLAY_ACTIVE_FROM"]?>
        </div>
        <?=$arResult["DETAIL_TEXT"]?>
    </div>
</section>