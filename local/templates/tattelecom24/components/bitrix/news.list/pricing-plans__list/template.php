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
<ul class="pricing-plans__list">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <li class="pricing-plans__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="pricing-plans__item-title"><?=$arItem["NAME"]?></div>
            <div class="pricing-plans__item-subtitle">
                <div><?=$arItem["PROPERTIES"]["SUBTITLE"]["VALUE"]?></div>
            </div>
            <?foreach ($arItem["PROPERTIES"]["OPTIONS"]["VALUE"] as $arOption):?>
                <ul class="pricing-plans__item-plans-list">
                <li class="pricing-plans__item-plans-item">
                    <div class="pricing-plans__item-plans-caption"><?=$arOption["SUB_VALUES"]["OPTIONS_T"]["VALUE"]?></div>
                    <div class="pricing-plans__item-plans-value">
                        <?=$arOption["SUB_VALUES"]["OPTIONS_V"]["VALUE"]?>
                    </div>
                </li>
            </ul>
            <?endforeach;?>
        </li>
    <?endforeach;?>
</ul>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>

