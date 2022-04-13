<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)):?>
    <ul class="header__bottom-menu-list">
        <?php
    foreach($arResult as $arItem):
        if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
            continue;
    ?>
        <li class="header__bottom-menu-item">
            <a href="<?=$arItem["LINK"]?>"
               data-hover-value="<?=$arItem["PARAMS"]["CODE"]?>"
                class="header__bottom-menu-link<?if($arItem["SELECTED"]):?> mod-is-current<?endif;?>">
                <?=$arItem["TEXT"]?>
            </a>
        </li>
    <?php endforeach?>

</ul>
<?php endif?>