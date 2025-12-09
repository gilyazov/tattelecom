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
$this->addExternalJS(BUILD_PATH . 'js/mobile-communication-page.js');
?>
<?if(in_array($arParams['IBLOCK_ID'], [17, 30])):?>
    <section class="rates-info" id="rates-mobile-info-host">
        <div class="gl__page-content">
            <h1 class="gl__title"><?$APPLICATION->ShowTitle(false)?></h1>

            <?$APPLICATION->IncludeComponent(
                "tattelecom:internet.connect",
                "",
                [],
                false
            );?>

            <?$ElementID = $APPLICATION->IncludeComponent(
                "bitrix:news.detail",
                "internet-terms",
                Array(
                    "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
                    "DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
                    "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
                    "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
                    "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                    "FIELD_CODE" => $arParams["DETAIL_FIELD_CODE"],
                    "PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
                    "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
                    "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
                    "META_KEYWORDS" => $arParams["META_KEYWORDS"],
                    "META_DESCRIPTION" => $arParams["META_DESCRIPTION"],
                    "BROWSER_TITLE" => $arParams["BROWSER_TITLE"],
                    "SET_CANONICAL_URL" => $arParams["DETAIL_SET_CANONICAL_URL"],
                    "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
                    "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
                    "SET_TITLE" => $arParams["SET_TITLE"],
                    "MESSAGE_404" => $arParams["MESSAGE_404"],
                    "SET_STATUS_404" => $arParams["SET_STATUS_404"],
                    "SHOW_404" => $arParams["SHOW_404"],
                    "FILE_404" => $arParams["FILE_404"],
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "ACTIVE_DATE_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
                    "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                    "CACHE_TIME" => $arParams["CACHE_TIME"],
                    "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                    "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
                    "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
                    "DISPLAY_TOP_PAGER" => $arParams["DETAIL_DISPLAY_TOP_PAGER"],
                    "DISPLAY_BOTTOM_PAGER" => $arParams["DETAIL_DISPLAY_BOTTOM_PAGER"],
                    "PAGER_TITLE" => $arParams["DETAIL_PAGER_TITLE"],
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => $arParams["DETAIL_PAGER_TEMPLATE"],
                    "PAGER_SHOW_ALL" => $arParams["DETAIL_PAGER_SHOW_ALL"],
                    "CHECK_DATES" => $arParams["CHECK_DATES"],
                    "ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
                    "ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
                    "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
                    "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
                    "IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
                    "USE_SHARE" => $arParams["USE_SHARE"],
                    "SHARE_HIDE" => $arParams["SHARE_HIDE"],
                    "SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
                    "SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
                    "SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
                    "SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
                    "ADD_ELEMENT_CHAIN" => "N",
                    'STRICT_SECTION_CHECK' => (isset($arParams['STRICT_SECTION_CHECK']) ? $arParams['STRICT_SECTION_CHECK'] : ''),
                ),
                $component
            );?>
        </div>
    </section>
<?endif;?>

