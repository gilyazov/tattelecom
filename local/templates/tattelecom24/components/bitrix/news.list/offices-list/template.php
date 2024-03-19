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

<ul class="sales-offices-map__list js-map-list">
    <?php foreach($arResult["ITEMS"] as $arItem):?>
    <?php if($arItem["PROPERTIES"]["COORDINATES"]["VALUE"]):?>
        <li
                class="sales-offices-map__item js-offices-item"
                data-coord="[<?=$arItem["PROPERTIES"]["COORDINATES"]["VALUE"]?>]"
                <?php if($arItem["PROPERTIES"]["IS_PARTNER"]["VALUE_XML_ID"] == "Y"):?>
                    data-is-partner
                <?php endif; ?>
        >
            <div class="sales-offices-map__item-header">
                <div class="sales-offices-map__item-address js-address"><?=$arItem["PROPERTIES"]["ADDRESS"]["VALUE"];?></div>
                <div class="sales-offices-map__item-city js-city">
                    <?if($arItem["PROPERTIES"]["SETTLEMENT"]["VALUE"]):?>
                        <?=$arItem["DISPLAY_PROPERTIES"]["SETTLEMENT"]["DISPLAY_VALUE"];?>
                    <?else:?>
                        г. <?=$arItem["PROPERTIES"]["CITY"]["VALUE"];?>
                    <?endif;?>
                </div>
            </div>
            <div class="sales-offices-map__item-work-time-wrapper">
                <?php if($arItem["PROPERTIES"]["TIME"]["VALUE"]): ?>
                    <?php foreach ($arItem["PROPERTIES"]["TIME"]["VALUE"] as $arTime): ?>
                        <div class="sales-offices-map__item-work-time">
                            <div class="sales-offices-map__item-work-caption js-day"><?=$arTime["SUB_VALUES"]["DAY"]["VALUE"]?></div>
                            <div class="sales-offices-map__item-work-value js-time"><?=$arTime["SUB_VALUES"]["DAY_TIME"]["VALUE"]?></div>
                        </div>
                    <?php endforeach; ?>
                <?php elseif(SITE_ID == "s1"): ?>
                    <?php if($arItem["PROPERTIES"]["WEEKDAY"]["VALUE"]): ?>
                        <div class="sales-offices-map__item-work-time">
                            <div class="sales-offices-map__item-work-caption js-day">пн.–пт.</div>
                            <div class="sales-offices-map__item-work-value js-time"><?=$arItem["PROPERTIES"]["WEEKDAY"]["VALUE"];?></div>
                        </div>
                    <?php endif; ?>
                    <?php if($arItem["PROPERTIES"]["SATURDAY"]["VALUE"]): ?>
                        <div class="sales-offices-map__item-work-time">
                            <div class="sales-offices-map__item-work-caption js-day">сб.</div>
                            <div class="sales-offices-map__item-work-value js-time"><?=$arItem["PROPERTIES"]["SATURDAY"]["VALUE"];?></div>
                        </div>
                    <?php endif; ?>
                    <?php if($arItem["PROPERTIES"]["SUNDAY"]["VALUE"]): ?>
                        <div class="sales-offices-map__item-work-time">
                            <div class="sales-offices-map__item-work-caption js-day">вс.</div>
                            <div class="sales-offices-map__item-work-value js-time"><?=$arItem["PROPERTIES"]["SUNDAY"]["VALUE"];?></div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </li>
    <?php endif; ?>
    <?php endforeach;?>
</ul>