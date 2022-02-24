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
<section class="b-tariffs-list gl__section">
    <div class="gl__page-content">
        <h2 class="gl__title">Тарифы</h2>
        <div class="b-tariffs-list__content">
            <div class="gl-slider js-swiper" data-swiper-slides-preview="4">
                <div class="gl__bg-hide">
                    <button type="button" class="gl-slider__slider-btn mod-prev gl__no-default-hover js-slider-btn-prev gl-slider__b-slider-btn">
                        <svg class="gl-slider__slider-btn-icon" width="26" height="26" aria-hidden="true">
                            <use xlink:href="#arrow-left"></use>
                        </svg>
                    </button>
                    <button type="button" class="gl-slider__slider-btn mod-next gl__no-default-hover js-slider-btn-next gl-slider__b-slider-btn">
                        <svg class="gl-slider__slider-btn-icon" width="26" height="26" aria-hidden="true">
                            <use xlink:href="#arrow-right"></use>
                        </svg>
                    </button>
                </div>
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

                                        <?foreach ($arItem["PROPERTIES"]["BENEFITS"]["VALUE"] as $benefit):?>
                                            <div class="b-tariffs-item__services-list-wrapper">
                                                <ul class="b-tariffs-item__services-list">
                                                    <li class="b-tariffs-item__service">
                                                        <?if($benefit["SUB_VALUES"]["B_ICO"]["VALUE_XML_ID"]):?>
                                                            <svg width="15" height="15" aria-hidden="true" class="b-tariffs-item__service-icon">
                                                                <use xlink:href="#tariffs-<?=$benefit["SUB_VALUES"]["B_ICO"]["VALUE_XML_ID"]?>"></use>
                                                            </svg>
                                                        <?endif?>
                                                        <span class="b-tariffs-item__service-name"><?=$benefit["SUB_VALUES"]["B_VALUE"]["VALUE"]?></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?endforeach;?>
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
                                        <button class="gl__main-btn mod-business b-tariffs-item__btn js-open-send-request-modal-b" type="button" data-tariff-name="Корпорация-150" data-prise="150">Подключить</button>
                                        <div class="gl__secondary-btn">Подробнее о тарифе</div>
                                    </div>
                                </a>
                            </li>
                        <?endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
        <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
            <?=$arResult["NAV_STRING"]?>
        <?endif;?>
    </div>
</section>
