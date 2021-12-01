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
<div class="rates-list__menu-container gl__filter-container--lg js-filter-container">
    <ul class="rates-list__menu-wrapper gl__filter--lg js-modal-container">
        <button type="button" class="rates-list__menu-btn-close gl__lg-show gl__filter-modal-close modal__btn-close js-filter-close" id="close-thanks-modal">
            <svg width="32" height="32" aria-hidden="true" class="modal__close-icon">
                <use xlink:href="#close"></use>
            </svg>
        </button>

        <?
            foreach ($arResult['SECTIONS'] as &$arSection){
                $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

                if (false === $arSection['PICTURE'])
                    $arSection['PICTURE'] = array(
                        'SRC' => $arCurView['EMPTY_IMG'],
                        'ALT' => (
                            '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                            ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                            : $arSection["NAME"]
                        ),
                        'TITLE' => (
                            '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                            ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                            : $arSection["NAME"]
                        )
                    );
                ?>
                <li id="<? echo $this->GetEditAreaId($arSection['ID']); ?>" class="rates-list__menu-item">
                    <a
                        href="<? echo $arSection['SECTION_PAGE_URL']; ?>"
                        class="rates-list__menu-btn"
                        title="<? echo $arSection['PICTURE']['TITLE']; ?>"
                    >
                        <? echo $arSection['NAME']; ?>

                        <?
                            if ($arParams["COUNT_ELEMENTS"] && $arSection['ELEMENT_CNT'] !== null)
                            {
                                ?> <span>(<? echo $arSection['ELEMENT_CNT']; ?>)</span><?
                            }
                        ?>
                        <svg width="26" height="26" aria-hidden="true" class="rates-list__menu-btn-icon">
                            <use xlink:href="#arrow-right"></use>
                        </svg>
                    </a>
                </li><?
            }
        ?>
    </ul>
</div>