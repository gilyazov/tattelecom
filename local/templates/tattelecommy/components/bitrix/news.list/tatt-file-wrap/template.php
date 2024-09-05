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
<div class="tatt-file-wrap">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

        $arFile = CFile::GetFileArray($arItem["PROPERTIES"]["FILE"]["VALUE"]);
        ?>
        <a href="<?=$arFile["SRC"]?>" target="_blank" class="dpf-file__file-link" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <svg width="30" height="40" aria-hidden="true" class="dpf-file__file-link-icon">
                <use xlink:href="#<?=pathinfo($arFile['ORIGINAL_NAME'], PATHINFO_EXTENSION)?>-file"></use>
            </svg>
            <div>
                <div class="dpf-file__file-link-title"><?=ToUpper(pathinfo($arFile['ORIGINAL_NAME'], PATHINFO_EXTENSION))?> <?=CFile::FormatSize($arFile['FILE_SIZE'])?></div>
                <div class="dpf-file__file-link-subtitle"><?=$arItem["NAME"]?></div>
            </div>
        </a>
    <?endforeach;?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>