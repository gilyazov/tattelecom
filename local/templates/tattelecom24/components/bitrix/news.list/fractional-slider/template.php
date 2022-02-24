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
<div class="gl-slider__b-container gl-slider__container swiper-container js-swiper-container">
    <ul class="gl-slider__wrapper swiper-wrapper">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <li class="b-fractional-slider__slide swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <?if($linked = $arItem["PROPERTIES"]["LINKED"]["VALUE"]):?>
                    <?
                        if ($arItem["PREVIEW_PICTURE"]){
                            $mode = "mod-middle-horizontal";
                        }
                        else{
                            $mode = "mod-small";
                        }
                    ?>
                    <a href="<?=$arItem["CODE"]?>" class="b-fractional-slider__slide-card gl__no-default-hover <?=$mode?>">
                        <?if ($arItem["PREVIEW_PICTURE"]):?>
                            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" class="b-fractional-slider__card-background">
                        <?endif;?>
                        <div class="b-fractional-slider__card-title"><?=$arItem["NAME"]?></div>
                        <div class="b-fractional-slider__card-subtitle"><?=$arItem["PROPERTIES"]["SUB_TITLE"]["~VALUE"]["TEXT"]?></div>
                    </a>
                    <?$arLinked = $arResult["LINKED"][$linked];?>
                    <a href="<?=$arLinked["CODE"]?>" class="b-fractional-slider__slide-card gl__no-default-hover <?=$mode?>">
                        <?if ($arLinked["PREVIEW_PICTURE"]):?>
                            <img src="<?=$arLinked["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arLinked["NAME"]?>" class="b-fractional-slider__card-background">
                        <?endif;?>
                        <div class="b-fractional-slider__card-title"><?=$arLinked["NAME"]?></div>
                        <div class="b-fractional-slider__card-subtitle"><?=$arLinked["PROPERTIES"]["SUB_TITLE"]["~VALUE"]["TEXT"]?></div>
                    </a>
                <?else:?>
                    <?
                        if($arItem["PROPERTIES"]["CARD_TYPE"]["VALUE_XML_ID"] == "vertical"){
                            $type = "mod-middle-vertical";
                        }
                        elseif ($arItem["PROPERTIES"]["CARD_TYPE"]["VALUE_XML_ID"] == "mod-center mod-big"){
                            $type = "mod-middle-vertical";
                        }
                        else{
                            $type = "mod-large";
                        }
                    ?>
                    <a href="<?=$arItem["CODE"]?>"
                       class="b-fractional-slider__slide-card gl__no-default-hover <?=$type?>">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" class="b-fractional-slider__card-background">
                        <div class="b-fractional-slider__card-title"><?=$arItem["~NAME"]?></div>
                        <div class="b-fractional-slider__card-subtitle"><?=$arItem["PROPERTIES"]["SUB_TITLE"]["~VALUE"]["TEXT"]?></div>
                    </a>
                <?endif;?>
            </li>
        <?endforeach;?>
    </ul>
</div>
