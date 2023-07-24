<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<?
$previousLevel = 0;
foreach($arResult as $key => $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
        <?if ($arItem['DEPTH_LEVEL'] == 1):?>
            <?if ($arItem["PARAMS"]["ID"] == "203"):?></ul><?endif;?>
            <?=str_repeat("</div>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
        <?else:?>
            <?//=($previousLevel . ' ' . $arItem['DEPTH_LEVEL'])?>
		    <?=str_repeat("</ul></div>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
        <?endif;?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<div
            class="header__b-popup-content js-header-popup js-b-popup-margin"
            <?if($arItem['PARAMS']['ALIGNMENT']):?>data-alignment="<?=$arItem['PARAMS']['ALIGNMENT']?>"<?endif;?>
            data-hover-value="item-<?=$arItem['PARAMS']['ID']?>">
            <?if ($arItem["PARAMS"]["DEPTH_SUBSECTIONS"] == 2):?><ul><?endif;?>
        <?else:?>
            <div class="header__b-popup-content-item">
                <div class="header__b-popup-caption-list">
                    <img src="<?=CFIle::GetPath($arItem["PARAMS"]["ICO"])?>" alt="" class="header__b-menu-item-control-icon">
                    <?if($arItem['PARAMS']['ID'] == 211):?>
                        <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                    <?else:?>
                        <?=$arItem["TEXT"]?>
                    <?endif;?>
                </div>
				<ul class="header__b-popup-list">
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <!--<div class="header__popup-content js-header-popup" data-hover-value="<?/*=$arItem["PARAMS"]["CODE"]*/?>"></div>-->
            <?elseif ($arItem["DEPTH_LEVEL"] == 2):?>
                <?if($arItem["SECOND_LEVEL_ITEM"]):?>
                    <li>
                        <a href="<?=$arItem["LINK"]?>" class="header__b-menu-item-control">
                            <img src="<?=CFIle::GetPath($arItem["PARAMS"]["ICO"])?>" alt="" class="header__b-menu-item-control-icon"> <?=$arItem["TEXT"]?>
                        </a>
                    </li>
                <?else:?>
                    <div class="header__b-popup-content-item">
                        <div class="header__b-popup-caption-list">
                            <img src="<?=CFIle::GetPath($arItem["PARAMS"]["ICO"])?>" alt="" class="header__b-menu-item-control-icon"> <?=$arItem["TEXT"]?>
                        </div>
                    </div>
                <?endif;?>
            <?else:?>
				<li class="header__b-popup-item"><a href="<?=$arItem["LINK"]?>" class="header__b-popup-item-link"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>">ww<?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>">ee<?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
    </ul></div>
	<?//=str_repeat("</ul></li>test", ($previousLevel-1) );?>
<?endif?>
<?endif?>