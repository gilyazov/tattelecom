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
<section class="b-tariffs-list gl__section">
    <div class="gl__page-content">
        <div class="js-menu-tabs-container">
            <div class="b-menu-tabs">
                <?foreach ($arResult['SECTIONS'] as $key => $arSection):?>
                    <label class="b-menu-tabs__radio-wrapper">
                        <input type="radio" class="b-menu-tabs__tab js-menu-tab"
                               name="toggle-btn"<?if($key == array_key_first($arResult['SECTIONS'])):?> checked="checked"<?endif;?> value="section-<?=$arSection["ID"]?>">
                        <span class="b-menu-tabs__tab-content"><?=$arSection["NAME"]?></span>
                    </label>
                <?endforeach;?>
            </div>

            <h2 class="gl__title">Тарифы</h2>
            <?foreach ($arResult['SECTIONS'] as $key => $arSection):?>
                <div class="js-menu-tab-content gl__menu-tab-content mod-show" data-menu="section-<?=$arSection["ID"]?>">
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
                                    <?foreach ($arSection['RATES'] as $arItem):?>
                                        <li class="swiper-slide">
                                            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="b-tariffs-item gl__no-default-hover">
                                                <div class="b-tariffs-item__services-list-container">
                                                    <h3 class="b-tariffs-item__name"><?=$arItem["NAME"]?></h3>
                                                </div>
                                                <div class="b-tariffs-item__footer">
                                                    <button class="gl__main-btn mod-business b-tariffs-item__btn js-open-callback-modal" type="button" data-tariff-name="Корпорация-150" data-prise="150">Подключить</button>
                                                    <div class="gl__secondary-btn">Подробнее о тарифе</div>
                                                </div>
                                            </a>
                                        </li>
                                    <?endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    </div>
</section>
