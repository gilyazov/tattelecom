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
$this->addExternalJS(BUILD_PATH . "js/rates-internet-item-page.js");
?>
<section class="b-tarif-options">
    <div class="gl__page-content">
        <?foreach($arResult["PROPERTIES"]["NOTES"]["VALUE"] as $arNote):?>
            <div class="b-tarif-options__option">
                <div class="b-tarif-options__title-wrapper gl__drop-menu-btn js-drop-menu-btn">
                    <h2 class="b-tarif-options__title"><?=$arNote["SUB_VALUES"]["NOTES_T"]["VALUE"]?></h2>
                    <svg width="24" height="24" aria-hidden="true" class="b-tarif-options__item-btn-icon gl__drop-menu-icon">
                        <use xlink:href="#arrow-down"></use>
                    </svg>
                </div>
                <div class="gl__drop-menu-container js-drop-menu-container">
                    <div class="gl__drop-menu js-drop-menu">
                        <div class="gl__text">
                            <?=$arNote["SUB_VALUES"]["NOTES_V"]["~VALUE"]["TEXT"]?>
                        </div>
                    </div>
                </div>
            </div>
        <?endforeach;?>
    </div>
</section>