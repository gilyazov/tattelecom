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
<ul class="documents-list">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <li class="documents-list__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <button class="gl__drop-menu-btn documents-list__item-btn js-drop-menu-btn" type="button">
                <span class="documents-list__item-btn-label"><?=$arItem["NAME"]?></span>
                <svg class="gl__drop-menu-icon documents-list__item-btn-icon" width="24" height="24" aria-hidden="true">
                    <use xlink:href="#arrow-down"></use>
                </svg>
            </button>

            <?if($arItem["PROPERTIES"]["INSTRUCTIONS"]["VALUE"]):?>
                <div class="documents-list__item-content-wrapper gl__drop-menu-container js-drop-menu-container">
                    <ul class="documents-list__item-content gl__drop-menu js-drop-menu">
                        <?foreach ($arItem["PROPERTIES"]["INSTRUCTIONS"]["VALUE"] as $file):?>
                            <?
                                $arFile = CFile::GetFileArray($file);
                                $description = $arFile["ORIGINAL_NAME"];
                                if ($arFile["DESCRIPTION"]){
                                    $description = $arFile["DESCRIPTION"];
                                }
                            ?>
                            <li class="documents-list__item-content-unit">
                                <a class="documents-list__item-content-unit-link" title="Скачать" href="<?=$arFile["SRC"]?>" download>
                                    <svg class="documents-list__item-content-unit-icon" aria-hidden="true">
                                        <use xlink:href="#download"></use>
                                    </svg>
                                    <div class="documents-list__item-content-unit-text">
                                        <h4 class="documents-list__item-content-unit-name"><?=$description?></h4>
                                        <span class="documents-list__item-content-unit-description">(<?=ToUpper(pathinfo($arFile['ORIGINAL_NAME'], PATHINFO_EXTENSION))?>, <?=CFile::FormatSize($arFile['FILE_SIZE'])?>)</span>
                                    </div>
                                </a>
                            </li>
                        <?endforeach;?>
                    </ul>
                </div>
            <?endif;?>
        </li>
    <?endforeach;?>
</ul>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>