<?$ElementID = $APPLICATION->IncludeComponent(
	"bitrix:news.detail",
    (in_array($arParams['IBLOCK_ID'], [6, 65]) ? "" : "internet"),
	Array(
		"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
		"DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
		"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
		"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"FIELD_CODE" => $arParams["DETAIL_FIELD_CODE"],
		"PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"META_KEYWORDS" => $arParams["META_KEYWORDS"],
		"META_DESCRIPTION" => $arParams["META_DESCRIPTION"],
		"BROWSER_TITLE" => $arParams["BROWSER_TITLE"],
		"SET_CANONICAL_URL" => $arParams["DETAIL_SET_CANONICAL_URL"],
		"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
		"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
		"SET_TITLE" => $arParams["SET_TITLE"],
		"MESSAGE_404" => $arParams["MESSAGE_404"],
		"SET_STATUS_404" => $arParams["SET_STATUS_404"],
		"SHOW_404" => $arParams["SHOW_404"],
		"FILE_404" => $arParams["FILE_404"],
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
		"ACTIVE_DATE_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
		"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
		"DISPLAY_TOP_PAGER" => $arParams["DETAIL_DISPLAY_TOP_PAGER"],
		"DISPLAY_BOTTOM_PAGER" => $arParams["DETAIL_DISPLAY_BOTTOM_PAGER"],
		"PAGER_TITLE" => $arParams["DETAIL_PAGER_TITLE"],
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => $arParams["DETAIL_PAGER_TEMPLATE"],
		"PAGER_SHOW_ALL" => $arParams["DETAIL_PAGER_SHOW_ALL"],
		"CHECK_DATES" => $arParams["CHECK_DATES"],
		"ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
		"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
		"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
		"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
		"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
		"USE_SHARE" => $arParams["USE_SHARE"],
		"SHARE_HIDE" => $arParams["SHARE_HIDE"],
		"SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
		"SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
		"SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
		"SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
		"ADD_ELEMENT_CHAIN" => (isset($arParams["ADD_ELEMENT_CHAIN"]) ? $arParams["ADD_ELEMENT_CHAIN"] : ''),
		'STRICT_SECTION_CHECK' => (isset($arParams['STRICT_SECTION_CHECK']) ? $arParams['STRICT_SECTION_CHECK'] : ''),
	),
	$component
);?>

<?if($arParams['IBLOCK_ID'] == 6):?>
    <?
    global $arrFilterCity;
    $arrFilterCity[0][1] = [
        "!ID" => \CIBlockElement::SubQuery(
            "ID",
            array(
                "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                "PROPERTY_EXCLUDE_CITY" => $_SESSION['city']['id'],
            )
        )
    ];
    $res = CIBlockElement::GetByID($ElementID);
    if($arElement = $res->GetNext()) {
        $arrFilterCity[] = ["!ID" => $ElementID, "SECTION_ID" => $arElement["IBLOCK_SECTION_ID"]];
    }

    $count = CIBlockElement::GetList(
        array(), // Сортировка
        array_merge(array('IBLOCK_ID' => $arParams["IBLOCK_ID"], "ACTIVE" => "Y"), $arrFilterCity), // Фильтр
        array(), // Группировка,
        false,
        array('ID', 'NAME')
    );
    ?>

    <?if($count > 0):?>
        <section class="rates-list" id="rates-list-host">
            <div class="gl__page-content">
                <div class="gl__title-head">
                    <h2 class="gl__title">Рекомендуемые тарифы</h2>
                </div>

                <?$APPLICATION->IncludeComponent("tattelecom:rates.list", "gl-slider-rates", Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"], // Тип информационного блока (используется только для проверки)
                    "IBLOCK_ID" => $arParams["IBLOCK_ID"], // Код информационного блока
                    "NEWS_COUNT" => "20",   // Количество новостей на странице
                    "SORT_BY1" => "SORT",   // Поле для первой сортировки новостей
                    "SORT_ORDER1" => "ASC", // Направление для первой сортировки новостей
                    "SORT_BY2" => "ACTIVE_FROM",    // Поле для второй сортировки новостей
                    "SORT_ORDER2" => "DESC",    // Направление для второй сортировки новостей
                    "FILTER_NAME" => "arrFilterCity",    // Фильтр
                    "FIELD_CODE" => array(  // Поля
                        0 => "",
                        1 => "",
                    ),
                    "PROPERTY_CODE" => array(   // Свойства
                        0 => "SUBTITLE",
                        1 => "",
                    ),
                    "CHECK_DATES" => "Y",   // Показывать только активные на данный момент элементы
                    "DETAIL_URL" => "", // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                    "AJAX_MODE" => "N", // Включить режим AJAX
                    "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
                    "AJAX_OPTION_STYLE" => "Y", // Включить подгрузку стилей
                    "AJAX_OPTION_HISTORY" => "N",   // Включить эмуляцию навигации браузера
                    "AJAX_OPTION_ADDITIONAL" => "", // Дополнительный идентификатор
                    "CACHE_TYPE" => "A",    // Тип кеширования
                    "CACHE_TIME" => "36000000", // Время кеширования (сек.)
                    "CACHE_FILTER" => "N",  // Кешировать при установленном фильтре
                    "CACHE_GROUPS" => "Y",  // Учитывать права доступа
                    "PREVIEW_TRUNCATE_LEN" => "",   // Максимальная длина анонса для вывода (только для типа текст)
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                    "SET_TITLE" => "N", // Устанавливать заголовок страницы
                    "SET_BROWSER_TITLE" => "N", // Устанавливать заголовок окна браузера
                    "SET_META_KEYWORDS" => "N", // Устанавливать ключевые слова страницы
                    "SET_META_DESCRIPTION" => "N",  // Устанавливать описание страницы
                    "SET_LAST_MODIFIED" => "N", // Устанавливать в заголовках ответа время модификации страницы
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N", // Включать инфоблок в цепочку навигации
                    "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",  // Скрывать ссылку, если нет детального описания
                    "PARENT_SECTION" => "", // ID раздела
                    "PARENT_SECTION_CODE" => "",    // Код раздела
                    "INCLUDE_SUBSECTIONS" => "Y",   // Показывать элементы подразделов раздела
                    "STRICT_SECTION_CHECK" => "N",  // Строгая проверка раздела для показа списка
                    "DISPLAY_DATE" => "Y",  // Выводить дату элемента
                    "DISPLAY_NAME" => "Y",  // Выводить название элемента
                    "DISPLAY_PICTURE" => "Y",   // Выводить изображение для анонса
                    "DISPLAY_PREVIEW_TEXT" => "Y",  // Выводить текст анонса
                    "PAGER_TEMPLATE" => ".default", // Шаблон постраничной навигации
                    "DISPLAY_TOP_PAGER" => "N", // Выводить над списком
                    "DISPLAY_BOTTOM_PAGER" => "N",  // Выводить под списком
                    "PAGER_TITLE" => "Новости", // Название категорий
                    "PAGER_SHOW_ALWAYS" => "N", // Выводить всегда
                    "PAGER_DESC_NUMBERING" => "N",  // Использовать обратную навигацию
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",   // Время кеширования страниц для обратной навигации
                    "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                    "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                    "SET_STATUS_404" => "N",    // Устанавливать статус 404
                    "SHOW_404" => "N",  // Показ специальной страницы
                    "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                ),
                    false
                );?>
            </div>
        </section>
    <?endif;?>

