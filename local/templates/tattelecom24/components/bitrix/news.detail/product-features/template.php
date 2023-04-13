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
if($image = $arResult["PREVIEW_PICTURE"]["ID"]){
    $preview = \Tattelecom\Core\Tools::resizeImage($image, 750, 900, true);
}
?>
<section class="product-features" id="product-features-host">
    <div class="gl__page-content">
        <div class="product-features__grid-wrapper">
            <?if($preview):?>
                <div class="product-features__img-wrapper">
                    <img src="<?=$preview?>" alt="" class="product-features__img">
                </div>
            <?endif;?>
            <div class="product-features__title-wrapper">
                <div class="product-features__article">Код:<?=$arResult["CODE"]?></div>
                <h2 class="gl__title"><?=$arResult["NAME"]?></h2>
            </div>
            <?if($price = $arResult["PROPERTIES"]["PRICE"]["VALUE"]):?>
                <div class="product-features__price">
                    <?=number_format($price, 0, ".", " ")?>р.
                    <?if($price = $arResult["PROPERTIES"]["OLD_PRICE"]["VALUE"]):?>
                        <span class="rates-list__slide-old-price"><?=$price?><span>₽</span>
                    <?endif;?>
                </div>
            <?endif;?>

            <button type="button" class="gl__main-btn product-features-btn-main js-open-send-request-modal"
                    data-tariff-name="Оформление заказа"
                    data-product-img="<?=$preview?>"
                    data-product-caption="<?=$arResult["PROPERTIES"]["TYPE"]["VALUE"]?>"
                    data-product-value="<?=$arResult["NAME"]?>"
                    data-product-price="<?=number_format($price, 0, ".", " ")?>" data-point-issue>Заказать</button>
<!--            <button type="button" class="product-features-btn-secondary js-open-installments-modal">Доступно в рассрочку</button>-->

            <div class="product-features__list-wrapper">
                <div class="product-features__list-caption">Общие характеристики</div>
                <ul class="product-features__list">
                    <?foreach ($arResult["PROPERTIES"] as $arProperty):?>
                        <?if(!$arProperty["VALUE"]) continue;?>
                        <li class="product-features__item">
                            <div class="product-features__item-caption"><?=$arProperty["NAME"]?></div>
                            <div class="product-features__item-value"><?=$arProperty["VALUE"]?></div>
                        </li>
                    <?endforeach;?>
                </ul>
            </div>
        </div>
    </div>
</section>