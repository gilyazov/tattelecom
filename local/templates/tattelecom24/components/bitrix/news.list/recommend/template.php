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
<section class="recommend" id="recommend-host">
    <div class="gl__page-content">
        <h2 class="gl__title">Рекомендум также</h2>
        <div class="gl-slider js-swiper" data-swiper-slides-preview="4">
            <div class="gl-slider__container swiper-container js-swiper-container">
                <ul class="gl-slider__wrapper swiper-wrapper">
                    <?foreach($arResult["ITEMS"] as $arItem):?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        if($image = $arItem["PREVIEW_PICTURE"]["ID"]){
                            $preview = \Tattelecom\Core\Tools::resizeImage($image, 300, 250, true);
                        }
                        ?>
                        <li class="product-item mod-no-adapt swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                            <!--<div class="product-item__mark mod-no-adapt">
                                <div class="product-item__mark-content mod-new mod-no-adapt">Новинка</div>
                            </div>-->
                            <?if($image = $arItem["PREVIEW_PICTURE"]["ID"]):?>
                                <div class="product-item__image-wrapper mod-no-adapt">
                                    <img src="<?=$preview?>" alt="" class="product-item__image mod-no-adapt">
                                </div>
                            <?endif;?>

                            <div>
                                <?if($price = $arItem["PROPERTIES"]["PRICE"]["VALUE"]):?>
                                    <div class="product-item__price mod-no-adapt">
                                        <span class="number mod-no-adapt"><?=number_format($price, 0, ".", " ")?></span>₽
                                    </div>
                                <?endif;?>

                                <div class="product-item__name-wrapper mod-no-adapt">
                                    <!--<div class="product-item__installments mod-no-adapt">Доступно в рассрочку</div>-->
                                    <div class="product-item__name mod-no-adapt"><?=$arItem["NAME"]?></div>
                                </div>
                            </div>
                            <div class="product-item__btn-wrapper">
                                <button type="button" class="product-item__btn gl__main-btn mod-no-adapt js-open-send-request-modal"
                                        data-tariff-name="Оформление заказа"
                                        data-product-img="<?=$preview?>"
                                        data-product-caption="<?=$arItem["PROPERTIES"]["TYPE"]["VALUE"]?>"
                                        data-product-value="<?=$arItem["NAME"]?>"
                                        data-product-price="<?=number_format($price, 0, ".", " ")?>"
                                        data-point-issue>Заказать</button>
                                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="product-item__btn gl__secondary-btn gl__sm-hide">Подробнее</a>
                            </div>
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
        </div>
    </div>
</section>