<?endif;?>

<?if($arResult['VARIABLES']['SECTION_CODE'] == 'v-chastnyy-dom'): ?>
    <section class="gpon-map" id="gpon-map-host">
        <div class="gl__page-content">
            <h2 class="gl__title">Охватываем оптоволоконными сетями по технологии GPON многие поселки нашей республики</h2>

            <script data-skip-moving="true" type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac88ebf419e0626a25285ec5c475d1f6f21c87773223967c6a28a0ca39bb7a677&&width=100%&height=720&lang=ru_RU&scroll=true"></script>
        </div>
    </section>
<?endif;?>


<section class="services" id="services-host">
    <div class="gl__page-content">
        <ul class="services__list js-menu-tabs-container">

            <li class="services__item-wrapper gl__white-container mod-painted">
                <?$APPLICATION->IncludeComponent(
                    "tattelecom:form",
                    "transfer",
                    [],
                    false
                );?>
            </li>
            <li class="services__item-wrapper gl__white-container">
                <h3 class="services__item-info-title">Красивые номера</h3>
                <div class="services__item-info-container">
                    <div class="services__item-info-content">
                        <div class="services__item-info-text">Выберите номер с любимыми цифрами</div>
                        <a href="/mobile/beautiful-numbers/" class="services__item-info-btn">
                            <span class="services__item-info-btn-text">Подобрать</span>
                            <svg width="40" height="40" aria-hidden="true" class="services__item-info-btn-icon">
                                <use xlink:href="#arrow-line-right"></use>
                            </svg>
                        </a>
                    </div>
                    <img src="/local/js/template/tattelecom-1/img/main-page/services/ellipse-image-2.svg" alt="" class="services__item-info-image">
                </div>
            </li>
        </ul>
    </div>
