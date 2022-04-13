<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)):?>
    <div class="tatt-table-list__lg-container gl__filter-container--lg js-filter-container">
        <ul class="tatt-table-list gl__filter--lg js-modal-container">
            <button type="button" class="gl__lg-show gl__filter-modal-close modal__btn-close js-filter-close" id="close-thanks-modal">
                <svg width="32" height="32" aria-hidden="true" class="modal__close-icon">
                    <use xlink:href="#close"></use>
                </svg>
            </button>
        <?php
    foreach($arResult as $arItem):
        if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
            continue;
    ?>
        <li class="tatt-table-list__item">
            <a href="<?=$arItem["LINK"]?>"
                class="tatt-table-list__item-link<?if($arItem["SELECTED"]):?> mod-is-current<?endif;?>">
                <?=$arItem["TEXT"]?>
            </a>
        </li>
    <?php endforeach?>

        </ul>
    </div>
    <div class="gl__lg-show">
        <button type="button" class="gl__btn-settings js-open-filter-modal">Навигация<svg width="20" height="20" aria-hidden="true" class="gl__btn-settings-icon">
                <use xlink:href="#settigs"></use>
            </svg>
        </button>
    </div>
<?php endif?>