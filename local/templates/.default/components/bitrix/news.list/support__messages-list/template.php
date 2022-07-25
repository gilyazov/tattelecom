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

<ul class="support__messages-list">
    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
        <li class="support__messages-item" target="_blank">
            <a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="support__messages-link">
                <img src="<?=CFile::GetPath($arItem["PROPERTIES"]["ICON_SUPPORT"]["VALUE"])?>" alt="" class="support__messages-icon">
            </a>
        </li>
    <?php endforeach; ?>
</ul>