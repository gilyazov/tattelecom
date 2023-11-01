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
<?/*
<!--<div class="gl-slider js-swiper" data-swiper-slides-preview="4">-->
<!--    <div class="gl-slider__container swiper-container js-swiper-container">-->
<!--        <ul class="gl-slider__wrapper swiper-wrapper">-->
<!--            --><?//foreach($arResult["ITEMS"] as $ITEM):?>
<!--                --><?//
//                $this->AddEditAction($ITEM['ID'], $ITEM['EDIT_LINK'], CIBlock::GetArrayByID($ITEM["IBLOCK_ID"], "ELEMENT_EDIT"));
//                $this->AddDeleteAction($ITEM['ID'], $ITEM['DELETE_LINK'], CIBlock::GetArrayByID($ITEM["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
//                ?>
<!--                <li class="swiper-slide" id="--><?//=$this->GetEditAreaId($ITEM['ID']);?><!--">-->
<!--                    <a-->
<!--                            href="--><?//=$ITEM['DETAIL_PAGE_URL']?><!--"-->
<!--                            class="gl__no-default-hover rates-list__slide gl__white-container --><?//if($ITEM["PROPERTIES"]["HIT"]["VALUE"]):?><!--rates-list__slide-hit--><?//endif;?><!--">-->
<!--                        --><?//if($ITEM["PROPERTIES"]["HIT"]["VALUE"]):?>
<!--                            <img src="--><?//=BUILD_PATH?><!--img/main-page/rates-list/hit-background.svg" alt="" class="rates-list__slide-hit-background">-->
<!--                            <img src="--><?//=BUILD_PATH?><!--img/main-page/rates-list/hit-mark.svg" alt="" class="rates-list__slide-hit-mark">-->
<!--                        --><?//endif;?>
<!---->
<!--                        <div class="rates-list__slide-content">-->
<!--                            <div class="rates-list__slide-up">-->
<!--                                <div class="rates-list__slide-title">--><?//=$ITEM["NAME"]?><!--</div>-->
<!--                                <div class="rates-list__slide-subtitle">--><?//=$ITEM["PROPERTIES"]["SUBTITLE"]["VALUE"]?><!--</div>-->
<!---->
<!--                                <ul class="rates-list__slide-conditions-list">-->
<!--                                    --><?//foreach ($ITEM["PROPERTIES"]["BENEFITS"]["VALUE"] as $benefit):?>
<!--                                        <li class="rates-list__slide-condition-item">-->
<!--                                            <img src="--><?//=BUILD_PATH?><!--img/main-page/rates-list/--><?//=$benefit["SUB_VALUES"]["B_ICO"]["VALUE_XML_ID"]?><!--.svg" alt=""-->
<!--                                                 class="rates-list__slide-condition-item-icon">-->
<!--                                            <div class="rates-list__slide-condition-item-text">--><?//=$benefit["SUB_VALUES"]["B_VALUE"]["VALUE"]?><!--</div>-->
<!--                                        </li>-->
<!--                                    --><?//endforeach;?>
<!--                                </ul>-->
<!--                            </div>-->
<!---->
<!--                            <div class="rates-list__slide-down">-->
<!--                                <div class="rates-list__opportunities-wrapper">-->
<!--                                    <div class="rates-list__opportunities-title">Возможности</div>-->
<!---->
<!--                                    --><?//foreach ($ITEM["PROPERTIES"]["FEATURES"]["VALUE"] as $benefit):?>
<!--                                        <div class="rates-list__opportunities-text">--><?//=$benefit?><!--</div>-->
<!--                                    --><?//endforeach;?>
<!--                                </div>-->
<!---->
<!--                                <div class="rates-list__slide-price-wrapper">-->
<!--                                    <div class="rates-list__slide-price">-->
<!--                                        <span class="big">--><?//=$ITEM["PROPERTIES"]["PRICE"]["VALUE"]?><!--</span>-->
<!--                                        <span class="small">--><?//=$ITEM["PROPERTIES"]["TARIFFING"]["VALUE"]?><!--</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="rates-list__slide-btns-wrapper">-->
<!--                                    <button type="button"-->
<!--                                            data-tariff-name="--><?//=$ITEM["NAME"]?><!--"-->
<!--                                            data-prise="--><?//=$ITEM["PROPERTIES"]["PRICE"]["VALUE"]?><!--"-->
<!--                                            class="rates-list__slide-btn-plug gl__main-btn js-open-send-request-modal">-->
<!--                                        Подключить-->
<!--                                    </button>-->
<!--                                    <div class="rates-list__slide-link-detailed-wrapper">-->
<!--                                        <div class="gl__secondary-btn  ">-->
<!--                                            Подробнее о тарифе-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
<!--            --><?//endforeach;?>
<!--        </ul>-->
<!--    </div>-->
<!--    <div class="gl__bg-hide">-->
<!--        <button type="button" class="gl-slider__slider-btn mod-prev js-slider-btn-prev">-->
<!--            <svg width="26" height="26" aria-hidden="true" class="gl-slider__slider-btn-icon">-->
<!--                <use xlink:href="#arrow-left"></use>-->
<!--            </svg>-->
<!--        </button>-->
<!--        <button type="button" class="gl-slider__slider-btn mod-next js-slider-btn-next">-->
<!--            <svg width="26" height="26" aria-hidden="true" class="gl-slider__slider-btn-icon">-->
<!--                <use xlink:href="#arrow-right"></use>-->
<!--            </svg>-->
<!--        </button>-->
<!--    </div>-->
<!--    <div class="gl__xs-hide">-->
<!--        <div class="gl-slider__pagination-container">-->
<!--            <div class="gl-slider__pagination-wrapper swiper-pagination js-pagination-slider"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="gl__xs-show">-->
<!--        <a href="/mobile/rates/" class="gl__link-show-all">Все тарифы<svg width="20" height="20" aria-hidden="true" class="gl__link-show-all-icon">-->
<!--                <use xlink:href="#arrow-right"></use>-->
<!--            </svg>-->
<!--        </a>-->
<!--    </div>-->
<!--</div>-->
*/?>
<div class="gl-slider js-swiper" data-swiper-slides-preview="4">
    <div class="gl-slider__container swiper-container js-swiper-container">
        <ul class="gl-slider__wrapper swiper-wrapper">
            <?foreach($arResult["ITEMS"] as $ITEM):?>
                <?
                $this->AddEditAction($ITEM['ID'], $ITEM['EDIT_LINK'], CIBlock::GetArrayByID($ITEM["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($ITEM['ID'], $ITEM['DELETE_LINK'], CIBlock::GetArrayByID($ITEM["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <li class="swiper-slide"id="<?=$this->GetEditAreaId($ITEM['ID']);?>">
                    <a href="<?=$ITEM['DETAIL_PAGE_URL']?>" class="rates-list__slide rates-list-internet__item gl__no-default-hover gl__white-container">
                        <div class="rates-list-internet__item-up">
                            <div class="rates-list-internet__item-block">
                                <div class="rates-list-internet__item-title"><?=$ITEM["NAME"]?></div>
                                <div class="rates-list-internet__item-subtitle mod-orange"><?=$ITEM["PROPERTIES"]["SUBTITLE"]["VALUE"]?></div>
                            </div>
                            <ul class="rates-list-internet__item-block rates-list-internet__proposal-list">
<!--                                --><?//var_dump($ITEM["PROPERTIES"]["BENEFITS"]);?>
                                <?foreach ($ITEM["PROPERTIES"]["BENEFITS"]["VALUE"] as $benefit):?>
                                    <li class="rates-list-internet__item-proposal">
                                        <img src="<?=BUILD_PATH?>img/rates-internet-list-page/<?=$benefit["SUB_VALUES"]["BENEFITS_I"]["VALUE_XML_ID"]?>.svg" alt="" class="rates-list-internet__item-proposal-img">
                                        <div>
                                            <div class="gpon-rates-list__caption"><?=$benefit["SUB_VALUES"]["BENEFITS_V"]["VALUE"]?></div>
<!--                                            <div class="gpon-rates-list__caption-value">телеканалов</div>-->
                                        </div>
                                    </li>
                                <?endforeach;?>
                            </ul>
                            <div class="rates-list-internet__item-block"></div>
                        </div>
                        <div class="rates-list-internet__item-down">
                            <div class="rates-list-internet__item-price-wrapper">
                                <?if($ITEM["PROPERTIES"]["OLD_PRICE"]["VALUE"]):?>
                                    <div class="rates-list__slide-old-price">
                                        <?=$ITEM["PROPERTIES"]["OLD_PRICE"]["VALUE"]?><span>₽/мес</span>
                                    </div>
                                <?endif;?>
                                <div class="rates-list-internet__item-price">
                                    <span class="number"><?=$ITEM["PROPERTIES"]["PRICE"]["VALUE"]?></span>₽/мес
                                </div>
                            </div>
                            <div class="rates-list__slide-btns-wrapper">
                                <button type="button" class="rates-list__slide-btn-plug gl__main-btn js-open-send-request-modal" data-tariff-name="<?=$ITEM["NAME"]?>" data-prise="<?=$ITEM["PROPERTIES"]["PRICE"]["VALUE"]?>">Подключить</button>
                                <div class="rates-list__slide-link-detailed-wrapper">
                                    <button type="button" class="gl__secondary-btn js-open-about-tariff-modal">Подробнее о тарифе</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            <?endforeach;?>
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
        <a href="" class="gl__link-show-all">Все тарифы<svg width="20" height="20" aria-hidden="true" class="gl__link-show-all-icon">
                <use xlink:href="#arrow-right"></use>
            </svg>
        </a>
    </div>
</div>