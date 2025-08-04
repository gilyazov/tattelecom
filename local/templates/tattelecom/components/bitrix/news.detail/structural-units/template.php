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
<section class="tatt-branch__section">
    <div class="gl__page-content">
        <h1 class="tatt-branch__title gl__title">
            <?=$arResult["NAME"]?>
        </h1>
        <div class="tatt-branch__hero-row">
            <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"];?>" alt="<?=$arResult["NAME"]?>" class="tatt-branch__hero-img">
            <div class="tatt-branch__hero-block">
                <?php if($arResult["PROPERTIES"]["ADDRESS"]["VALUE"]): ?>
                    <div class="tatt-branch__hero-block-item">
                        <span class="tatt-branch__hero-block-legend">Адрес:</span>
                        <p>
                            <?=$arResult["PROPERTIES"]["ADDRESS"]["VALUE"]?>
                        </p>
                    </div>
                <?php endif; ?>
                <?php if($arResult["PROPERTIES"]["PHONE"]["VALUE"]): ?>
                    <div class="tatt-branch__hero-block-item">
                        <span class="tatt-branch__hero-block-legend">Телефон:</span>
                        <a href="tel:<?=preg_replace("/\D/","",$arResult["PROPERTIES"]["PHONE"]["VALUE"]);?>"><?=$arResult["PROPERTIES"]["PHONE"]["VALUE"]?></a>
                    </div>
                <?php endif; ?>
                <?php if($arResult["PROPERTIES"]["FAX"]["VALUE"]): ?>
                    <div class="tatt-branch__hero-block-item">
                        <span class="tatt-branch__hero-block-legend">Факс:</span>
                        <a href="tel:<?=preg_replace("/\D/","",$arResult["PROPERTIES"]["FAX"]["VALUE"]);?>"><?=$arResult["PROPERTIES"]["FAX"]["VALUE"]?></a>
                    </div>
                <?php endif; ?>
                <?php if($arResult["PROPERTIES"]["EMAIL"]["VALUE"]): ?>
                    <div class="tatt-branch__hero-block-item">
                        <span class="tatt-branch__hero-block-legend">Эл. почта:</span>
                        <a href="mailto:<?=$arResult["PROPERTIES"]["EMAIL"]["VALUE"]?>"><?=$arResult["PROPERTIES"]["EMAIL"]["VALUE"]?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php if($arResult["PROPERTIES"]["CONTACTS"]["VALUE"]): ?>
<section class="tatt-branch__section">
    <div class="gl__page-content">
        <div class="tatt-branch__contacts">
            <h2 class="tatt-branch__contacts-title gl__title">Контактная информация</h2>
            <table align="center" width="100%" cellpading="0" cellspacing="0">
                <thead>
                <tr>
                    <td>Служба</td>
                    <td>С городского</td>
                    <td>С мобильного</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($arResult["PROPERTIES"]["CONTACTS"]["VALUE"] as $arItem): ?>
                    <tr>
                        <td>
                            <?=$arItem["SUB_VALUES"]["CONTACTS_NAME"]["VALUE"] ?>
                        </td>
                        <td>
                            <?=$arItem["SUB_VALUES"]["CONTACTS_VAL_1"]["VALUE"] ?>
                        </td>
                        <td>
                            <a href="tel:<?=preg_replace("/\D/","",$arResult["PROPERTIES"]["CONTACTS_VAL_2"]["VALUE"]);?>">
                                <?=$arItem["SUB_VALUES"]["CONTACTS_VAL_2"]["VALUE"] ?>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
<!--            <a style="display: inline-block" href="--><?//=$arResult["PROPERTIES"]["ORDER_LINK"]["VALUE"]?><!--" class="button tatt-branch__buton tatt-branch__contacts-button">Заявка на подключение</a>-->
        </div>
    </div>
</section>
<?php endif; ?>
<?php if($arResult["PROPERTIES"]["NAME"]["VALUE"]): ?>
<section class="tatt-branch__section">
    <div class="gl__page-content tatt-branch__head">
        <h2 class="gl__title tatt-branch__branches-title">Руководитель</h2>
        <div class="tatt-branch__head-drop-content">
            <img class="tatt-head__main-img" src="<?=CFile::GetPath($arResult["PROPERTIES"]["PHOTO"]["VALUE"])?>" alt="<?=$arResult["PROPERTIES"]["NAME"]["VALUE"]?>">
            <div class="tatt-branch__head-content-text">
                <h3><?=$arResult["PROPERTIES"]["NAME"]["VALUE"]?></h3>
                <p><?=$arResult["PROPERTIES"]["POSITION"]["VALUE"]?></p>
                <p><?=$arResult["PROPERTIES"]["TIME"]["VALUE"]?></p>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if($arResult["PROPERTIES"]["BRANCHES"]["VALUE"]): ?>
