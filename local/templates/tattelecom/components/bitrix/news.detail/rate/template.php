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
<section class="b-tariff b-tariff-detail">
    <div class="gl__page-content">
        <h2 class="gl__title"><?=$arResult["NAME"]?></h2>

        <?if($arResult["PREVIEW_TEXT"]):?>
            <div class="b-tariff-detail__text">
                <?=$arResult["~PREVIEW_TEXT"]?>
            </div>
        <?endif;?>

        <form class="rates-info__content mod-b-info-content" data-need-validation data-parsley-validate data-parsley-focus="none">
            <div class="rates-info__preview">
                <div class="rates-info__title"><?=$arResult["PROPERTIES"]["CONDITIONS_TITLE"]["VALUE"]?></div>
                <ul class="rates-info__preview-list">
                    <?foreach ($arResult["CONDITIONS"] as $arConditions):?>
                        <li class="rates-info__preview-item">
                            <div class="rates-info__preview-caption"><?=$arConditions["NAME"]?></div>
                            <?if($arConditions["PROPS"]["SUBTITLE"]["VALUE"]):?>
                                <div class="rates-info__preview-caption-subtitl"><?=$arConditions["PROPS"]["SUBTITLE"]["VALUE"]?></div>
                            <?endif?>
                            <ul class="rates-info__preview-rows-list">
                                <?foreach ($arConditions["PROPS"]["TERMS"]["VALUE"] as $arTerms):?>
                                    <li class="rates-info__preview-row">
                                        <div class="rates-info__preview-rows-caption-wrapper">
                                            <div class="rates-info__preview-rows-caption">
                                                <span><?=$arTerms["SUB_VALUES"]["TERMS_T"]["VALUE"]?></span>
                                                <?if($arTerms["SUB_VALUES"]["TERMS_H"]["VALUE"]):?>
                                                    <div class="rates-info__preview-rows-caption-tooltip">
                                                        <div class="btn-info__container">
                                                            <button type="button" class="btn-info__btn">
                                                                <svg width="24" height="24" aria-hidden="true" class="btn-info__icon">
                                                                    <use xlink:href="#info-ellipse"></use>
                                                                </svg>
                                                            </button>
                                                            <div class="btn-info__content"><?=$arTerms["SUB_VALUES"]["TERMS_H"]["VALUE"]?></div>
                                                        </div>
                                                    </div>
                                                <?endif;?>
                                            </div>
                                        </div>
                                        <div class="rates-info__preview-rows-caption-value"><?=$arTerms["SUB_VALUES"]["TERMS_V"]["VALUE"]?></div>
                                    </li>
                                <?endforeach;?>
                            </ul>
                        </li>
                    <?endforeach;?>
                </ul>

                <?if($arResult["DETAIL_TEXT"]):?>
                    <div class="b-tariff-detail__rates-info">
                        <?=$arResult["~DETAIL_TEXT"]?>
                    </div>
                <?endif;?>

                <?if($arOption = $arResult["PROPERTIES"]["FINAL_OPTION"]["VALUE"]):?>
                    <div class="b-tariff-detail__rates-info-include">
                        <div class="rates-info__title"><?=$arOption["SUB_VALUES"]["FINAL_OPTION_T"]["VALUE"]?></div>

                        <?=$arOption["SUB_VALUES"]["FINAL_OPTION_V"]["~VALUE"]["TEXT"]?>
                    </div>
                <?endif;?>

                <div class="rates-info__preview-bottom">
                    <div class="rates-info__preview-price-wrapper">
                        <?if($arResult["PROPERTIES"]["PRICE"]["VALUE"]):?>
                            <span class="number"><?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?></span><?=$arResult["PROPERTIES"]["TARIFFING"]["VALUE"]?>
                        <?endif;?>
                        <?if($arResult["PROPERTIES"]["OLD_PRICE"]["VALUE"]):?>
                            <span class="rates-list__slide-old-price"><?=$arResult["PROPERTIES"]["OLD_PRICE"]["VALUE"]?><span><?=$arResult["PROPERTIES"]["TARIFFING"]["VALUE"]?></span></span>
                        <?endif;?>
                    </div>
                    <button type="button" class="rates-info__preview-btn gl__main-btn js-open-send-request-modal mod-business" data-prise="<?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?>" data-tariff-name="<?=$arResult["NAME"]?>">Подключить</button>
                </div>
            </div>
            <?if($title = $arResult["PROPERTIES"]["ADDITIONAL_CONDITION_TITLE"]["VALUE"]):?>
                <div class="rates-info__additional">
                    <div class="rates-info__title"><?=$title?></div>
                    <?foreach ($arResult["ADDITIONAL_CONDITIONS"] as $arConditions):?>
                        <div class="rates-info__b-subtitle"><?=$arConditions["NAME"]?></div>
                        <?if($arConditions["PROPS"]["SUBTITLE"]["VALUE"]):?>
                            <div class="rates-info__preview-caption-subtitl"><?=$arConditions["PROPS"]["SUBTITLE"]["VALUE"]?></div>
                        <?endif?>
                        <ul class="rates-info__b-additional-list">
                            <?foreach ($arConditions["PROPS"]["TERMS"]["VALUE"] as $arTerms):?>
                                <li class="rates-info__b-additional-item">
                                    <span class="rates-info__b-additional-item-text"><?=$arTerms["SUB_VALUES"]["TERMS_T"]["VALUE"]?></span>

                                    <span class="rates-info__b-additional-item-price"><?=$arTerms["SUB_VALUES"]["TERMS_V"]["VALUE"]?></span>
                                </li>
                            <?endforeach;?>
                        </ul>
                    <?endforeach;?>
                </div>
            <?endif;?>
        </form>


        <?foreach ($arResult["PROPERTIES"]["ATTACHMENTS"]["VALUE"] as $file):?>
            <?
            $arFile = CFile::GetFileArray($file);
            $description = $arFile["ORIGINAL_NAME"];
            if ($arFile["DESCRIPTION"]){
                $description = $arFile["DESCRIPTION"];
            }
            ?>
            <a href="<?=$arFile["SRC"]?>" download class="dpf-file__file-link">
                <svg width="30" height="40" aria-hidden="true" class="dpf-file__file-link-icon">
                    <use xlink:href="#pdf-file"></use>
                </svg>
                <div>
                    <div class="dpf-file__file-link-title"><?=CFile::FormatSize($arFile['FILE_SIZE'])?></div>
                    <div class="dpf-file__file-link-subtitle"><?=$description?></div>
                </div>
            </a>
        <?endforeach;?>
    </div>
</section>

<section class="b-tarif-options">
    <div class="gl__page-content">
        <?foreach($arResult["PROPERTIES"]["NOTES"]["VALUE"] as $arNote):?>
            <div class="b-tarif-options__option">
                <div class="b-tarif-options__title-wrapper gl__drop-menu-btn js-drop-menu-btn">
                    <h2 class="b-tarif-options__title"><?=$arNote["SUB_VALUES"]["NOTES_T"]["VALUE"]?></h2>
                    <svg width="24" height="24" aria-hidden="true" class="b-tarif-options__item-btn-icon gl__drop-menu-icon">
                        <use xlink:href="#arrow-down"></use>
                    </svg>
                </div>
                <div class="gl__drop-menu-container js-drop-menu-container">
                    <div class="gl__drop-menu js-drop-menu">
                        <div class="gl__text">
                            <?=$arNote["SUB_VALUES"]["NOTES_V"]["~VALUE"]["TEXT"]?>
                        </div>
                    </div>
                </div>
            </div>
        <?endforeach;?>
    </div>
</section>