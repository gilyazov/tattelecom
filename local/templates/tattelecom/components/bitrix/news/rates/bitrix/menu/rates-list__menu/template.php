<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="rates-list__menu-container gl__filter-container--lg js-filter-container">
    <ul class="rates-list__menu-wrapper gl__filter--lg js-modal-container">
        <button type="button" class="rates-list__menu-btn-close gl__lg-show gl__filter-modal-close modal__btn-close js-filter-close" id="close-thanks-modal">
            <svg width="32" height="32" aria-hidden="true" class="modal__close-icon">
                <use xlink:href="#close"></use>
            </svg>
        </button>
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
        <li class="rates-list__menu-item active">
            <a href="<?=$arItem["LINK"]?>" class="rates-list__menu-btn">
                <?=$arItem["TEXT"]?>
                <svg width="26" height="26" aria-hidden="true" class="rates-list__menu-btn-icon">
                    <use xlink:href="#arrow-right"></use>
                </svg>
            </a>
        </li>
	<?else:?>
    <li class="rates-list__menu-item">
        <a href="<?=$arItem["LINK"]?>" class="rates-list__menu-btn">
            <?=$arItem["TEXT"]?>
            <svg width="26" height="26" aria-hidden="true" class="rates-list__menu-btn-icon">
                <use xlink:href="#arrow-right"></use>
            </svg>
        </a>
    </li>
	<?endif?>
	
<?endforeach?>

    </ul>
</div>
<?endif?>