<section class="tatt-branch__section">
    <div class="gl__page-content tatt-branch__branches">
        <h2 class="gl__title tatt-branch__branches-title">Филиалы</h2>
        <?php
        global $branchesFilter;
        $branchesFilter = ["ID" => $arResult["PROPERTIES"]["BRANCHES"]["VALUE"]]
        ?>
        <?php $APPLICATION->IncludeComponent("bitrix:news.list","branches",Array(
                "IBLOCK_TYPE" => "about",
                "IBLOCK_ID" => "52",
                "NEWS_COUNT" => "999",
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "ACTIVE_FROM",
                "SORT_ORDER2" => "DESC",
                "FILTER_NAME" => "branchesFilter",
                "FIELD_CODE" => [],
                "PROPERTY_CODE" => ["PHONE", "EMAIL"],
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "PARENT_SECTION" => "",
                "INCLUDE_SUBSECTIONS" => "N",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600",
                "CACHE_FILTER" => "Y",
                "CACHE_GROUPS" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => ""
            )
        );?>
    </div>
</section>
<?php endif; ?>
<?php if($arResult["PROPERTIES"]["NEWS"]["VALUE"]): ?>
<div class="tatt-branch__section tatt-branch__section-news">
    <section class="news-list" id="news-list-host">
        <div class="gl__page-content">
            <div class="gl__title-head">
                <h2 class="gl__title">Новости филиала</h2>
                <div class="gl__xs-hide">
                    <a href="https://tattelecom.ru/news/" class="gl__link-show-all">Все новости<svg width="20" height="20" aria-hidden="true" class="gl__link-show-all-icon">
                            <use xlink:href="#arrow-right"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="gl-slider js-swiper" data-swiper-slides-preview="3">
                <div class="gl-slider__container swiper-container js-swiper-container">
                    <?php
                    global $newsFilter;
                    $newsFilter = ["ID" => $arResult["PROPERTIES"]["NEWS"]["VALUE"]]
                    ?>
                    <?php $APPLICATION->IncludeComponent("bitrix:news.list","main-news",Array(
                            "IBLOCK_TYPE" => "mobile",
                            "IBLOCK_ID" => "29",
                            "NEWS_COUNT" => "30",
                            "SORT_BY1" => "SORT",
                            "SORT_ORDER1" => "ASC",
                            "SORT_BY2" => "ACTIVE_FROM",
                            "SORT_ORDER2" => "DESC",
                            "FILTER_NAME" => "newsFilter",
                            "FIELD_CODE" => Array("ID", "NAME", "DETAIL_PAGE_URL"),
                            "PROPERTY_CODE" => Array("",),
                            "CHECK_DATES" => "N",
                            "DETAIL_URL" => "news/#ELEMENT_CODE#/",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "ACTIVE_DATE_FORMAT" => "d F",
                            "SET_TITLE" => "N",
                            "PAGER_TEMPLATE" => "",
                            "DISPLAY_TOP_PAGER" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "N"
                        )
                    );?>
                </div>
                <div class="gl__bg-hide">
                    <button type="button" class="gl-slider__slider-btn mod-prev js-slider-btn-prev">
                        <svg width="26" height="26" aria-hidden="true" class="gl-slider__slider-btn-icon">
                            <use xlink:href="#arrow-left"></use>
                        </svg>
                    </button>
                    <button type="button" class="gl-slider__slider-btn mod-next js-slider-btn-next">
                        <svg width="26" height="26" aria-hidden="true" class="gl-slider__slider-btn-icon">
                            <use xlink:href="#arrow-right"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="gl__xs-show">
                <a href="" class="gl__link-show-all">Все тарифы<svg width="20" height="20" aria-hidden="true" class="gl__link-show-all-icon">
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</div>
<?php endif; ?>
<?php if($arResult["PROPERTIES"]["FILES"]["VALUE"]): ?>
<section class="tatt-branch__section">
    <div class="gl__page-content tatt-branch__results">
        <h2 class="gl__title tatt-branch__results-title">Результаты специальной оценки условий труда</h2>
        <ul class="tatt-branch__results-list">
            <?php foreach ($arResult["PROPERTIES"]["FILES"]["VALUE"] as $arItem): ?>
                <?php
                    $fileID = $arItem["SUB_VALUES"]["FILES_FILE"]["VALUE"];
                    $arFile = CFile::GetById($fileID);
                    $fileSize = 0;
                    $filePath = "";
                    $fileExtension = "";
                    if($ar_res = $arFile->GetNext()) {
                        $fileSize = GetStrFileSize($ar_res["FILE_SIZE"], 0);
                        $filePath = CFile::GetPath($fileID);
                        $fileExtension = \Bitrix\Main\IO\Path::getExtension($filePath);
                    }
                ?>
                <li class="tatt-branch__results-item">
                    <a href="<?=$filePath?>" download class="archive-file__file-link">
                        <svg width="24" height="24" aria-hidden="true" class="archive-file__file-link-icon">
                            <use xlink:href="#download2"></use>
                        </svg>
                        <div>
                            <span class="archive-file__file-link-title"><?=$arItem["SUB_VALUES"]["FILES_NAME"]["VALUE"]?></span>
                            <span class="archive-file__file-link-subtitle"><?=$fileExtension?> <?=$fileSize?></span>
                        </div>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<?php endif; ?>