</section>

<?/*<section class="info-links" id="info-links-host">
    <div class="gl__page-content">
        <ul class="info-links__list">
            <!--<li class="info-links__item gl__white-container cashback__slide gl__link-arrow-container">
                <img src="<?=BUILD_PATH?>img/rates-mobile-list-page/img-2.png" alt="" class="cashback__slide-img info-links__slide-img">
                <div class="cashback__slide-content-wrapper">
                    <div class="cashback__slide-title info-links__slide-title mod-black">
                        <div>Смартфоны в рассрочку</div>
                    </div>
                    <div class="cashback__slide-text info-links__slide-text">Рассрочка на приобретение мобильных устройств с поддержкой 4G.</div>
                </div>
                <a href="" class="cashback__slide-link mod-black">Выбрать смартфон<svg width="40" height="40" aria-hidden="true" class="cashback__slide-link-icon">
                        <use xlink:href="#arrow-line-right"></use>
                    </svg>
                </a>
            </li>-->
            <li class="info-links__item gl__white-container cashback__slide gl__link-arrow-container">
                <img src="/upload/medialibrary/f5a/ev46te3ti6p187lalqz4e14eqjzz4x9p/photo_2023_07_18-17.02.58.jpeg" alt="" class="cashback__slide-background">
                <div class="cashback__slide-content-wrapper">
                    <div class="cashback__slide-title info-links__slide-title mod-white">
                        <div>КЭШБЭЧНО</div>
                    </div>
                    <div class="cashback__slide-text info-links__slide-text mod-white">Возвращаем 20% на счет мобильной связи</div>
                </div>
                <a href="/stocks/keshbek2023/" class="cashback__slide-link mod-white gl__no-default-hover">Подробнее</a>
            </li>
            <li class="info-links__item gl__white-container cashback__slide gl__link-arrow-container">
                <img src="<?=BUILD_PATH?>img/rates-mobile-list-page/img-5.jpg" alt="" class="cashback__slide-background">
                <div class="cashback__slide-content-wrapper">
                    <div class="cashback__slide-title info-links__slide-title mod-white">
                        <div>Доставка SIM-карты бесплатно на дом</div>
                    </div>
                    <div class="cashback__slide-text info-links__slide-text mod-white">Рассрочка на приобретение мобильных устройств с поддержкой 4G.</div>
                </div>
                <a href="javascript:;" class="cashback__slide-link mod-white js-open-callback-modal gl__no-default-hover">Заказать сим-карту</a>
            </li>
            <li class="info-links__item gl__white-container cashback__slide gl__link-arrow-container">
                <img src="<?=BUILD_PATH?>img/rates-mobile-list-page/img-4.png" alt="" class="cashback__slide-img info-links__slide-img">
                <div class="cashback__slide-content-wrapper">
                    <div class="cashback__slide-title info-links__slide-title">
                        <div>Выбирайте красивые номера</div>
                    </div>
                    <!--<div class="cashback__slide-text info-links__slide-text">Серебряный, Золотой, Бронзовый</div>-->
                </div>
                <a href="/mobile/beautiful-numbers/" class="cashback__slide-link mod-black">Подобрать<svg width="40" height="40" aria-hidden="true" class="cashback__slide-link-icon">
                        <use xlink:href="#arrow-line-right"></use>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</section>*/?>

