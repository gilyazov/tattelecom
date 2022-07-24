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

<ul class="tatt-head__list">
    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
        <li class="tatt-head__item">
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="tatt-head__item-link"></a>
            <img class="tatt-head__item-img" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="<?=$arItem["NAME"];?>">
            <div class="tatt-head__item-text">
                <p><?=$arItem["NAME"];?></p>
                <span><?=$arItem["PROPERTIES"]["POSITION"]["VALUE"];?></span>
            </div>
        </li>
    <?php endforeach; ?>
</ul>