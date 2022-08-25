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
<?if ($USER->IsAdmin()):?>
    <section class="rates-preview mod-gpon" id="rates-preview-host">
        <div class="gl__page-content rates-preview__content-wrapper">
            <div class="rates-preview__content mod-white-background">
                <div class="rates-preview__gpon-title"><?=$arResult["NAME"]?></div>
                <div class="rates-preview__gpon-subtitle"><?=$arResult["PROPERTIES"]["DESCRIPTION"]["VALUE"]?></div>
                <ul class="rates-preview__gpon-advantages-list">
                    <?foreach ($arResult["PROPERTIES"]["OPTIONS"]["VALUE"] as $arOption):?>
                        <li class="rates-preview__gpon-advantages-item">
                            <div class="rates-preview__gpon-advantages-item-caption"><?=$arOption["SUB_VALUES"]["OPTION_T"]["VALUE"]?></div>
                            <div class="rates-preview__gpon-advantages-item-value"><?=$arOption["SUB_VALUES"]["OPTION_V"]["VALUE"]?></div>
                        </li>
                    <?endforeach;?>
                </ul>

                <div class="rates-info__preview-bottom">
                    <button type="button" class="rates-preview__gpon-btn gl__main-btn rates-preview__btn js-open-send-request-modal" data-tariff-name="<?=$arResult["NAME"]?>">Подключить</button>
                    <div class="rates-info__preview-price-wrapper">
                        <span class="number"><?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?></span><?=$arResult["PROPERTIES"]["TARIFFING"]["VALUE"]?>
                        <?if($arResult["PROPERTIES"]["OLD_PRICE"]["VALUE"]):?>
                            <span class="rates-list__slide-old-price"><?=$arResult["PROPERTIES"]["OLD_PRICE"]["VALUE"]?><span><?=$arResult["PROPERTIES"]["TARIFFING"]["VALUE"]?>
                        <?endif;?>
                    </div>
                </div>
            </div>
            <div class="rates-preview__img-wrapper">
                <img src="<?=\Tattelecom\Core\Tools::resizeImage($arResult["PREVIEW_PICTURE"]["ID"], 750, 500, true)?>" alt="<?=$arResult["NAME"]?>" class="rates-preview__img">
            </div>
        </div>
    </section>

    <section class="b-colocation-rates gl__section">
        <div class="gl__page-content">
            <h2 class="gl__title">Включено в абонентскую плату:</h2>
            <ul class="b-colocation-rates__rates-container option-container">
                <?foreach ($arResult["CONDITIONS"] as $arConditions):?>
                    <li class="b-colocation-rates__rate">
                        <button type="button"
                                style="background-image: url(<?=\Tattelecom\Core\Tools::resizeImage($arConditions["PREVIEW_PICTURE"], 400, 180, true)?>);"
                                class="b-colocation-rates__btn gl__drop-menu-btn js-drop-menu-btn data-drop-menu-open">
                            <?=$arConditions["NAME"]?>
                            <svg width="24" height="24" aria-hidden="true" class="b-colocation-rates__btn-icon gl__drop-menu-icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg>
                        </button>
                        <div class="gl__drop-menu-container js-drop-menu-container">
                            <div class="option-rates__rate js-drop-menu b-colocation-rates__content-list">
                                <ul class="rates-info__preview-rows-list">
                                    <?foreach ($arConditions["PROPS"]["TERMS"]["VALUE"] as $arTerms):?>
                                        <li class="rates-info__preview-row rates-info__preview-row-option">
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
                            </div>
                        </div>
                    </li>
                <?endforeach;?>
            </ul>
        </div>
    </section>

