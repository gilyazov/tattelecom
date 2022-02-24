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
<?if($arParams["USE_RSS"]=="Y"):?>
	<?
	if(method_exists($APPLICATION, 'addheadstring'))
		$APPLICATION->AddHeadString('<link rel="alternate" type="application/rss+xml" title="'.$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["rss"].'" href="'.$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["rss"].'" />');
	?>
	<a href="<?=$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["rss"]?>" title="rss" target="_self"><img alt="RSS" src="<?=$templateFolder?>/images/gif-light/feed-icon-16x16.gif" border="0" align="right" /></a>
<?endif?>
<?if($arParams["USE_SEARCH"]=="Y"):?>
    <?=GetMessage("SEARCH_LABEL")?><?$APPLICATION->IncludeComponent(
	"bitrix:search.form",
	"flat",
	Array(
		"PAGE" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["search"]
	),
	$component
);?>
<?endif?>
<?if($arParams["USE_FILTER"]=="Y"):?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:catalog.filter",
        "",
        Array(
            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
            "FILTER_NAME" => $arParams["FILTER_NAME"],
            "FIELD_CODE" => $arParams["FILTER_FIELD_CODE"],
            "PROPERTY_CODE" => $arParams["FILTER_PROPERTY_CODE"],
            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
            "CACHE_TIME" => $arParams["CACHE_TIME"],
            "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
            "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
        ),
        $component
    );
    ?>
<?endif?>

<section class="b-page-banner mobile-version-available">
    <div class="gl__page-content">
        <h2 class="gl__title"><?$APPLICATION->ShowTitle()?></h2>

        <div class="b-page-banner__content">
            <picture>
                <source srcset="<?=BUILD_PATH?>img/common/b-page-banners/b-rates-mobile-internet-list--mobile.jpg" media="(max-width: 768px)">
                <img class="b-page-banner__image" src="<?=BUILD_PATH?>img/common/b-page-banners/b-rates-mobile-internet-list.jpg" alt="Мобильный интернет">
            </picture>
            <div class="b-page-banner__text">
                <div>
                    <h3 class="b-page-banner__title white">
                        <span class="b-page-banner__mobile-title">Тарифы
                            <br>мобильного
                            <br>интернета
                        </span>
                        <span class="b-page-banner__accent-title">Быстрый интернет</span>
                        <span class="b-page-banner__desktop-title">вне офиса</span>
                    </h3>
                </div>
                <div class="b-page-banner__cost-block">
                    <span class="b-page-banner__cost-label">от</span>
                    <div class="b-page-banner__cost-bottom">
                        <span class="b-page-banner__cost">250</span>
                        <span class="b-page-banner__cost-label">₽/мес.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?
global $arrFilterCity;
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"",
	Array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"NEWS_COUNT" => $arParams["NEWS_COUNT"],
		"SORT_BY1" => $arParams["SORT_BY1"],
		"SORT_ORDER1" => $arParams["SORT_ORDER1"],
		"SORT_BY2" => $arParams["SORT_BY2"],
		"SORT_ORDER2" => $arParams["SORT_ORDER2"],
		"FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
		"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
		"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
		"SET_TITLE" => $arParams["SET_TITLE"],
		"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
		"MESSAGE_404" => $arParams["MESSAGE_404"],
		"SET_STATUS_404" => $arParams["SET_STATUS_404"],
		"SHOW_404" => $arParams["SHOW_404"],
		"FILE_404" => $arParams["FILE_404"],
		"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_FILTER" => $arParams["CACHE_FILTER"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
		"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
		"PAGER_TITLE" => $arParams["PAGER_TITLE"],
		"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
		"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
		"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
		"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
		"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
		"PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
		"PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
		"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
		"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
		"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
		"PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
		"ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
		"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
		"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
        "FILTER_NAME" => "arrFilterCity",
		"HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
		"CHECK_DATES" => $arParams["CHECK_DATES"],
	),
	$component
);?>
<section class="b-steps gl__section">
    <div class="gl__page-content">
        <h2 class="gl__title">Как подключиться?</h2>
        <ul class="b-steps__list">
            <li class="b-steps__item">
                <span class="b-steps__item-num">1</span>
                <p class="b-steps__item-description">Оставьте заявку, позвоните по телефону (843) 238-00-00 или обратитесь в офис продаж</p>
            </li>
            <li class="b-steps__item">
                <span class="b-steps__item-num">2</span>
                <p class="b-steps__item-description">Дождитесь специалиста по подключению</p>
            </li>
            <li class="b-steps__item">
                <span class="b-steps__item-num">3</span>
                <p class="b-steps__item-description">Начните пользоваться услугами сразу после подключения</p>
            </li>
        </ul>
    </div>
