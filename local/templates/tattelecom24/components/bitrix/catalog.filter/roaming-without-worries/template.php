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
<div class="roaming-without-worries__content-wrapper">
    <form
        class="roaming-without-worries__form"
        data-need-validation data-parsley-validate data-parsley-focus="none"
        name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get">
        <?foreach($arResult["ITEMS"] as $arItem):
            if(array_key_exists("HIDDEN", $arItem)):
                echo $arItem["INPUT"];
            endif;
        endforeach;?>

        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?if(!array_key_exists("HIDDEN", $arItem)):?>
                <div class="roaming-without-worries__form-item">
                    <div class="roaming-without-worries__form-title-wrapper">
                        <div class="roaming-without-worries__form-title"><?=$arItem["NAME"]?></div>
                    </div>

                    <?=$arItem["INPUT"]?>
                </div>
            <?endif?>
        <?endforeach;?>

        <div class="roaming-without-worries__btn-wrapper">
            <!--<input type="submit" name="set_filter" value="<?/*=GetMessage("IBLOCK_SET_FILTER")*/?>" />-->
            <!--<input type="submit" name="del_filter" value="<?/*=GetMessage("IBLOCK_DEL_FILTER")*/?>" />-->
            <input type="hidden" name="set_filter" value="Y" />
            <button type="submit" class="roaming-without-worries__btn gl__main-btn">Узнать стоимость</button>
        </div>
    </form>

    <div class="roaming-without-worries__content-image" style="background-image: url('<?=BUILD_PATH?>img/roaming-page/man-2.svg')"></div>
</div>