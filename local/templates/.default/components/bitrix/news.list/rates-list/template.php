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
$this->addExternalJS(BUILD_PATH . "js/b-rates-mobile-list.js");
?>

<!-- todo: перенести в другой шаблон (из .default в tattelecom)-->

<div class="gl-slider__b-container gl-slider__container swiper-container js-swiper-container">
    <ul class="gl-slider__wrapper swiper-wrapper" id="js-align-tariffs-heights">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <li class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="b-tariffs-item gl__no-default-hover">
                    <div class="b-tariffs-item__services-list-container">
                        <h3 class="b-tariffs-item__name"><?=$arItem["NAME"]?></h3>

                        <?if($arItem["PREVIEW_TEXT"]):?>
                            <div class="b-tariffs-item__services-list-wrapper">
                                <ul class="b-tariffs-item__services-list">
                                    <li class="b-tariffs-item__simple-signature"><?=$arItem["~PREVIEW_TEXT"]?></li>
                                </ul>
                            </div>
                        <?endif;?>

                        <?php if($arItem["PROPERTIES"]["BENEFITS"]["VALUE"]): ?>
                            <div class="b-tariffs-item__services-list-wrapper">
                                <ul class="b-tariffs-item__services-list">
                                    <?foreach ($arItem["PROPERTIES"]["BENEFITS"]["VALUE"] as $benefit):?>
                                    <li class="b-tariffs-item__service">
                                        <?if($benefit["SUB_VALUES"]["B_ICO"]["VALUE_XML_ID"]):?>
                                            <svg width="15" height="15" aria-hidden="true" class="b-tariffs-item__service-icon">
                                                <use xlink:href="#tariffs-<?=$benefit["SUB_VALUES"]["B_ICO"]["VALUE_XML_ID"]?>"></use>
                                            </svg>
                                        <?endif?>
                                        <span class="b-tariffs-item__service-name"><?=$benefit["SUB_VALUES"]["B_VALUE"]["VALUE"]?></span>
                                    </li>
                                    <?endforeach;?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="b-tariffs-item__footer">
                        <div class="b-tariffs-item__cost-block">
                            <?if($arItem["PROPERTIES"]["OLD_PRICE"]["VALUE"]):?>
                                <span class="b-tariffs-item__cost-old-price"><?=$arItem["PROPERTIES"]["OLD_PRICE"]["VALUE"]?> <?=$arItem["PROPERTIES"]["TARIFFING"]["VALUE"]?></span>
                            <?endif;?>
                            <div class="">
                                <span class="b-tariffs-item__cost"><?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?></span>
                                <span class="b-tariffs-item__cost-label"><?=$arItem["PROPERTIES"]["TARIFFING"]["VALUE"]?></span>
                            </div>
                        </div>

                        <button class="gl__main-btn mod-business b-tariffs-item__btn js-open-services-modal-b" type="button" data-tariff-name="<?=$arItem["NAME"]?>" data-prise="<?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?>">Подробнее об услуге</button>
                    </div>
                </a>
            </li>
        <?endforeach;?>
    </ul>
</div>
