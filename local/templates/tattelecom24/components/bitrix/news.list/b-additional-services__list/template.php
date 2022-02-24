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
<ul class="b-additional-services__list">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <li class="b-additional-services__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="b-additional-services__header">
                <button class="gl__drop-menu-btn js-drop-menu-btn b-additional-services__btn">
                    <svg class="gl__drop-menu-icon b-additional-services__btn-icon" width="24" height="24" aria-hidden="true">
                        <use xlink:href="#arrow-down"></use>
                    </svg>
                    <span class="b-additional-services__btn-label"><?=$arItem["NAME"]?></span>
                </button>
                <div class="b-additional-services__btn-info-wrapper">
                    <div class="btn-info__container">
                        <button type="button" class="btn-info__btn">
                            <svg width="24" height="24" aria-hidden="true" class="btn-info__icon">
                                <use xlink:href="#info-ellipse"></use>
                            </svg>
                        </button>
                        <div class="btn-info__content"><?=$arItem["PROPERTIES"]["SUBTITLE"]["VALUE"]?></div>
                    </div>
                </div>
            </div>

            <div class="gl__drop-menu-container js-drop-menu-container b-additional-services__wrapper">
                <ul class="gl__drop-menu js-drop-menu b-additional-services__content-list">
                    <?foreach ($arItem["PROPERTIES"]["OPTIONS"]["VALUE"] as $arOption):?>
                        <li class="b-additional-services__content-item mod-cost">
                            <span class="b-additional-services__content-item-name"><?=$arOption["SUB_VALUES"]["OPTIONS_T"]["VALUE"]?></span>
                            <span class="b-additional-services__content-item-cost">
                                <?=$arOption["SUB_VALUES"]["OPTIONS_V"]["VALUE"]?>
                            </span>
                        </li>
                    <?endforeach;?>
                </ul>
            </div>
        </li>
    <?endforeach;?>
</ul>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>

