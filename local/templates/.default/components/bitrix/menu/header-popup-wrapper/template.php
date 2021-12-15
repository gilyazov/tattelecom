<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
        <?if ($arItem['DEPTH_LEVEL'] == 1):?>
            <?=str_repeat("</div>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
        <?else:?>
            <?//=($previousLevel . ' ' . $arItem['DEPTH_LEVEL'])?>
		    <?=str_repeat("</ul></div>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
        <?endif;?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<div class="header__popup-content js-header-popup" data-hover-value="<?=$arItem["PARAMS"]["CODE"]?>">
		<?else:?>
            <div class="header__popup-item-wrapper">
                <a href="<?=$arItem["LINK"]?>" class="header__popup-item-caption"><?=$arItem["TEXT"]?></a>
				<ul class="header__popup-item-list">
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <div class="header__popup-content js-header-popup" data-hover-value="<?=$arItem["PARAMS"]["CODE"]?>"></div>
            <?elseif ($arItem["DEPTH_LEVEL"] == 2):?>
                <div class="header__popup-item-wrapper"><a href="<?=$arItem["LINK"]?>" class="header__popup-item-caption"><?=$arItem["TEXT"]?></a></div>
            <?else:?>
				<li class="header__popup-item-link"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
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
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>
<?endif?>