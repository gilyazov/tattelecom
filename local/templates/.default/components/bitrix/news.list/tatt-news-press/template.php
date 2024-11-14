<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
    <form class="technical-works__form">
        <div class="technical-works__select-wrapper">
            <div class="select">
                <div class="select__container mod-simple-design mod-border-bottom" id="year-select">
                    <label class="select__wrapper">
                        <span class="gl__input-mark-required"></span>
                        <select class="gl__select js-custom-select" data-parsley-class-handler="#year-select" name="year" data-parsley-required="" data-parsley-trigger="change">
                            <option value="" placeholder>Все года</option>
                            <?php foreach ($arResult["YEARS"] as $arItem): ?>
                                <?php if($_GET["year"] == $arItem): ?>
                                    <option value="<?=$arItem?>" selected><?=$arItem?></option>
                                <?php elseif($_GET["year"] == "" && !empty($_GET["month"]) && date('Y') == $arItem): ?>
                                    <option value="<?=$arItem?>" selected><?=$arItem?></option>
                                <?php else: ?>
                                    <option value="<?=$arItem?>"><?=$arItem?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </label>
                </div>
            </div>
            <div class="select">
                <div class="select__container mod-simple-design mod-border-bottom" id="mouth-select">
                    <label class="select__wrapper">
                        <span class="gl__input-mark-required"></span>
                        <select class="gl__select js-custom-select" data-parsley-class-handler="#mouth" name="month" data-parsley-required="" data-parsley-trigger="change">
                            <option value="" placeholder>Все месяцы</option>
                            <?php foreach ($arResult["MONTHS"] as $key => $arItem): ?>
                                <?php if($_GET["month"] == $key): ?>
                                    <option value="<?=$key?>" selected><?=$arItem?></option>
                                <?php else: ?>
                                    <option value="<?=$key?>"><?=$arItem?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </label>
                </div>
            </div>
        </div>
    </form>
    <ul class="search-site__list">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <li class="search-site__item">
                <div class="technical-works__item-wrapper">
                    <div class="technical-works__item-date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></div>
                    <div>
                        <div class="search-site__item-preview"><?=$arItem["NAME"]?></div>
                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="search-site__item-link">
                            <span class="search-site__item-link-content">
                                Подробнее
                                <svg width="16" height="16" aria-hidden="true" class="search-site__item-icon">
                                    <use xlink:href="#arrow-right"></use>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?>
<?endif;?>