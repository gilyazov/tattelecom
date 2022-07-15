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

<ul class="b-socials">
    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <li class="b-socials__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <a class="b-socials__link" title="Написать в <?=$arItem["NAME"]?>" href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>">
                <span class="b-socials__link-content <?=$arItem["PROPERTIES"]["CLASS"]["VALUE"]?>">
                    <?=htmlspecialchars_decode($arItem["PROPERTIES"]["ICON"]["VALUE"]["TEXT"])?>
                </span>
            </a>
        </li>
    <?php endforeach; ?>
</ul>