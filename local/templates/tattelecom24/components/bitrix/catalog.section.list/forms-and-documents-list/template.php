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
//echo "<pre>";
//print_r($arResult["SECTIONS"]);
//echo "</pre>";
?>

<div class="documents__content">
    <ul class="documents-list mod-b">
        <?php foreach ($arResult["SECTIONS"] as $arSection): ?>
            <?php if($arSection["ITEMS"]): ?>
                <li class="documents-list__item">
                    <button class="gl__drop-menu-btn documents-list__item-btn js-drop-menu-btn" type="button">
                        <span class="documents-list__item-btn-label"><?=$arSection["NAME"]?></span>
                        <svg class="gl__drop-menu-icon documents-list__item-btn-icon" width="24" height="24" aria-hidden="true">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </button>
                    <div class="documents-list__item-content-wrapper gl__drop-menu-container js-drop-menu-container">
                        <ul class="documents-list__item-content gl__drop-menu js-drop-menu">
                            <?php foreach ($arSection["ITEMS"] as $arItem): ?>
                                <?php if($arItem["FILE_PATH"]): ?>
                                    <li class="documents-list__item-content-unit">
                                        <a class="documents-list__item-content-unit-link" title="Скачать" href="<?=$arItem["FILE_PATH"]?>" target="_blank">
                                            <svg class="documents-list__item-content-unit-icon" aria-hidden="true">
                                                <use xlink:href="#download"></use>
                                            </svg>
                                            <div class="documents-list__item-content-unit-text">
                                                <h4 class="documents-list__item-content-unit-name"><?=$arItem["NAME"]?></h4>
                                                <span class="documents-list__item-content-unit-description">(<?=$arItem["FILE_EXTENSION"]?>, <?=$arItem["FILE_SIZE"]?>)</span>
                                            </div>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</div>