</section>
<section class="b-request-for-connection gl__section">
    <div class="gl__page-content">
        <div class="b-request-for-connection__content">
            <h3 class="b-request-for-connection__form-title">Оставить заявку на подключение</h3>
            <span class="b-request-for-connection__form-label">Наши специалисты помогут подобрать решения, отталкиваясь от ваших бизнес-потребностей</span>
            <form data-need-validation data-parsley-validate data-parsley-focus="none" class="b-request-for-connection__form mod-4-in-row">
                <label class="gl-input__wrapper js-input-text">
                    <input type="text" class="gl-input__input" placeholder="Ваше имя" name="application-consultation-name" data-parsley-required="">
                </label>
                <label class="gl-input__wrapper js-input-tel">
                    <input type="tel" class="gl-input__input js-phone-mask" placeholder="+7 (___) ___-__-__" name="application-consultation-tel" data-parsley-required="">
                </label>
                <label class="gl-input__wrapper js-input-email">
                    <input type="email" class="gl-input__input" placeholder="E-mail" name="application-consultation-email" data-parsley-required="">
                </label>
                <button type="submit" class="gl__main-btn">Продолжить</button>
            </form>
        </div>
    </div>
</section>
<section class="b-additional-services gl__section">
    <div class="gl__page-content">
        <div class="b-additional-services__content">
            <h2 class="gl__title">Дополнительные услуги</h2>
            <ul class="b-additional-services__list">
                <li class="b-additional-services__item">
                    <ul class="b-additional-services__content-list">
                        <li class="b-additional-services__content-item">
                            <div class="b-additional-services__content-item-name-container">
                                <span class="b-additional-services__content-item-name">Запрет роуминга</span>
                                <div class="btn-info__container">
                                    <button type="button" class="btn-info__btn">
                                        <svg width="24" height="24" aria-hidden="true" class="btn-info__icon">
                                            <use xlink:href="#info-ellipse"></use>
                                        </svg>
                                    </button>
                                    <div class="btn-info__content">Запрет роуминга</div>
                                </div>
                            </div>
                            <span class="b-additional-services__content-item-cost">0 ₽</span>
                        </li>
                        <li class="b-additional-services__content-item">
                            <div class="b-additional-services__content-item-name-container">
                                <span class="b-additional-services__content-item-name">Запрет доступа к GPRS</span>
                                <div class="btn-info__container">
                                    <button type="button" class="btn-info__btn">
                                        <svg width="24" height="24" aria-hidden="true" class="btn-info__icon">
                                            <use xlink:href="#info-ellipse"></use>
                                        </svg>
                                    </button>
                                    <div class="btn-info__content">Запрет доступа к GPRS</div>
                                </div>
                            </div>
                            <span class="b-additional-services__content-item-cost">0 ₽</span>
                        </li>
                        <li class="b-additional-services__content-item">
                            <div class="b-additional-services__content-item-name-container">
                                <span class="b-additional-services__content-item-name">Возможное приостановление услуг связи</span>
                                <div class="btn-info__container">
                                    <button type="button" class="btn-info__btn">
                                        <svg width="24" height="24" aria-hidden="true" class="btn-info__icon">
                                            <use xlink:href="#info-ellipse"></use>
                                        </svg>
                                    </button>
                                    <div class="btn-info__content">Возможное приостановление услуг связи</div>
                                </div>
                            </div>
                            <span class="b-additional-services__content-item-cost">0 ₽</span>
                        </li>
                        <li class="b-additional-services__content-item">
                            <div class="b-additional-services__content-item-name-container">
                                <span class="b-additional-services__content-item-name">Начало предоставления услуг на любом тарифном плане</span>
                                <div class="btn-info__container">
                                    <button type="button" class="btn-info__btn">
                                        <svg width="24" height="24" aria-hidden="true" class="btn-info__icon">
                                            <use xlink:href="#info-ellipse"></use>
                                        </svg>
                                    </button>
                                    <div class="btn-info__content">Начало предоставления услуг на любом тарифном плане</div>
                                </div>
                            </div>
                            <span class="b-additional-services__content-item-cost">0 ₽</span>
                        </li>
                        <li class="b-additional-services__content-item">
                            <div class="b-additional-services__content-item-name-container">
                                <span class="b-additional-services__content-item-name">Разблокирование SIM-карты</span>
                                <div class="btn-info__container">
                                    <button type="button" class="btn-info__btn">
                                        <svg width="24" height="24" aria-hidden="true" class="btn-info__icon">
                                            <use xlink:href="#info-ellipse"></use>
                                        </svg>
                                    </button>
                                    <div class="btn-info__content">Разблокирование SIM-карты</div>
                                </div>
                            </div>
                            <span class="b-additional-services__content-item-cost">0 ₽</span>
                        </li>
                        <li class="b-additional-services__content-item">
                            <div class="b-additional-services__content-item-name-container">
                                <span class="b-additional-services__content-item-name">Замена SIM-карты</span>
                                <div class="btn-info__container">
                                    <button type="button" class="btn-info__btn">
                                        <svg width="24" height="24" aria-hidden="true" class="btn-info__icon">
                                            <use xlink:href="#info-ellipse"></use>
                                        </svg>
                                    </button>
                                    <div class="btn-info__content">Замена SIM-карты</div>
                                </div>
                            </div>
                            <span class="b-additional-services__content-item-cost">0 ₽</span>
                        </li>
                        <li class="b-additional-services__content-item">
                            <div class="b-additional-services__content-item-name-container">
                                <span class="b-additional-services__content-item-name">Замена nano SIM-карты</span>
                                <div class="btn-info__container">
                                    <button type="button" class="btn-info__btn">
                                        <svg width="24" height="24" aria-hidden="true" class="btn-info__icon">
                                            <use xlink:href="#info-ellipse"></use>
                                        </svg>
                                    </button>
                                    <div class="btn-info__content">Замена nano SIM-карты</div>
                                </div>
                            </div>
                            <span class="b-additional-services__content-item-cost">0 ₽</span>
                        </li>
                        <li class="b-additional-services__content-item">
                            <div class="b-additional-services__content-item-name-container">
                                <span class="b-additional-services__content-item-name">Переоформление Договора на другое лицо</span>
                                <div class="btn-info__container">
                                    <button type="button" class="btn-info__btn">
                                        <svg width="24" height="24" aria-hidden="true" class="btn-info__icon">
                                            <use xlink:href="#info-ellipse"></use>
                                        </svg>
                                    </button>
                                    <div class="btn-info__content">Переоформление Договора на другое лицо</div>
                                </div>
                            </div>
                            <span class="b-additional-services__content-item-cost">0 ₽</span>
                        </li>
                        <li class="b-additional-services__content-item">
                            <div class="b-additional-services__content-item-name-container">
                                <span class="b-additional-services__content-item-name">Индивидуальная настройка оборудования для передачи данных</span>
                                <div class="btn-info__container">
                                    <button type="button" class="btn-info__btn">
                                        <svg width="24" height="24" aria-hidden="true" class="btn-info__icon">
                                            <use xlink:href="#info-ellipse"></use>
                                        </svg>
                                    </button>
                                    <div class="btn-info__content">Индивидуальная настройка оборудования для передачи данных</div>
                                </div>
                            </div>
                            <span class="b-additional-services__content-item-cost">0 ₽</span>
                        </li>
                        <li class="b-additional-services__content-item">
                            <div class="b-additional-services__content-item-name-container">
                                <span class="b-additional-services__content-item-name">Индивидуальная настройка услуг GPRS/4G</span>
                                <div class="btn-info__container">
                                    <button type="button" class="btn-info__btn">
                                        <svg width="24" height="24" aria-hidden="true" class="btn-info__icon">
                                            <use xlink:href="#info-ellipse"></use>
                                        </svg>
                                    </button>
                                    <div class="btn-info__content">Индивидуальная настройка услуг GPRS/4G</div>
                                </div>
                            </div>
                            <span class="b-additional-services__content-item-cost">0 ₽</span>
                        </li>
                        <li class="b-additional-services__content-item">
                            <div class="b-additional-services__content-item-name-container">
                                <span class="b-additional-services__content-item-name">Разовая расшифровка счета на бумажном носителе на период до 1 календарного месяца</span>
                                <div class="btn-info__container">
                                    <button type="button" class="btn-info__btn">
                                        <svg width="24" height="24" aria-hidden="true" class="btn-info__icon">
                                            <use xlink:href="#info-ellipse"></use>
                                        </svg>
                                    </button>
                                    <div class="btn-info__content">Разовая расшифровка счета на бумажном носителе на период до 1 календарного месяца</div>
                                </div>
                            </div>
                            <span class="b-additional-services__content-item-cost">0 ₽</span>
                        </li>
                        <li class="b-additional-services__content-item">
                            <div class="b-additional-services__content-item-name-container">
                                <span class="b-additional-services__content-item-name">Отправка расшифровки счета по e-mail</span>
                                <div class="btn-info__container">
                                    <button type="button" class="btn-info__btn">
                                        <svg width="24" height="24" aria-hidden="true" class="btn-info__icon">
                                            <use xlink:href="#info-ellipse"></use>
                                        </svg>
                                    </button>
                                    <div class="btn-info__content">Отправка расшифровки счета по e-mail</div>
                                </div>
                            </div>
                            <span class="b-additional-services__content-item-cost">0 ₽</span>
                        </li>
                        <li class="b-additional-services__content-item">
                            <div class="b-additional-services__content-item-name-container">
                                <span class="b-additional-services__content-item-name">Добровольная блокировка по инициативе абонента, в месяц</span>
                                <div class="btn-info__container">
                                    <button type="button" class="btn-info__btn">
                                        <svg width="24" height="24" aria-hidden="true" class="btn-info__icon">
                                            <use xlink:href="#info-ellipse"></use>
                                        </svg>
                                    </button>
                                    <div class="btn-info__content">Добровольная блокировка по инициативе абонента, в месяц</div>
                                </div>
                            </div>
                            <span class="b-additional-services__content-item-cost">0 ₽</span>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="services b-services">
    <div class="gl__page-content">
        <ul class="services__list">
            <li class="services__item-wrapper gl__white-container">
                <div class="services__item-info-container">
                    <div class="services__item-info-content">
                        <h3 class="services__item-info-title">Выбирайте красивые номера</h3>
                        <div class="services__item-info-text">Бронзовый,Серебрянный, Золотой, Бриллиантовый</div>
                        <button type="button" class="services__item-info-btn">
                            <span class="services__item-info-btn-text">Подобрать</span>
                            <svg width="40" height="40" aria-hidden="true" class="services__item-info-btn-icon">
                                <use xlink:href="#arrow-line-right"></use>
                            </svg>
                        </button>
                    </div>
                    <img src="<?=BUILD_PATH?>img/main-page/services/ellipse-image-2.svg" alt="" class="services__item-info-image">
                </div>
            </li>
            <li class="services__item-wrapper gl__white-container mod-painted">
                <h3 class="services__item-info-title">Переходите со своим номером</h3>
                <span class="b-services__accent-label">бесплатно</span>
                <form class="services__form-wrapper" data-need-validation data-parsley-validate data-parsley-focus="none">
                    <div class="services__form-inputs-wrapper">
                        <label class="gl-input__wrapper js-input-tel">
                            <span class="gl-input__title">Введите номер переноса</span>
                            <input type="tel" class="gl-input__input js-phone-mask" placeholder="+7 (___) ___-__-__" name="services-tel-transfer" data-parsley-required="">
                        </label>
                        <div class="services__btn-submit-wrapper">
                            <button type="submit" class="gl__main-btn mod-transparent services__btn-submit">Начать перенос</button>
                        </div>
                    </div>
                    <div class="services__checkbox">
                        <label class="checkbox__wrapper">
                            <input type="checkbox" class="checkbox" name="services-approval" data-parsley-required="">
                            <span class="checkbox__content mod-business">
												<svg width="16" height="16" aria-hidden="true" class="checkbox__content-icon">
													<use xlink:href="#checkbox-checked"></use>
												</svg>
											</span>
                            <span class="checkbox__text mod-main">Я соглашаюсь на получение консультации по переносу номера</span>
                        </label>
                    </div>
                </form>
            </li>
        </ul>
    </div>