<?if($arParams["USE_RATING"]=="Y" && $ElementID):?>
<?$APPLICATION->IncludeComponent(
	"bitrix:iblock.vote",
	"",
	Array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"ELEMENT_ID" => $ElementID,
		"MAX_VOTE" => $arParams["MAX_VOTE"],
		"VOTE_NAMES" => $arParams["VOTE_NAMES"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
	),
	$component
);?>
<?endif?>
<?if($arParams["USE_CATEGORIES"]=="Y" && $ElementID):
	global $arCategoryFilter;
	$obCache = new CPHPCache;
	$strCacheID = $componentPath.LANG.$arParams["IBLOCK_ID"].$ElementID.$arParams["CATEGORY_CODE"];
	if(($tzOffset = CTimeZone::GetOffset()) <> 0)
		$strCacheID .= "_".$tzOffset;
	if($arParams["CACHE_TYPE"] == "N" || $arParams["CACHE_TYPE"] == "A" && COption::GetOptionString("main", "component_cache_on", "Y") == "N")
		$CACHE_TIME = 0;
	else
		$CACHE_TIME = $arParams["CACHE_TIME"];
	if($obCache->StartDataCache($CACHE_TIME, $strCacheID, $componentPath))
	{
		$rsProperties = CIBlockElement::GetProperty($arParams["IBLOCK_ID"], $ElementID, "sort", "asc", array("ACTIVE"=>"Y","CODE"=>$arParams["CATEGORY_CODE"]));
		$arCategoryFilter = array();
		while($arProperty = $rsProperties->Fetch())
		{
			if(is_array($arProperty["VALUE"]) && count($arProperty["VALUE"])>0)
			{
				foreach($arProperty["VALUE"] as $value)
					$arCategoryFilter[$value]=true;
			}
			elseif(!is_array($arProperty["VALUE"]) && $arProperty["VALUE"] <> '')
				$arCategoryFilter[$arProperty["VALUE"]]=true;
		}
		$obCache->EndDataCache($arCategoryFilter);
	}
	else
	{
		$arCategoryFilter = $obCache->GetVars();
	}
	if(count($arCategoryFilter)>0):
		$arCategoryFilter = array(
			"PROPERTY_".$arParams["CATEGORY_CODE"] => array_keys($arCategoryFilter),
			"!"."ID" => $ElementID,
		);
		?>
		<hr /><h3><?=GetMessage("CATEGORIES")?></h3>
		<?foreach($arParams["CATEGORY_IBLOCK"] as $iblock_id):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				$arParams["CATEGORY_THEME_".$iblock_id],
				Array(
					"IBLOCK_ID" => $iblock_id,
					"NEWS_COUNT" => $arParams["CATEGORY_ITEMS_COUNT"],
					"SET_TITLE" => "N",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"CACHE_TYPE" => $arParams["CACHE_TYPE"],
					"CACHE_TIME" => $arParams["CACHE_TIME"],
					"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
					"FILTER_NAME" => "arCategoryFilter",
					"CACHE_FILTER" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "N",
				),
				$component
			);?>
		<?endforeach?>
	<?endif?>
<?endif?>
<?if($arParams["USE_REVIEW"]=="Y" && IsModuleInstalled("forum") && $ElementID):?>
<hr />
<?$APPLICATION->IncludeComponent(
	"bitrix:forum.topic.reviews",
	"",
	Array(
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"MESSAGES_PER_PAGE" => $arParams["MESSAGES_PER_PAGE"],
		"USE_CAPTCHA" => $arParams["USE_CAPTCHA"],
		"PATH_TO_SMILE" => $arParams["PATH_TO_SMILE"],
		"FORUM_ID" => $arParams["FORUM_ID"],
		"URL_TEMPLATES_READ" => $arParams["URL_TEMPLATES_READ"],
		"SHOW_LINK_TO_FORUM" => $arParams["SHOW_LINK_TO_FORUM"],
		"DATE_TIME_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
		"ELEMENT_ID" => $ElementID,
		"AJAX_POST" => $arParams["REVIEW_AJAX_POST"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"URL_TEMPLATES_DETAIL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
	),
	$component
);?>
<?endif?>
