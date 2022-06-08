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
<ul class="gl-slider__wrapper swiper-wrapper">
    <?foreach($arResult["ITEMS"] as $ITEM):?>
        <?
        $this->AddEditAction($ITEM['ID'], $ITEM['EDIT_LINK'], CIBlock::GetArrayByID($ITEM["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($ITEM['ID'], $ITEM['DELETE_LINK'], CIBlock::GetArrayByID($ITEM["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <li class="swiper-slide gl__white-container news-list__slide gl__link-arrow-container" id="<?=$this->GetEditAreaId($ITEM['ID']);?>">
            <div class="news-list__slide-title"><?=$ITEM["DISPLAY_ACTIVE_FROM"]?></div>
            <div class="news-list__slide-text"><?=$ITEM["NAME"]?></div>
            <div class="news-list__link-arrow-wrapper gl__link-arrow-wrapper gl__link-arrow-block">
                <a href="<?=$ITEM["DETAIL_PAGE_URL"]?>" class="gl__link-arrow-link">
                    <svg width="26" height="26" aria-hidden="true" class="gl__link-arrow-icon">
                        <use xlink:href="#arrow-line-right"></use>
                    </svg>
                </a>
            </div>
        </li>
    <?endforeach;?>
</ul>