</section>
<section class="b-useful-articles gl__section">
    <div class="gl__page-content">
        <h2 class="gl__title">Полезные статьи для бизнеса</h2>
        <div class="b-useful-articles__content">
            <div class="gl-slider js-swiper" data-swiper-slides-preview="3">
                <div class="gl__bg-hide">
                    <button type="button" class="gl-slider__slider-btn mod-prev gl__no-default-hover js-slider-btn-prev gl-slider__b-slider-btn">
                        <svg class="gl-slider__slider-btn-icon" width="26" height="26" aria-hidden="true">
                            <use xlink:href="#arrow-left"></use>
                        </svg>
                    </button>
                    <button type="button" class="gl-slider__slider-btn mod-next gl__no-default-hover js-slider-btn-next gl-slider__b-slider-btn">
                        <svg class="gl-slider__slider-btn-icon" width="26" height="26" aria-hidden="true">
                            <use xlink:href="#arrow-right"></use>
                        </svg>
                    </button>
                </div>
                <div class="gl-slider__b-container gl-slider__container swiper-container js-swiper-container">
                    <ul class="gl-slider__wrapper swiper-wrapper" id="js-align-heights">
                        <li class="swiper-slide">
                            <a href="" class="b-useful-article gl__no-default-hover rates-list__slide">
                                <img class="b-useful-article__image" src="<?=BUILD_PATH?>img/common/b-useful-articles/useful-article-1.jpg" alt="Название статьи">
                                <div class="b-useful-article__overlay"></div>
                                <h3 class="b-useful-article__title">Название статьи</h3>
                                <p class="b-useful-article__description">Краткое описание в 2-3 строчки о сути статьи, Краткое описание в 2-3 строчки о сути статьи.</p>
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a href="" class="b-useful-article gl__no-default-hover rates-list__slide">
                                <img class="b-useful-article__image" src="<?=BUILD_PATH?>img/common/b-useful-articles/useful-article-2.jpg" alt="Название статьи">
                                <div class="b-useful-article__overlay"></div>
                                <h3 class="b-useful-article__title">Название статьи</h3>
                                <p class="b-useful-article__description">Краткое описание в 2-3 строчки b о сути статьи, Краткое описание в 2-3 строчки о сути статьи.</p>
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a href="" class="b-useful-article gl__no-default-hover rates-list__slide">
                                <img class="b-useful-article__image" src="<?=BUILD_PATH?>img/common/b-useful-articles/useful-article-3.jpg" alt="Название статьи">
                                <div class="b-useful-article__overlay"></div>
                                <h3 class="b-useful-article__title">Название статьи</h3>
                                <p class="b-useful-article__description">Краткое описание в 2-3 строчки о сути статьи, Краткое описание в 2-3 строчки о сути статьи.</p>
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a href="" class="b-useful-article gl__no-default-hover rates-list__slide">
                                <img class="b-useful-article__image" src="<?=BUILD_PATH?>img/common/b-useful-articles/useful-article-4.jpg" alt="Название статьи">
                                <div class="b-useful-article__overlay"></div>
                                <h3 class="b-useful-article__title">Название статьи</h3>
                                <p class="b-useful-article__description">Краткое описание в 2-3 строчки о сути статьи, Краткое описание в 2-3 строчки о сути статьи.</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="faq" id="faq-host">
    <div class="gl__page-content">
        <h2 class="gl__title">Вопросы и ответы</h2>
        <ul class="faq__list-wrapper"></ul>
        <a href="/support/faq/" class="faq__link-show-all">Все вопросы и ответы<svg width="20" height="20" aria-hidden="true" class="faq__link-show-all-icon">
                <use xlink:href="#arrow-right"></use>
            </svg>
        </a>
    </div>
