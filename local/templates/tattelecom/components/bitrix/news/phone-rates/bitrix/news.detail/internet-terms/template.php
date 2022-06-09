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
$this->addExternalJS(BUILD_PATH . "js/rates-internet-item-page.js");
?>
<div class="rates-internet-application__info-form-wrapper">
    <form class="rates-info__content" data-need-validation data-parsley-validate data-parsley-focus="none">
        <div class="rates-info__preview">

            <div class="rates-info__title"><?=($arResult["PROPERTIES"]["TITLE"]["VALUE"] ?: "Условия тарифного плана");?></div>
            <?if($arResult["PROPERTIES"]["TERMS"]["VALUE"]):?>
                <ul class="rates-info__preview-list">
                    <?foreach($arResult["PROPERTIES"]["TERMS"]["VALUE"] as $arTerm):?>
                        <li class="rates-info__preview-item">
                            <ul class="rates-info__preview-rows-list">
                                <li class="rates-info__preview-row">
                                    <div class="rates-info__preview-rows-caption-wrapper">
                                        <div class="rates-info__preview-rows-caption">
                                            <span><?=$arTerm["SUB_VALUES"]["TERMS_T"]["VALUE"]?></span>
                                        </div>
                                    </div>
                                    <div class="rates-info__preview-rows-caption-value"><?=$arTerm["SUB_VALUES"]["TERMS_V"]["VALUE"]?></div>
                                </li>
                            </ul>
                        </li>
                    <?endforeach;?>
                </ul>
            <?endif;?>
            <?=$arResult["~DETAIL_TEXT"]?>
            <?if($arResult["PROPERTIES"]["PRICE"]["VALUE"]):?>
                <div class="rates-info__preview-bottom">
                    <div class="rates-info__preview-price-wrapper">
                        <span class="number"><?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?></span>₽/мес
                        <?if($arResult["PROPERTIES"]["OLD_PRICE"]["VALUE"]):?>
                            <span class="rates-list__slide-old-price"><?=$arResult["PROPERTIES"]["OLD_PRICE"]["VALUE"]?><span>₽/мес
                        <?endif;?>
                    </div>
                    <button type="button" class="rates-info__preview-btn gl__main-btn js-open-send-request-modal" data-prise="<?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?>" data-tariff-name="<?=$arResult["NAME"]?>">Подключить</button>
                </div>
            <?endif;?>
        </div>

        <div class="rates-info__additional">
            <div class="rates-info__title"><?=$arResult["PROPERTIES"]["FILE_TITLE"]["VALUE"]?></div>

            <?foreach ($arResult["CONDITIONS"] as $arCondition):?>
                <div class="rates-info__b-subtitle"><?=$arCondition["NAME"]?></div>

                <div class="rates-info__b-additional-text">
                    <?foreach ($arCondition["PROPS"]["FILES"]["VALUE"] as $file):?>
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
            <?endforeach;?>
        </div>
    </form>

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