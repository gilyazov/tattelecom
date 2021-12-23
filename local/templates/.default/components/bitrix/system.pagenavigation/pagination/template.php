<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$this->setFrameMode(true);

if(!$arResult["NavShowAlways"])
{
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
        return;
}

// ссылка на первую страницу
$firstPageUrl = $arResult['sUrlPath'];
if (!empty($arResult['NavQueryString'])) {
    $firstPageUrl = $firstPageUrl.'?'.$arResult['NavQueryString'];
}
// ссылка на последнюю страницу
$lastPageUrl = $arResult['sUrlPath'];
if (!empty($arResult['NavQueryString'])) {
    $lastPageUrl = $lastPageUrl.'?'.$arResult['NavQueryString']
        .'&amp;PAGEN_'.$arResult['NavNum'].'='.$arResult['NavPageCount'];
} else {
    $lastPageUrl = $lastPageUrl.'?PAGEN_'.$arResult['NavNum'].'='.$arResult['NavPageCount'];
}
?>

<div class="search-site__pagination-wrapper mod-margin-top">
    <div class="pagination-page__pages-main-container js-pagination-page">
        <?php if ($arResult['NavPageNomer'] > 1): /* ссылка на первую страницу */ ?>
            <a href="<?= $firstPageUrl ?>" class="pagination-page__pages-btn pagination-page__btn-nav mod-prev">
                <span class="pagination-page__btn-nav-content"></span>
            </a>
        <?php endif; ?>
        <div class="pagination-page__pages-wrapper">
            <?php for ($i = $arResult['nStartPage']; $i <= $arResult['nEndPage']; $i++): ?>
                <?php
                // ссылка на очередную страницу
                $pageUrl = $arResult['sUrlPath'];
                if (!empty($arResult['NavQueryString'])) {
                    $pageUrl = $pageUrl.'?'.$arResult['NavQueryString'].'&amp;PAGEN_'.$arResult['NavNum'].'='.$i;
                } else {
                    $pageUrl = $pageUrl.'?PAGEN_'.$arResult['NavNum'].'='.$i;
                }
                ?>
                <?php if ($arResult['NavPageNomer'] == $i): /* если это текущая страница */ ?>
                    <a href="<?= $pageUrl; ?>" class="pagination-page__pages-item _is-current">
                        <span class="pagination-page__pages-btn pagination-page__pages-radio-content"><?= $i; ?></span>
                    </a>
                <?php else: ?>
                    <a href="<?= $pageUrl; ?>" class="pagination-page__pages-item">
                        <span class="pagination-page__pages-btn pagination-page__pages-radio-content"><?= $i; ?></span>
                    </a>
                <?php endif; ?>
            <?php endfor; ?>
        </div>
        <?php if ($arResult['NavPageNomer'] < $arResult['NavPageCount']): /* ссылка на последнюю страницу */ ?>
            <a href="<?= $lastPageUrl; ?>" class="pagination-page__pages-btn pagination-page__btn-nav mod-next">
                <span class="pagination-page__btn-nav-content"></span>
            </a>
        <?php endif; ?>
    </div>
</div>