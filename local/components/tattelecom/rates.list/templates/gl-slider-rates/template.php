<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<div class="gl-slider js-swiper" data-swiper-slides-preview="4">
    <div class="gl-slider__container swiper-container js-swiper-container">
        <ul class="gl-slider__wrapper swiper-wrapper">
            <?php foreach($arResult["ITEMS"] as $arItem):?>
                <?php
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <li class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <a
                            href="<?=$arItem['DETAIL_PAGE_URL']?>"
                            class="gl__no-default-hover rates-list__slide gl__white-container<?php if($arItem["PROMO_CLASS"]):?> <?=$arItem["PROMO_CLASS"]?><?php endif;?>">
                        <?php if($arItem["PROMO_CLASS"]):?>
                            <img src="<?=BUILD_PATH?>img/main-page/rates-list/hit-background.svg" alt="" class="rates-list__slide-hit-background">
                        <?php endif;?>
                        <?php if($arItem["PROPERTIES"]["PROMO_RATE"]["VALUE"]):?>
                            <img src="<?=BUILD_PATH?>img/main-page/rates-list/promo-mark.svg" alt="" class="rates-list__slide-hit-mark">
                        <?php endif;?>
                        <?php if($arItem["PROPERTIES"]["HIT"]["VALUE"]):?>
                            <img src="<?=BUILD_PATH?>img/main-page/rates-list/hit-mark.svg" alt="" class="rates-list__slide-hit-mark">
                        <?php endif;?>

                        <div class="rates-list__slide-content">
                            <div class="rates-list__slide-up">
                                <div class="rates-list__slide-title"><?=$arItem["NAME"]?></div>
                                <div class="rates-list__slide-subtitle"><?=$arItem["PROPERTIES"]["SUBTITLE"]["VALUE"]?></div>

                                <?php if(count($arItem["PROPERTIES"]["BENEFITS"]["VALUE"]) > 0 && $arParams["IBLOCK_ID"] == 17):?>
                                    <div class="rates-list-internet__item-block">
                                        <?php foreach ($arItem["PROPERTIES"]["BENEFITS"]["VALUE"] as $arBenefit):?>
                                            <div class="rates-list-internet__item-proposal">
                                                <img
                                                        src="<?=BUILD_PATH?>img/rates-internet-list-page/<?=$arBenefit["SUB_VALUES"]["BENEFITS_I"]["VALUE_XML_ID"]?><?=($arItem["PROPERTIES"]["ORANGE"]["VALUE"]?"-white":"")?>.svg" alt=""
                                                        class="rates-list-internet__item-proposal-img">
                                                <div class="rates-list-internet__item-proposal-caption"><?=$arBenefit["SUB_VALUES"]["BENEFITS_V"]["VALUE"]?></div>
                                            </div>
                                        <?php endforeach;?>
                                    </div>
                                <?php endif?>

                                <ul class="rates-list__slide-conditions-list">
                                    <?php foreach ($arItem["PROPERTIES"]["BENEFITS"]["VALUE"] as $benefit):?>
                                        <?php
                                        if(!is_array($benefit["SUB_VALUES"])){
                                            continue;
                                        }
                                        ?>
                                        <li class="rates-list__slide-condition-item">
                                            <?php if(is_array($benefit["SUB_VALUES"]["B_ICO"])):?>
                                                <img src="<?=BUILD_PATH?>img/main-page/rates-list/<?=$benefit["SUB_VALUES"]["B_ICO"]["VALUE_XML_ID"]?>.svg" alt=""
                                                    class="rates-list__slide-condition-item-icon">
                                            <?php endif;?>
                                            <div class="rates-list__slide-condition-item-text"><?=$benefit["SUB_VALUES"]["B_VALUE"]["VALUE"]?></div>
                                        </li>
                                    <?php endforeach;?>
                                </ul>
                            </div>

                            <div class="rates-list__slide-down">
                                <?php if($arItem["PROPERTIES"]["FEATURES"]["VALUE"]):?>
                                    <div class="rates-list__opportunities-wrapper">
                                        <div class="rates-list__opportunities-title">Возможности</div>

                                        <?php foreach ($arItem["PROPERTIES"]["FEATURES"]["VALUE"] as $benefit):?>
                                            <div class="rates-list__opportunities-text"><?=$benefit?></div>
                                        <?php endforeach;?>
                                    </div>
                                <?php endif;?>

                                <div class="rates-list__slide-price-wrapper">
                                    <?php if($arItem["PROPERTIES"]["OLD_PRICE"]["VALUE"]):?>
                                        <div class="rates-list__slide-old-price">
                                            <?=$arItem["PROPERTIES"]["OLD_PRICE"]["VALUE"]?><span><?=$arItem["PROPERTIES"]["TARIFFING"]["VALUE"]?></span>
                                        </div>
                                    <?php endif;?>
                                    <div class="rates-list__slide-price">
                                        <span class="big"><?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?></span>
                                        <span class="small"><?=$arItem["PROPERTIES"]["TARIFFING"]["VALUE"]?></span>
                                    </div>
                                </div>

                                <?php if($arItem["HINT"]):?><div class="rates-list__slide-subtitle"><?=$arItem["HINT"]?></div><?php endif;?>

                                <div class="rates-list__slide-btns-wrapper">
                                    <button type="button"
                                            data-tariff-name="<?=$arItem["NAME"]?>"
                                            data-comment="Тариф: <?=$arItem["NAME"]?>"
                                            data-prise="<?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?>"
                                            class="rates-list__slide-btn-plug gl__main-btn js-open-send-request-modal">
                                        Подключить
                                    </button>
                                    <div class="rates-list__slide-link-detailed-wrapper">
                                        <div class="gl__secondary-btn  ">
                                            Подробнее о тарифе
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
    <div class="gl__bg-hide">
        <button type="button" class="gl-slider__slider-btn mod-prev js-slider-btn-prev">
            <svg width="26" height="26" aria-hidden="true" class="gl-slider__slider-btn-icon">
                <use xlink:href="#arrow-left"></use>
            </svg>
        </button>
        <button type="button" class="gl-slider__slider-btn mod-next js-slider-btn-next">
            <svg width="26" height="26" aria-hidden="true" class="gl-slider__slider-btn-icon">
                <use xlink:href="#arrow-right"></use>
            </svg>
        </button>
    </div>
    <div class="gl__xs-hide">
        <div class="gl-slider__pagination-container">
            <div class="gl-slider__pagination-wrapper swiper-pagination js-pagination-slider"></div>
        </div>
    </div>
    <div class="gl__xs-show">
        <a href="/mobile/rates/" class="gl__link-show-all">Все тарифы<svg width="20" height="20" aria-hidden="true" class="gl__link-show-all-icon">
                <use xlink:href="#arrow-right"></use>
            </svg>
        </a>
    </div>
</div>