<?else:?>
    <section class="rates-info" id="rates-mobile-info-host">
        <div class="gl__page-content">
            <h2 class="gl__title"><?=$arResult["NAME"]?></h2>

            <form class="rates-info__content" data-need-validation data-parsley-validate data-parsley-focus="none">
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
                                <span class="rates-list__slide-old-price"><?=$arResult["PROPERTIES"]["OLD_PRICE"]["VALUE"]?><span><?=$arResult["PROPERTIES"]["TARIFFING"]["VALUE"]?>
                            <?endif;?>
                        </div>
                        <button type="button" class="rates-info__preview-btn gl__main-btn js-open-send-request-modal" data-prise="<?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?>" data-tariff-name="<?=$arResult["NAME"]?>">Подключить</button>
                    </div>
                </div>

                <div class="rates-info__additional">
                    <!--<div class="rates-info__title">Дополнительные опции</div>
                    <div>
                        <div class="rates-info__subtitle">Безлимитный трафик</div>
                        <ul class="rates-info__additional-list">
                            <li class="rates-info__additional-item">
                                <div>
                                    <div class="rates-info__additional-caption">Соцсети</div>
                                    <div class="rates-info__additional-text">Вконтакте, Instagram, Facebook, Twitter и Одноклассники</div>
                                    <div class="rates-info__additional-apps-wrapper">
                                        <img src="img/common/apps/vk.svg" alt="" class="rates-info__additional-apps-img">
                                        <img src="img/common/apps/inst.svg" alt="" class="rates-info__additional-apps-img">
                                        <img src="img/common/apps/facebook.svg" alt="" class="rates-info__additional-apps-img">
                                        <img src="img/common/apps/twitter.svg" alt="" class="rates-info__additional-apps-img">
                                        <img src="img/common/apps/ok.svg" alt="" class="rates-info__additional-apps-img">
                                    </div>
                                </div>
                                <div class="rates-info__additional-control-wrapper">
                                    <div class="rates-info__additional-actual-price-wrapper">
                                        <div class="rates-info__additional-actual-price">50 ₽</div>
                                        <div class="rates-info__additional-old-price">60 ₽</div>
                                    </div>
                                    <div class="toggle">
                                        <label>
                                            <input type="checkbox" class="toggle__input" name="toggle-option-social-network" value="option-social-network">
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li class="rates-info__additional-item">
                                <div>
                                    <div class="rates-info__additional-caption">Мессенжеры</div>
                                    <div class="rates-info__additional-text">WhatsApp, Telegram, Viber, Discord, Skype и ICQ</div>
                                    <div class="rates-info__additional-apps-wrapper">
                                        <img src="img/common/apps/wp.svg" alt="" class="rates-info__additional-apps-img">
                                        <img src="img/common/apps/telegram.svg" alt="" class="rates-info__additional-apps-img">
                                        <img src="img/common/apps/viber.svg" alt="" class="rates-info__additional-apps-img">
                                        <img src="img/common/apps/discord.svg" alt="" class="rates-info__additional-apps-img">
                                        <img src="img/common/apps/skype.svg" alt="" class="rates-info__additional-apps-img">
                                        <img src="img/common/apps/icq.svg" alt="" class="rates-info__additional-apps-img">
                                    </div>
                                </div>
                                <div class="rates-info__additional-control-wrapper">
                                    <div class="rates-info__additional-actual-price-wrapper">
                                        <div class="rates-info__additional-actual-price">Бесплатно</div>
                                    </div>
                                    <div class="toggle">
                                        <label>
                                            <input type="checkbox" class="toggle__input" name="toggle-option-messengers" value="option-messengers">
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li class="rates-info__additional-item">
                                <div>
                                    <div class="rates-info__additional-caption">Развлечения</div>
                                    <div class="rates-info__additional-text">YouTube, Twitch и TikTok</div>
                                    <div class="rates-info__additional-apps-wrapper">
                                        <img src="img/common/apps/youTube.svg" alt="" class="rates-info__additional-apps-img">
                                        <img src="img/common/apps/twitch.svg" alt="" class="rates-info__additional-apps-img">
                                        <img src="img/common/apps/tikTok.svg" alt="" class="rates-info__additional-apps-img">
                                    </div>
                                </div>
                                <div class="rates-info__additional-control-wrapper">
                                    <div class="rates-info__additional-actual-price-wrapper">
                                        <div class="rates-info__additional-actual-price">85 ₽</div>
                                        <div class="rates-info__additional-old-price">100 ₽</div>
                                    </div>
                                    <div class="toggle">
                                        <label>
                                            <input type="checkbox" class="toggle__input" name="toggle-option-entertainments" value="option-entertainments">
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>-->
                </div>
            </form>
        </div>
    </section>
<?endif;?>
<?foreach($arResult["PROPERTIES"]["NOTES"]["VALUE"] as $arNote):?>
    <section class="info-drop-menu">
        <div class="gl__page-content">
            <button type="button" class="info-drop-menu__title gl__drop-menu-btn js-drop-menu-btn">
                <svg width="16" height="16" aria-hidden="true" class="info-drop-menu__title-icon gl__drop-menu-icon">
                    <use xlink:href="#arrow-down"></use>
                </svg><?=$arNote["SUB_VALUES"]["NOTES_T"]["VALUE"]?>
            </button>
            <div class="gl__drop-menu-container js-drop-menu-container">
                <div class="gl__drop-menu js-drop-menu">
                    <div class="gl__text">
                        <?=$arNote["SUB_VALUES"]["NOTES_V"]["~VALUE"]["TEXT"]?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?endforeach;?>