</section>
<section class="b-support gl__section">
    <div class="gl__page-content">
        <div class="b-support__content">
            <div class="b-support__block b-support__form-block">
                <h3 class="b-support__form-title">Хотите узнать больше?</h3>
                <span class="b-support__form-label">Наши специалисты помогут подобрать решения, отталкиваясь от ваших бизнес-потребностей</span>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:iblock.element.add.form",
                    "b-support__form",
                    Array(
                        "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
                        "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
                        "CUSTOM_TITLE_DETAIL_PICTURE" => "",
                        "CUSTOM_TITLE_DETAIL_TEXT" => "",
                        "CUSTOM_TITLE_IBLOCK_SECTION" => "",
                        "CUSTOM_TITLE_NAME" => "Ваше имя",
                        "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
                        "CUSTOM_TITLE_PREVIEW_TEXT" => "",
                        "CUSTOM_TITLE_TAGS" => "",
                        "DEFAULT_INPUT_SIZE" => "30",
                        "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
                        "ELEMENT_ASSOC" => "CREATED_BY",
                        "GROUPS" => array("2"),
                        "IBLOCK_ID" => "45",
                        "IBLOCK_TYPE" => "buisness",
                        "LEVEL_LAST" => "Y",
                        "LIST_URL" => "",
                        "MAX_FILE_SIZE" => "0",
                        "MAX_LEVELS" => "100000",
                        "MAX_USER_ENTRIES" => "100000",
                        "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
                        "PROPERTY_CODES" => array("NAME", "174"),
                        "PROPERTY_CODES_REQUIRED" => ["NAME", "174"],
                        "RESIZE_IMAGES" => "N",
                        "SEF_MODE" => "N",
                        "STATUS" => "ANY",
                        "STATUS_NEW" => "N",
                        "USER_MESSAGE_ADD" => "",
                        "USER_MESSAGE_EDIT" => "",
                        "USE_CAPTCHA" => "N"
                    )
                );?>
            </div>
            <div class="b-support__block b-support__contacts-block">
                <div>
                    <h3 class="b-support__contacts-title">Служба поддержки</h3>
                    <span class="b-support__contacts-label">Для оперативной связи со службой поддержки обращайтесь одним из удобных способов</span>
                    <a class="b-support__contacts-tel" title="Позвонить" href="tel:+78432222222">(843) 238-00-00</a>
                    <ul class="b-socials">
                        <li class="b-socials__item">
                            <a class="b-socials__link" title="Написать в Whatsapp" href="#">
												<span class="b-socials__link-content whatsapp">
													<svg width="22" height="22" aria-hidden="true" class="b-socials__link-icon">
														<use xlink:href="#soc-whatsapp"></use>
													</svg>
												</span>
                            </a>
                        </li>
                        <li class="b-socials__item">
                            <a class="b-socials__link" title="Написать в Telegram" href="#">
												<span class="b-socials__link-content telegram">
													<svg width="22" height="20" aria-hidden="true" class="b-socials__link-icon">
														<use xlink:href="#soc-telegram"></use>
													</svg>
												</span>
                            </a>
                        </li>
                        <li class="b-socials__item">
                            <a class="b-socials__link" title="Написать в VK" href="#">
												<span class="b-socials__link-content vk">
													<svg width="26" height="16" aria-hidden="true" class="b-socials__link-icon">
														<use xlink:href="#soc-vk"></use>
													</svg>
												</span>
                            </a>
                        </li>
                        <li class="b-socials__item">
                            <a class="b-socials__link" title="Написать в Facebook" href="#">
												<span class="b-socials__link-content facebook">
													<svg width="10" height="22" aria-hidden="true" class="b-socials__link-icon">
														<use xlink:href="#soc-facebook"></use>
													</svg>
												</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>