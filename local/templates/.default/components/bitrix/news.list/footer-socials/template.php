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

<div class="footer__contact-social-wrapper">
    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
        <a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="footer__contact-social-link" target="_blank">
            <?=htmlspecialchars_decode($arItem["PROPERTIES"]["ICON_FOOTER"]["VALUE"]["TEXT"])?>
        </a>
    <?php endforeach; ?>
</div>