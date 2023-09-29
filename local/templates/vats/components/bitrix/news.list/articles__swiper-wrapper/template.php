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
?>
<div class="articles__swiper-wrapper">
    <div class="articles__swiper">
        <ul class="swiper-wrapper">
            <?php foreach($arResult["ITEMS"] as $ITEM):?>
                <?php
                $this->AddEditAction($ITEM['ID'], $ITEM['EDIT_LINK'], CIBlock::GetArrayByID($ITEM["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($ITEM['ID'], $ITEM['DELETE_LINK'], CIBlock::GetArrayByID($ITEM["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <li class="articles__swiper-item swiper-slide" id="<?=$this->GetEditAreaId($ITEM['ID']);?>">
                    <img class="articles__swiper-item-img" src="<?=$ITEM["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$ITEM["NAME"]?>">
                    <h3 class="articles__swiper-item-title"><?=$ITEM["NAME"]?></h3>
                    <p class="articles__swiper-item-desc"><?=$ITEM["PREVIEW_TEXT"]?></p>
                    <a class="articles__swiper-item-btn" target="_blank" href="<?=$ITEM["DETAIL_PAGE_URL"]?>">Читать</a>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
    <div class="articles__swiper-navigation">
        <div class="articles__swiper-navigation-prev">
            <svg class="icon icon-arrow-right" width="12px" height="12px">
                <use xlink:href="/local/js/vatc/assets/images/sprites/sprite-mono.svg#arrow-right"></use>
            </svg>
        </div>
        <div class="articles__swiper-navigation-next">
            <svg class="icon icon-arrow-right" width="12px" height="12px">
                <use xlink:href="/local/js/vatc/assets/images/sprites/sprite-mono.svg#arrow-right"></use>
            </svg>
        </div>
    </div>
</div>
