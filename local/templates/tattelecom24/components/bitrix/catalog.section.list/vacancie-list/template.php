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
<div class="tatt-row-grid js-menu-tabs-container">
    <div class="tatt-row-grid__block">
        <div class="tatt-achievements__filter-container gl__filter-container--lg js-filter-container">
            <button type="button" class="gl__lg-show gl__filter-modal-close modal__btn-close js-filter-close" id="close-thanks-modal">
                <svg width="32" height="32" aria-hidden="true" class="modal__close-icon">
                    <use xlink:href="#close"></use>
                </svg>
            </button>
            <ul class="~tatt-achievements__nav-list">
                <?
                    foreach ($arResult['SECTIONS'] as $key => &$arSection)
                    {
                        $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                        $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
                ?>
                    <li id="<?=$this->GetEditAreaId($arSection['ID']);?>" class="tatt-achievements__nav-item">
                        <label class="tatt-achievements__nav-item-label">
                            <input type="radio" class="tatt-achievements__nav-radio js-menu-tab"<?if($key == 0):?> checked="checked"<?endif;?> name="achievements-nav-item" value="<?=$arSection["ID"]?>">
                            <span class="tatt-achievements__nav-item-text"><?=$arSection["NAME"]?> (<?=$arSection["ELEMENT_CNT"]?>)</span>
                        </label>
                    </li>
                <?
                    }
                ?>
            </ul>
        </div>
        <div class="gl__lg-show">
            <button type="button" class="gl__btn-settings js-open-filter-modal">Навигация<svg width="20" height="20" aria-hidden="true" class="gl__btn-settings-icon">
                    <use xlink:href="#settigs"></use>
                </svg>
            </button>
        </div>
    </div>
    <div class="tatt-row-grid__block tatt-achievements__content">
        <?foreach ($arResult['SECTIONS'] as $key => &$arSection):?>
            <div class="tatt-achievements__content-item gl__menu-tab-content js-menu-tab-content<?if($key === 0):?> mod-show<?endif;?>" data-menu="<?=$arSection["ID"]?>">
                <h3 class="child-nearby__subtitle child-nearby__subtitle-3"><?=$arSection["NAME"]?></h3>
                <ul class="child-nearby__price-list">
                    <?foreach ($arSection["ELEMENTS"] as $arVacancy):?>
                        <li class="child-nearby__price-item">
                            <a class="child-nearby__price-item-caption" href="https://kazan.hh.ru/vacancy/<?=$arVacancy["EXTERNAL_ID"]?>" target="_blank"><?=$arVacancy["NAME"]?></a>
                            <?if($arVacancy["PROPERTY_SALARY_FROM_VALUE"]):?>
                                <div class="child-nearby__price-item-value">
                                    <span class="number"><?=$arVacancy["PROPERTY_SALARY_FROM_VALUE"]?></span>
                                    <span class="s24_text_number">₽/мес</span>
                                </div>
                            <?endif;?>
                        </li>
                    <?endforeach;?>
                </ul>
            </div>
        <?endforeach;?>
    </div>
</div>