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
<div class="third-parties__content">
    <div class="numbered-list">
        <div class="numbered-list__header numbered-list__container">
            <span>ФИО</span>
            <span>Подарок</span>
        </div>
        <ul class="numbered-list__list">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <li class="numbered-list__item numbered-list__container" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <span>
                        <?=$arItem["NAME"]?>
                        <br>
                        <span class="rates-list__opportunities-title"><?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?></span>
                    </span>
                    <span><?=$arItem["DISPLAY_PROPERTIES"]["GIFT"]["DISPLAY_VALUE"]?></span>
                </li>
            <?endforeach;?>
        </ul>
    </div>
</div>