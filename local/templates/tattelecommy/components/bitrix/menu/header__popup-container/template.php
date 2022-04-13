<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="header__popup-container mod-tattelekom js-header-popup-container">
    <div class="header__popup-wrapper js-header-popup-wrapper">
        <div class="gl__page-content">
    <?
    $previousLevel = 0;
    foreach($arResult as $arItem):?>

        <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
            <?=str_repeat("</div></div>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
        <?endif?>

        <?if ($arItem["IS_PARENT"]):?>

            <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <div class="header__popup-content js-header-popup" data-hover-value="<?=$arItem["PARAMS"]["CODE"]?>">
                    <div class="header__popup-item-wrapper">
            <?else:?>
                <li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>
                    <div>
            <?endif?>

        <?else:?>

            <?if ($arItem["PERMISSION"] > "D"):?>

                <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                    <div class="header__popup-content js-header-popup" data-hover-value="<?=$arItem["PARAMS"]["CODE"]?>"></div>
                <?else:?>
                    <a href="<?=$arItem["LINK"]?>" class="header__popup-item-caption"><?=$arItem["TEXT"]?></a>
                <?endif?>

            <?else:?>

                <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                    <li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>">768<?=$arItem["TEXT"]?></a></li>
                <?else:?>
                    <li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>">890<?=$arItem["TEXT"]?></a></li>
                <?endif?>

            <?endif?>

        <?endif?>

        <?$previousLevel = $arItem["DEPTH_LEVEL"];?>

    <?endforeach?>

    <?if ($previousLevel > 1)://close last item tags?>
        <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
    <?endif?>


            </div>
        </div>
    </div>
<?endif?>