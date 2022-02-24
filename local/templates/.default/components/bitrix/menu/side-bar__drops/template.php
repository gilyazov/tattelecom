<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul class="side-bar__drops-list">
    <?
    $previousLevel = 0;
    foreach($arResult as $arItem):?>

        <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
            <?if ($arItem['DEPTH_LEVEL'] == 1):?>
                <?=str_repeat("</ul></div></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
            <?else:?>
                <?//=($previousLevel . ' ' . $arItem['DEPTH_LEVEL'])?>
                <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
            <?endif;?>
        <?endif?>

        <?if ($arItem["IS_PARENT"]):?>

            <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <li class="side-bar__drop-item">
                    <button class="side-bar__drop-btn gl__drop-menu-btn js-drop-menu-btn"><?=$arItem["TEXT"]?><svg width="24" height="24" aria-hidden="true" class="side-bar__drop-btn-icon gl__drop-menu-icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </button>
                    <div class="gl__drop-menu-container js-drop-menu-container">
                        <ul class="side-bar__drop-content gl__drop-menu js-drop-menu">
            <?else:?>
                <li class="side-bar__drop-content-item">
                    <div class="side-bar__drop-caption"><?=$arItem["TEXT"]?></div>
                    <ul class="side-bar__drop-links-list">
            <?endif?>

        <?else:?>

            <?if ($arItem["PERMISSION"] > "D"):?>

                <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                    <li class="side-bar__drop-item">
                        <a href="<?=$arItem["LINK"]?>" class="side-bar__drop-btn gl__drop-menu-btn js-drop-menu-btn"><?=$arItem["TEXT"]?></a>
                        <div class="gl__drop-menu-container js-drop-menu-container"></div>
                    </li>
                <?elseif ($arItem["DEPTH_LEVEL"] == 2):?>
                    <li class="side-bar__drop-content-item">
                        <a href="<?=$arItem["LINK"]?>" class="side-bar__drop-caption"><?=$arItem["TEXT"]?></a>
                    </li>
                <?else:?>
                    <li class="side-bar__drop-links-item"><a href="<?=$arItem["LINK"]?>" class="side-bar__drop-link"><?=$arItem["TEXT"]?></a></li>
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
    </ul>
<?endif?>