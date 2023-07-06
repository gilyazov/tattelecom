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
$this->addExternalJS(BUILD_PATH . "js/rates-internet-list-page.js");
?>
<ul class="rates-list__list">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div
                class="rates-list__slide rates-list-internet__item gl__no-default-hover gl__white-container <?if($arItem["PROPERTIES"]["ORANGE"]["VALUE"]):?>mod-orange<?endif;?>">
                <?if($arItem["PROPERTIES"]["ORANGE"]["VALUE"]):?>
                    <img src="<?=BUILD_PATH?>img/rates-internet-list-page/background-mark.svg" alt="" class="rates-list-internet__item-background">
                <?endif;?>

                <div class="rates-list-internet__item-up">
                    <div class="rates-list-internet__item-block">
                        <div class="rates-list-internet__item-title"><?=$arItem["NAME"]?></div>
                        <div class="rates-list-internet__item-subtitle"><?=$arItem["PROPERTIES"]["SUBTITLE"]["VALUE"]?></div>
                    </div>
                    <?if($arBenefits = $arItem["PROPERTIES"]["BENEFITS"]["VALUE"]):?>
                        <div class="rates-list-internet__item-block">
                            <?foreach ($arBenefits as $arBenefit):?>
                                <div class="rates-list-internet__item-proposal">
                                    <img
                                        src="<?=BUILD_PATH?>img/rates-internet-list-page/<?=$arBenefit["SUB_VALUES"]["BENEFITS_I"]["VALUE_XML_ID"]?><?=($arItem["PROPERTIES"]["ORANGE"]["VALUE"]?"-white":"")?>.svg" alt=""
                                        class="rates-list-internet__item-proposal-img">
                                    <div class="rates-list-internet__item-proposal-caption"><?=$arBenefit["SUB_VALUES"]["BENEFITS_V"]["VALUE"]?></div>
                                </div>
                            <?endforeach;?>
                        </div>
                    <?endif?>
                    <?if($arOptions = $arItem["PROPERTIES"]["OPTIONS"]["VALUE"]):?>
                        <div class="rates-list-internet__item-block">
                            <div class="rates-list-internet__item-wifi-wrapper">
                                <div class="rates-list-internet__item-wifi"><?=$arOptions["SUB_VALUES"]["OPTIONS_V"]["VALUE"]?><div class="rates-list-internet__item-wifi-dropdown">
                                        <?if (is_array($arOptions["SUB_VALUES"]["OPTIONS_H"]["VALUE"])):?>
                                            <div class="rates-list-internet__item-wifi-dropdown-inner">
                                                <?=$arOptions["SUB_VALUES"]["OPTIONS_H"]["~VALUE"]["TEXT"]?>
                                            </div>
                                        <?endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?endif?>
                </div>
                <div class="rates-list-internet__item-down">
                    <div class="rates-list-internet__item-price-wrapper">
                        <?if($arItem["PROPERTIES"]["OLD_PRICE"]["VALUE"]):?>
                            <div class="rates-list__slide-old-price">
                                <?=$arItem["PROPERTIES"]["OLD_PRICE"]["VALUE"]?><span>₽/мес</span>
                            </div>
                        <?endif;?>
                        <div class="rates-list-internet__item-price">
                            <span class="number"><?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?></span>₽/мес
                        </div>
                    </div>

                    <div class="rates-list__slide-btns-wrapper">
                        <button type="button"
                                class="rates-list__slide-btn-plug gl__main-btn js-open-send-request-modal<?if($arItem["PROPERTIES"]["ORANGE"]["VALUE"]):?> mod-white<?endif?>"
                                data-tariff-name="<?=$arItem["NAME"]?>" data-prise="<?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?>">Подключить</button>
                        <div class="rates-list__slide-link-detailed-wrapper">
                            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="gl__secondary-btn <?if($arItem["PROPERTIES"]["ORANGE"]["VALUE"]):?> mod-white<?endif?>">Подробнее о тарифе</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    <?endforeach;?>
</ul>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>