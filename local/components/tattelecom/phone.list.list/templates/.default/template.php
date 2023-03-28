<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arParams */
/** @var array $arResult */
/*if (!$arResult['ITEMS']){
    return;
}*/
?>
<?if($_REQUEST['type']) {
    $GLOBALS['APPLICATION']->RestartBuffer();
} ?>
<?if ($arResult["ITEMS"]):?>
    <ul class="phone-list__list">
        <?foreach ($arResult['ITEMS'] as $arItem):?>
            <li class="phone-list__item">
                <button
                        type="button" class="phone-list__item-btn js-open-send-request-modal"
                        data-tariff-name="Бронирование номера"
                        data-comment="<?=$arItem['phone_number']?>">
                    <span class="phone-list__item-phone"><?=$arItem['phone_number']?></span>
                    <img src="<?=BUILD_PATH?>img/beautiful-phone-page/buy.svg" alt="" class="phone-list__item-icon">
                </button>
            </li>
        <?endforeach;?>
    </ul>

    <div class="phone-list__pagination-wrapper">
        <button type="button" class="phone-list__upload-btn gl__main-btn mod-orange-transparent" data-page="<?=$arParams['PAGE']?>">Загрузить еще</button>
    </div>
<?else:?>
    <div class="sales-offices-map__not-found mod-show">Пока здесь нет красивых номеров, но скоро они появятся.</div>
<?endif;?>
<?if($_REQUEST['type']) {
    die();
} ?>