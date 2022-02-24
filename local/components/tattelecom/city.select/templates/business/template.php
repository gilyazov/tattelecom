<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>

<div class="header__popup-item-wrapper">
    <button class="location-popup-content__close-btn">
        <svg width="30" height="30" aria-hidden="true" class="header__search-btn-close-icon">
            <use xlink:href="#close"></use>
        </svg>
    </button>

    <form action="" class="location-popup-content__form" data-need-validation data-parsley-validate>
        <span class="location-popup-content__legend">Другой населённый пункт</span>
        <div class="select">
            <div class="select__container mod-small-choices-list mod-simple-design mod-b-select">
                <label class="select__wrapper">
                    <select class="gl__select js-custom-select" data-parsley-class-handler="#region" name="region" required data-parsley-required="" data-parsley-trigger="change">
                        <option placeholder value="">Район</option>
                        <?foreach ($arResult['REGIONS'] as $arRegion):?>
                            <option value="<?=$arRegion['ID']?>"><?=$arRegion['NAME']?></option>
                        <?endforeach;?>
                    </select>
                </label>
            </div>
        </div>
        <div class="select">
            <div class="select__container mod-small-choices-list mod-simple-design mod-b-select">
                <label class="select__wrapper js-city-select__wrapper">
                    <select
                            class="gl__select js-custom-select"
                            name="city"
                            data-parsley-class-handler="#city" required data-parsley-required="" data-parsley-trigger="change">
                        <option placeholder value="">Выберите регион</option>
                    </select>
                </label>
            </div>
        </div>
        <button class="location-popup-content__button header__b-main-page-menu-btn">Выбрать город</button>
    </form>
</div>