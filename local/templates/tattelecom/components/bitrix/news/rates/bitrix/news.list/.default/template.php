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
$this->addExternalJS(BUILD_PATH . "js/rates-mobile-list-page.js");
?>
<ul class="rates-list__list">
    <?php foreach($arResult["ITEMS"] as $arItem):?>
        <?php
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <li class="  " id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <a
                href="<?=$arItem['DETAIL_PAGE_URL']?>"
                class="gl__no-default-hover rates-list__slide gl__white-container <?=($arItem["PROMO_CLASS"] ? : "");?>">

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

                        <ul class="rates-list__slide-conditions-list">
                            <?php foreach ($arItem["PROPERTIES"]["BENEFITS"]["VALUE"] as $benefit):?>
                                <li class="rates-list__slide-condition-item">
                                    <?php if($benefit["SUB_VALUES"]["B_ICO"]["VALUE_XML_ID"]):?>
                                        <img src="<?=BUILD_PATH?>img/main-page/rates-list/<?=$benefit["SUB_VALUES"]["B_ICO"]["VALUE_XML_ID"]?>.svg" alt=""
                                            class="rates-list__slide-condition-item-icon">
                                    <?php endif?>
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

                        <?php if($hint = $arItem["PROPERTIES"]["HINT"]["VALUE"]):?><div class="rates-list__slide-subtitle"><?=$hint?></div><?php endif;?>

                        <div class="rates-list__slide-btns-wrapper">
                            <button type="button"
                                    data-tariff-name="<?=$arItem["NAME"]?>"
                                    data-tariffing="<?=$arItem["PROPERTIES"]["TARIFFING"]["VALUE"]?>"
                                    data-prise="<?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?>"
                                    data-potok-type="<?=$arItem["PROPERTIES"]["POTOK_TYPE"]["VALUE_XML_ID"]?>"
                                    data-potok-id="<?=$arItem["PROPERTIES"]["POTOK_ID"]["VALUE"]?>"
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

<?php if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?php endif;?>