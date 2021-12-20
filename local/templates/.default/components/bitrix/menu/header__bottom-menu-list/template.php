<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)):?>
    <ul class="header__bottom-menu-list header__hide-when-search js-hide-when-search">
        <?php
    foreach($arResult as $arItem):
        if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
            continue;
    ?>

        <li class="header__bottom-menu-item">
            <a href="<?=$arItem["LINK"]?>"
               class="header__bottom-menu-link<?if(!$arItem["PARAMS"]['IS_PARENT']):?> mod-popup-empty<?endif;?><?if($arItem["SELECTED"]):?> mod-is-current<?endif;?>"
                <?if($arItem["PARAMS"]['IS_PARENT']):?>data-hover-value="<?=$arItem["PARAMS"]["CODE"]?>"<?endif;?>
            ><?=$arItem["TEXT"]?></a>
        </li>
    <?php endforeach?>

</ul>
<?php endif?>