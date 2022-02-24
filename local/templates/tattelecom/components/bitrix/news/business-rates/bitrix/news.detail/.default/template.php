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
<section class="b-tariff">
    <div class="gl__page-content">
        <h2 class="gl__title"><?=$arResult["NAME"]?></h2>
        <form class="rates-info__content mod-b-info-content" data-need-validation data-parsley-validate data-parsley-focus="none">
            <div class="rates-info__preview">
                <div class="rates-info__title">Включено в абонентскую плату:</div>
                <ul class="rates-info__preview-list">
                    <?foreach ($arResult["CONDITIONS"] as $arConditions):?>
                        <li class="rates-info__preview-item">
                            <div class="rates-info__preview-caption"><?=$arConditions["NAME"]?></div>
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
                <div class="rates-info__preview-bottom">
                    <div class="rates-info__preview-price-wrapper">
                        <span class="number"><?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?></span><?=$arResult["PROPERTIES"]["TARIFFING"]["VALUE"]?>
                        <?if($arResult["PROPERTIES"]["OLD_PRICE"]["VALUE"]):?>
                            <span class="rates-list__slide-old-price"><?=$arResult["PROPERTIES"]["OLD_PRICE"]["VALUE"]?><span><?=$arResult["PROPERTIES"]["TARIFFING"]["VALUE"]?></span></span>
                        <?endif;?>
                    </div>
                    <button type="button" class="rates-info__preview-btn gl__main-btn js-open-send-request-modal mod-business" data-prise="<?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?>" data-tariff-name="<?=$arResult["NAME"]?>">Подключить</button>
                </div>
            </div>
            <!--<div class="rates-info__additional">
                <div class="rates-info__title">Дополнительные опции</div>
                <div class="rates-info__b-additional-text">
                    <div class="rates-info__b-subtitle">Заголовок</div>
                    <p>Все услуги связи в одном тарифе. Интернет для бизнеса, корпоративная мобильная связь и телефония.</p>
                </div>
                <div class="rates-info__b-subtitle">Заголовок</div>
                <ul class="rates-info__b-additional-list">
                    <li class="rates-info__b-additional-item">
                        <span class="rates-info__b-additional-item-text">Бронирование телефонного номера, абонентской линии по заявлению абонента на срокне более 3 месяцев</span>
                        <span class="rates-info__b-additional-item-price">288 ₽/мес.</span>
                    </li>
                    <li class="rates-info__b-additional-item">
                        <span class="rates-info__b-additional-item-text">Постоянный запрет исходящей связи по заявлению абонента (услуга предоставляется при наличии технической возможности)</span>
                        <span class="rates-info__b-additional-item-price">52,80 ₽</span>
                    </li>
                    <li class="rates-info__b-additional-item">
                        <span class="rates-info__b-additional-item-text">Обеспечение постоянного ограничения исходящей МГ или МН телефонной связи</span>
                        <span class="rates-info__b-additional-item-price">50,40 ₽/мес.</span>
                    </li>
                </ul>
                <div class="rates-info__b-additional-text">
                    <div class="rates-info__b-subtitle">Заголовок</div>
                    <p>Все услуги связи в одном тарифе. Интернет для бизнеса, корпоративная мобильная связь и телефония.</p>
                </div>
            </div>-->
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