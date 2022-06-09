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
$this->addExternalJS(BUILD_PATH . "js/rates-mobile-list-page.js");
?>
<ul class="rates-list__list">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <li class="  " id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <a
                href="<?=$arItem['DETAIL_PAGE_URL']?>"
                class="gl__no-default-hover rates-list__slide gl__white-container <?if($arItem["PROPERTIES"]["HIT"]["VALUE"]):?>rates-list__slide-hit<?endif;?>">
                <?if($arItem["PROPERTIES"]["HIT"]["VALUE"]):?>
                    <img src="<?=BUILD_PATH?>img/main-page/rates-list/hit-background.svg" alt="" class="rates-list__slide-hit-background">
                    <img src="<?=BUILD_PATH?>img/main-page/rates-list/hit-mark.svg" alt="" class="rates-list__slide-hit-mark">
                <?endif;?>

                <div class="rates-list__slide-content">
                    <div class="rates-list__slide-up">
                        <div class="rates-list__slide-title"><?=$arItem["NAME"]?></div>
                        <div class="rates-list__slide-subtitle"><?=$arItem["PROPERTIES"]["SUBTITLE"]["VALUE"]?></div>

                        <ul class="rates-list__slide-conditions-list">
                            <?foreach ($arItem["PROPERTIES"]["BENEFITS"]["VALUE"] as $benefit):?>
                                <li class="rates-list__slide-condition-item">
                                    <?if($benefit["SUB_VALUES"]["B_ICO"]["VALUE_XML_ID"]):?>
                                        <img src="<?=BUILD_PATH?>img/main-page/rates-list/<?=$benefit["SUB_VALUES"]["B_ICO"]["VALUE_XML_ID"]?>.svg" alt=""
                                            class="rates-list__slide-condition-item-icon">
                                    <?endif?>
                                    <div class="rates-list__slide-condition-item-text"><?=$benefit["SUB_VALUES"]["B_VALUE"]["VALUE"]?></div>
                                </li>
                            <?endforeach;?>
                        </ul>
                    </div>

                    <div class="rates-list__slide-down">
                        <div class="rates-list__opportunities-wrapper">
                            <div class="rates-list__opportunities-title">Возможности</div>

                            <?foreach ($arItem["PROPERTIES"]["FEATURES"]["VALUE"] as $benefit):?>
                                <div class="rates-list__opportunities-text"><?=$benefit?></div>
                            <?endforeach;?>
                        </div>

                        <div class="rates-list__slide-price-wrapper">
                            <?if($arItem["PROPERTIES"]["OLD_PRICE"]["VALUE"]):?>
                                <div class="rates-list__slide-old-price">
                                    <?=$arItem["PROPERTIES"]["OLD_PRICE"]["VALUE"]?><span><?=$arItem["PROPERTIES"]["TARIFFING"]["VALUE"]?></span>
                                </div>
                            <?endif;?>
                            <div class="rates-list__slide-price">
                                <span class="big"><?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?></span>
                                <span class="small"><?=$arItem["PROPERTIES"]["TARIFFING"]["VALUE"]?></span>
                            </div>
                        </div>

                        <div class="rates-list__slide-btns-wrapper">
                            <button type="button"
                                    data-tariff-name="<?=$arItem["NAME"]?>"
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
    <?endforeach;?>
</ul>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>