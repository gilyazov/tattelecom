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
<div class="catalog__products-container">
    <ul class="catalog__products-list">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            if($image = $arItem["PREVIEW_PICTURE"]["ID"]){
                $preview = \Tattelecom\Core\Tools::resizeImage($image, 300, 250, true);
            }
            ?>
            <li class="product-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <!--<div class="product-item__mark">
                    <div class="product-item__mark-content mod-new">Новинка</div>
                </div>-->
                <?if($image = $arItem["PREVIEW_PICTURE"]["ID"]):?>
                    <div class="product-item__image-wrapper">
                        <img src="<?=$preview?>" alt="" class="product-item__image">
                    </div>
                <?endif;?>
                <div>
                    <div class="rates-list__slide-price-wrapper">
                        <?if($price = $arItem["PROPERTIES"]["OLD_PRICE"]["VALUE"]):?>
                            <div class="rates-list__slide-old-price">
                                <span class="number"><?=number_format($price, 0, ".", " ")?></span>₽
                            </div>
                        <?endif;?>
                        <?if($price = $arItem["PROPERTIES"]["PRICE"]["VALUE"]):?>
                            <div class="product-item__price">
                                <span class="number"><?=number_format($price, 0, ".", " ")?></span>₽
                            </div>
                        <?endif;?>
                    </div>

                    <div class="product-item__name-wrapper">
                        <!--<div class="product-item__installments">Доступно в рассрочку</div>-->
                        <div class="product-item__name"><?=$arItem["NAME"]?></div>
                    </div>
                </div>
                <div class="product-item__btn-wrapper">
                    <button type="button" class="product-item__btn gl__main-btn js-open-send-request-modal"
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

    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <?=$arResult["NAV_STRING"]?>
        <div class="catalog__products-pagination-wrapper">
            <div class="gl__sm-hide">
                <div class="pagination-page__pages-main-container">
                    <a href="/" class="pagination-page__pages-btn pagination-page__btn-nav mod-prev">
                        <span class="pagination-page__btn-nav-content"></span>
                    </a>
                    <div class="pagination-page__pages-wrapper">
                        <a href="/" class="pagination-page__pages-item _is-current">
                            <span class="pagination-page__pages-btn pagination-page__pages-radio-content">1</span>
                        </a>
                        <a href="/" class="pagination-page__pages-item">
                            <span class="pagination-page__pages-btn pagination-page__pages-radio-content">2</span>
                        </a>
                        <a href="/" class="pagination-page__pages-item">
                            <span class="pagination-page__pages-btn pagination-page__pages-radio-content">...</span>
                        </a>
                        <a href="/" class="pagination-page__pages-item">
                            <span class="pagination-page__pages-btn pagination-page__pages-radio-content">10</span>
                        </a>
                    </div>
                    <a href="/" class="pagination-page__pages-btn pagination-page__btn-nav mod-next">
                        <span class="pagination-page__btn-nav-content"></span>
                    </a>
                </div>
            </div>
            <button type="button" class="catalog__products-pagination-btn gl__main-btn gl__sm-show">Загрузить еще</button>
        </div>
    <?endif;?>
</div>