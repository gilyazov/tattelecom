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
<section class="ussd-faq">
    <div class="gl__page-content">
        <div class="ussd-faq__content">
            <h2 class="gl__title">Стоимость услуг</h2>
            <ul>
                <?foreach($arResult["ITEMS"] as $arItem):?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <li class="faq__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                            <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg><?=$arItem["NAME"]?>
                        </button>

                        <div class="faq__flexs-list gl__drop-menu-container js-drop-menu-container">
                            <ul class="gl__drop-menu js-drop-menu">
                                <?foreach ($arItem["PROPERTIES"]["OPTIONS"]["VALUE"] as $arOption):?>
                                    <li class="info-drop-menu__flex">
                                        <div class="info-drop-menu__flex-caption"><?=$arOption["SUB_VALUES"]["OPTIONS_T"]["VALUE"]?></div>
                                        <div class="info-drop-menu__flex-value">
                                            <?=$arOption["SUB_VALUES"]["OPTIONS_V"]["VALUE"]?>
                                        </div>
                                    </li>
                                <?endforeach;?>
                            </ul>
                        </div>
                    </li>
                <?endforeach;?>
            </ul>
        </div>
    </div>
</section>