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
<?foreach($arResult["PROPERTIES"]["NOTES"]["VALUE"] as $arNote):?>
    <section class="info-drop-menu">
        <div class="gl__page-content">
            <button type="button" class="info-drop-menu__title gl__drop-menu-btn js-drop-menu-btn">
                <svg width="32" height="32" aria-hidden="true" class="info-drop-menu__title-icon gl__drop-menu-icon">
                    <use xlink:href="#arrow-down"></use>
                </svg><?=$arNote["SUB_VALUES"]["NOTES_T"]["VALUE"]?>
            </button>
            <div class="gl__drop-menu-container js-drop-menu-container">
                <div class="gl__drop-menu js-drop-menu">
                    <div class="gl__text">
                        <?=$arNote["SUB_VALUES"]["NOTES_V"]["~VALUE"]["TEXT"]?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?endforeach;?>