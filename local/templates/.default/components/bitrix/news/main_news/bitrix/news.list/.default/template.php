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
$this->addExternalJS(BUILD_PATH . "js/news-page-page.js");
?>
    <div class="news-page__block">
        <div class="news-page__news-warapper">
            <?php foreach($arResult["ITEMS"] as $ITEM):?>
                <?php
                $this->AddEditAction($ITEM['ID'], $ITEM['EDIT_LINK'], CIBlock::GetArrayByID($ITEM["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($ITEM['ID'], $ITEM['DELETE_LINK'], CIBlock::GetArrayByID($ITEM["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <a href="<?=$ITEM["DETAIL_PAGE_URL"]?>" class="gl__white-container news-list__slide gl__link-arrow-container news-page__news-item <?=(SITE_ID == "s2") ? "mod-business" : ""?>" id="<?=$this->GetEditAreaId($ITEM['ID']);?>">
                    <div class="news-list__slide-title"><?=$ITEM["DISPLAY_ACTIVE_FROM"]?></div>
                    <div class="news-list__slide-text"><?=$ITEM["NAME"]?></div>
                    <div class="news-list__slide-legend"><?=$ITEM["PROPERTIES"]["TYPE"]["VALUE"]?></div>
                    <div class="news-list__link-arrow-wrapper gl__link-arrow-wrapper gl__link-arrow-block">
                        <div class="gl__link-arrow-link">
                            <svg width="26" height="26" aria-hidden="true" class="gl__link-arrow-icon">
                                <use xlink:href="#arrow-line-right"></use>
                            </svg>
                        </div>
                    </div>
                </a>
            <?php endforeach;?>
        </div>
        <div class="news-page__pagination">
            <div class="pagination-page__pages-main-container">
                <?php if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
                    <?=$arResult["NAV_STRING"]?>
                <?php endif;?>
            </div>
        </div>
    </div>
    <div class="news-page__block">
        <form method="GET" action="/news/" class="news-page__filter">
            <div class="news-page__filter-heading">
                <span class="news-page__filter-legend">Фильтр</span>
                <a href="/news/" class="news-page__filter-btn button js-filter-reset <?=(SITE_ID == "s2") ? "mod-business" : ""?>">Сброс</a>
            </div>
            <div class="select">
                <div class="select__container mod-simple-design" id="news-year-select">
                    <label class="select__wrapper">
                        <span class="gl__input-mark-required"></span>
                        <select class="gl__select js-custom-select" data-parsley-class-handler="#news-year-select" name="year" data-parsley-required="" data-parsley-trigger="change">
                            <option placeholder value="">Выберите год</option>
                            <?php foreach ($arResult["YEARS"] as $arItem): ?>
                                <?php if($_GET["year"] == $arItem): ?>
                                    <option value="<?=$arItem?>" selected><?=$arItem?></option>
                                <?php elseif($_GET["year"] == "" && !empty($_GET["month"]) && date('Y') - 1 == $arItem): ?>
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
                <div class="select__container mod-simple-design" id="news-month-select">
                    <label class="select__wrapper">
                        <span class="gl__input-mark-required"></span>
                        <select class="gl__select js-custom-select" data-parsley-class-handler="#news-month-select" name="month" data-parsley-required="" data-parsley-trigger="change">
                            <option placeholder value="">Выберите месяц</option>
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
            <div class="select">
                <div class="select__container mod-simple-design" id="news-all-select">
                    <label class="select__wrapper">
                        <span class="gl__input-mark-required"></span>
                        <select class="gl__select js-custom-select" data-parsley-class-handler="#news-all-select" name="type" data-parsley-required="" data-parsley-trigger="change">
                            <option placeholder value="">Все новости</option>
                            <?php foreach ($arResult["TYPES"] as $arItem): ?>

                                <?php if($_GET["type"] == $arItem["VALUE"]): ?>
                                    <option value="<?=$arItem["VALUE"]?>" selected><?=$arItem["VALUE"]?></option>
                                <?php else: ?>
                                    <option value="<?=$arItem["VALUE"]?>"><?=$arItem["VALUE"]?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </label>
                </div>
            </div>
            <button type="submit" class="button news-page__filter-sbmt-btn gl__main-btn <?=(SITE_ID == "s2") ? "mod-business" : ""?>">Показать</button>
        </form>
    </div>
