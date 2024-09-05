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
<div class="gl-slider__wrapper swiper-wrapper">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <section class="rates-preview mod-main-page" style="background-image: url('<?=\Tattelecom\Core\Tools::resizeImage($arItem["PREVIEW_PICTURE"]["ID"], 2880, 705)?>')" id="rates-preview-host">
                <div class="gl__page-content rates-preview__content-wrapper">
                    <div class="rates-preview__content <?=$arItem["PROPERTIES"]["COLOR"]["VALUE_XML_ID"]?>">
                        <div class="rates-preview__content-title"><?=$arItem["NAME"]?></div>
                        <div class="rates-preview__content-subtitle"><?=$arItem["PROPERTIES"]["SUBTITLE"]["VALUE"]?></div>
                        <div class="rates-preview__content-caption-wrapper">
                            <div class="rates-preview__content-caption"><?=$arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"]?></div>
                        </div>
                        <?if($arItem["PROPERTIES"]["LINK"]["VALUE"]):?>
                            <a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="gl__main-btn rates-preview__btn mod-red-btn <?=$arItem["PROPERTIES"]["BTN_COLOR"]["VALUE_XML_ID"]?>">Подробнее</a>
                        <?endif;?>
                    </div>
                    <div class="rates-preview__img-wrapper">
                        <img src="<?=\Tattelecom\Core\Tools::resizeImage($arItem["DETAIL_PICTURE"]["ID"], 2880, 705, true)?>" alt="" class="rates-preview__img">
                    </div>
                </div>
            </section>
        </div>
    <?endforeach;?>
</div>