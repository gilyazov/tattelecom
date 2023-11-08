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
            <span>Наименование</span>
            <span>Описание</span>
        </div>
        <ul class="numbered-list__list">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                $arFile = CFile::GetFileArray($arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"]);
                $description = $arFile["ORIGINAL_NAME"];
                if ($arFile["DESCRIPTION"]){
                    $description = $arFile["DESCRIPTION"];
                }
                $fileExtension = \Bitrix\Main\IO\Path::getExtension($arFile["SRC"]);
                ?>
                <li class="numbered-list__item numbered-list__container" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <span><?=$arItem["NAME"]?></span>
                    <a href="<?=$arFile["SRC"]?>" target="_blank"><?=$fileExtension?>, <?=CFile::FormatSize($arFile['FILE_SIZE'])?></a>
                </li>
            <?endforeach;?>
        </ul>
    </div>
</div>