<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
        <?if ($arItem['DEPTH_LEVEL'] == 1):?>
            <?=str_repeat("</ul></div>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
        <?else:?>
            <?//=($previousLevel . ' ' . $arItem['DEPTH_LEVEL'])?>
		    <?=str_repeat("</li></button></span>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
        <?endif;?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
            <div class="header__b-menu-item">
                <div class="header__b-menu-item-caption"><?=$arItem["TEXT"]?></div>
                <ul class="header__b-menu-item-list">
		<?else:?>
            <li>
                <button type="button" class="header__b-menu-item-control mod-btn js-b-header-drop">
                    <img src="<?=BUILD_PATH?>img/header/business-menu/tel.svg" alt="" class="header__b-menu-item-control-icon"> <?=$arItem["TEXT"]?><svg width="16" height="16" aria-hidden="true" class="header__b-menu-item-control-icon-arrow">
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                    <span class="header__b-menu-item-drop-list">
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <!--<div class="header__popup-content js-header-popup" data-hover-value="<?/*=$arItem["PARAMS"]["CODE"]*/?>"></div>-->
            <?elseif ($arItem["DEPTH_LEVEL"] == 2):?>
                <li>
                    <a href="<?=$arItem["LINK"]?>" class="header__b-menu-item-control">
                        <img src="<?=CFIle::GetPath($arItem["PARAMS"]["ICO"])?>" alt="" class="header__b-menu-item-control-icon"> <?=$arItem["TEXT"]?>
                    </a>
                </li>
            <?else:?>
				<a href="<?=$arItem["LINK"]?>" class="header__b-menu-item-drop-link"><?=$arItem["TEXT"]?></a>
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
	<?=str_repeat("</ul></div>", ($previousLevel-1) );?>
<?endif?>
<?endif?>