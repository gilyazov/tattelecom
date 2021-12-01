<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="header__bottom-menu-list">

    <?
    foreach($arResult as $arItem):
        if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
            continue;
    ?>
        <?if($arItem["SELECTED"]):?>
            <li class="header__bottom-menu-item active">
                <a href="<?=$arItem["LINK"]?>" class="header__bottom-menu-link" data-hover-value="<?=$arItem["PARAMS"]["CODE"]?>"><?=$arItem["TEXT"]?></a>
            </li>
        <?else:?>
            <li class="header__bottom-menu-item">
                <a href="<?=$arItem["LINK"]?>" class="header__bottom-menu-link" data-hover-value="<?=$arItem["PARAMS"]["CODE"]?>"><?=$arItem["TEXT"]?></a>
            </li>
        <?endif?>

    <?endforeach?>

</ul>
<?endif?>