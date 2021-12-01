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
<section class="rates-info" id="rates-mobile-info-host">
    <div class="gl__page-content">
        <h2 class="gl__title"><?=$arResult["NAME"]?></h2>

        <form class="rates-info__content" data-need-validation data-parsley-validate data-parsley-focus="none">
            <div class="rates-info__preview">
                <div class="rates-info__title">Включено в абонентскую плату:</div>

                <ul class="rates-info__preview-list">
                    <li class="rates-info__preview-item">
                        <div class="rates-info__preview-caption">Интернет</div>
                        <ul class="rates-info__preview-rows-list">
                            <li class="rates-info__preview-row">
                                <div class="rates-info__preview-rows-caption-wrapper">
                                    <div class="rates-info__preview-rows-caption">Мобильный интернет</div>
                                </div>
                                <div class="rates-info__preview-rows-caption-value">Безлимит</div>
                            </li>
                        </ul>
                    </li>
                    <li class="rates-info__preview-item">
                        <div class="rates-info__preview-caption">Звонки</div>
                        <ul class="rates-info__preview-rows-list">
                            <li class="rates-info__preview-row">
                                <div class="rates-info__preview-rows-caption-wrapper">
                                    <div class="rates-info__preview-rows-caption">Исходящие вызовы на мобильные и городские номера РТ (за исключением номеров «Летай»)</div>
                                </div>
                                <div class="rates-info__preview-rows-caption-value">500 мин./мес.</div>
                            </li>
                            <li class="rates-info__preview-row">
                                <div class="rates-info__preview-rows-caption-wrapper">
                                    <div class="rates-info__preview-rows-caption">Исходящие вызовы на мобильные и городские номера РФ</div>
                                </div>
                                <div class="rates-info__preview-rows-caption-value">300 мин./мес.</div>
                            </li>
                            <li class="rates-info__preview-row">
                                <div class="rates-info__preview-rows-caption-wrapper">
                                    <div class="rates-info__preview-rows-caption">Исходящие вызовы на номера оператора «Летай»</div>
                                </div>
                                <div class="rates-info__preview-rows-caption-value">Без ограничений</div>
                            </li>
                        </ul>
                    </li>
                    <li class="rates-info__preview-item">
                        <div class="rates-info__preview-caption">Сообщения</div>
                        <ul class="rates-info__preview-rows-list">
                            <li class="rates-info__preview-row">
                                <div class="rates-info__preview-rows-caption-wrapper">
                                    <div class="rates-info__preview-rows-caption">Исходящие SMS на номера мобильных операторов РТ (в том числе на номера оператора «Летай»)</div>
                                </div>
                                <div class="rates-info__preview-rows-caption-value">100 SMS/мес.</div>
                            </li>
                        </ul>
                    </li>
                    <li class="rates-info__preview-item">
                        <div class="rates-info__preview-caption">Дополнительно</div>
                        <ul class="rates-info__preview-rows-list">
                            <li class="rates-info__preview-row">
                                <div class="rates-info__preview-rows-caption-wrapper">
                                    <div class="rates-info__preview-rows-caption">Кэшбэк</div>
                                </div>
                                <div class="rates-info__preview-rows-caption-value">20%</div>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="rates-info__preview-bottom">
                    <div class="rates-info__preview-price-wrapper">
                        <span class="number"><?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?></span>₽/мес
                    </div>
                    <button type="button" class="rates-info__preview-btn gl__main-btn js-open-send-request-modal" data-prise="<?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?>" data-tariff-name="Включено в абонентскую плату:">Подключить</button>
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