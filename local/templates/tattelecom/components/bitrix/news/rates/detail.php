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
$this->addExternalJS(BUILD_PATH . "js/common-private-clients.js");
?>
<?$ElementID = $APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"",
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

<section class="info-drop-menu" id="info-drop-menu-host">
    <div class="gl__page-content">
        <button type="button" class="info-drop-menu__title gl__drop-menu-btn js-drop-menu-btn">
            <svg width="32" height="32" aria-hidden="true" class="info-drop-menu__title-icon gl__drop-menu-icon">
                <use xlink:href="#arrow-down"></use>
            </svg>Сверх абонентской платы
        </button>
        <div class="gl__drop-menu-container js-drop-menu-container">
            <div class="gl__drop-menu js-drop-menu">
                <div class="info-drop-menu__info-paragraph">
                    <div class="info-drop-menu__flex-list-wrapper">
                        <h3 class="info-drop-menu__info-title">Звонки, смс и другие услуги</h3>
                        <div class="info-drop-menu__flex">
                            <div class="info-drop-menu__flex-caption">Исходящие вызовы на мобильные и городские номера РТ (за исключением номеров «Летай»), доступ к IP-телефонии</div>
                            <div class="info-drop-menu__flex-value">1,5 ₽/минута</div>
                        </div>
                        <div class="info-drop-menu__flex">
                            <div class="info-drop-menu__flex-caption">Исходящие вызовы на мобильные и городские номера РФ</div>
                            <div class="info-drop-menu__flex-value">3 ₽/минута</div>
                        </div>
                        <div class="info-drop-menu__flex">
                            <div class="info-drop-menu__flex-caption">Исходящие SMS на номера мобильных операторов РТ (в том числе на номера оператора «Летай»)</div>
                            <div class="info-drop-menu__flex-value">1 ₽/SMS</div>
                        </div>
                        <div class="info-drop-menu__flex">
                            <div class="info-drop-menu__flex-caption">Исходящие SMS на номера мобильных операторов РФ</div>
                            <div class="info-drop-menu__flex-value">2 ₽/SMS</div>
                        </div>
                        <div class="info-drop-menu__flex">
                            <div class="info-drop-menu__flex-caption">Исходящие местные вызовы на 01, 02, 03, 04, 112, 123, 118-08, 118-18, 118-88, 118-00,8-148, 8-128, (843)222-22-22, (843)238-00-00, (843)561-09-92</div>
                            <div class="info-drop-menu__flex-value">0</div>
                        </div>
                        <div class="info-drop-menu__flex">
                            <div class="info-drop-menu__flex-caption">Входящие вызовы при нахождении на территории РТ</div>
                            <div class="info-drop-menu__flex-value">0</div>
                        </div>
                        <div class="info-drop-menu__flex">
                            <div class="info-drop-menu__flex-caption">Определение номера</div>
                            <div class="info-drop-menu__flex-value">0</div>
                        </div>
                        <div class="info-drop-menu__flex">
                            <div class="info-drop-menu__flex-caption">Информирование абонентов посредством SMS, USSD</div>
                            <div class="info-drop-menu__flex-value">0</div>
                        </div>
                        <div class="info-drop-menu__flex">
                            <div class="info-drop-menu__flex-caption">Информационно-развлекательные услуги, Интерактивные SMS-услуги (информация, игры, развлечения, спорт, заказ мелодий и т. д.)</div>
                            <div class="info-drop-menu__flex-value">по отдельным тарифам</div>
                        </div>
                        <div class="info-drop-menu__flex">
                            <div class="info-drop-menu__flex-caption">Городской номер</div>
                            <div class="info-drop-menu__flex-value">Городской номер</div>
                        </div>
                    </div>
                </div>
                <div class="info-drop-menu__info-paragraph">
                    <div class="info-drop-menu__flex-list-wrapper">
                        <h3 class="info-drop-menu__info-title">Условия смены тарифного плана</h3>
                        <div class="info-drop-menu__flex">
                            <div class="info-drop-menu__flex-caption">В течение 30 дней включительно с момента первоначального подключения к услуге подвижной радиотелефонной связи «Летай» смена тарифного плана в личном кабинете и в офисах продаж и обслуживания не производится</div>
                        </div>
                        <div class="info-drop-menu__flex">
                            <div class="info-drop-menu__flex-caption">Если с момента предыдущей смены тарифного плана прошло не более месяца (до 30 дней включительно)</div>
                            <div class="info-drop-menu__flex-value">150 ₽</div>
                        </div>
                        <div class="info-drop-menu__flex">
                            <div class="info-drop-menu__flex-caption">Если с момента подключения/предыдущей смены тарифного плана прошло более месяца (более 30 дней включительно)</div>
                            <div class="info-drop-menu__flex-value">0 ₽</div>
                        </div>
                        <div class="info-drop-menu__flex">
                            <div class="info-drop-menu__flex-caption">Переход на тарифный план возможно осуществить в Едином личном кабинете lk.letai.ru или набрать USSD-команду: *116*201#</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="info-drop-menu" id="info-drop-menu-host">
    <div class="gl__page-content">
        <button type="button" class="info-drop-menu__title gl__drop-menu-btn js-drop-menu-btn">
            <svg width="32" height="32" aria-hidden="true" class="info-drop-menu__title-icon gl__drop-menu-icon">
                <use xlink:href="#arrow-down"></use>
            </svg>Примечания
        </button>
        <div class="gl__white-container gl__drop-menu-container js-drop-menu-container">
            <div class="info-drop-menu__content gl__drop-menu js-drop-menu">
                <div class="gl__text">
                    <p>На тарифном плане предоставляется федеральный или городской номер.</p>
                    <p>Система оплаты – авансовая.</p>
                    <p>Тарификация вызовов – поминутная.</p>
                    <p>Интервал тарификации услуг Интернет – 1 байт.</p>
                    <p>Соединения менее 3-х секунд не тарифицируются.</p>
                    <p>Тарифы приведены в рублях с учетом НДС в соответствии с налоговым кодексом РФ. Тарифы действительны при нахождении Абонента на территории Республики Татарстан. При нахождении на территории других субъектов Федерации или за пределами Российской Федерации, действуют роуминговые тарифы.</p>
                    <p>При подключении клиенту доступен следующий базовый пакет услуг: Местные вызовы, Междугородные вызовы из РТ, Национальный роуминг, Определитель номера, Переадресация вызова, Ожидание вызова, Удержание вызова, SMS, USSD-сервис, Мобильный интернет (пакетная передача данных), Уведомление о пропущенных вызовах.</p>
                    <p>Все услуги предоставляются при наличии технической возможности, оказываются конечным потребителям и не предназначены для перепродажи третьим лицам.</p>
                    <p>Тарифный план предназначен для использования на смартфоне/телефоне. Услуги не предоставляются при использовании SIM-карты на данном тарифном плане в модеме/роутере.</p>
                    <p>При недостаточности средств для списания абонентской платы за пользование пакетом услуг на тарифном плане, производится блокировка всех услуг абонемента (блокировка исходящей голосовой связи, исходящих SMS, входящего и исходящего интернет-трафика). Разблокировка услуг абонемента происходит после поступления денежных средств на лицевой счет Абонента, в результате списания абонентской платы.</p>
                    <p>При достижении порога отключения (нулевого баланса) производится блокировка услуг. Разблокировка услуг в этом случае наступает при положительном балансе.</p>
                    <p>При исчерпании пакета минут, включенных в тариф, исходящие звонки тарифицируются по базовой стоимости исходящего вызова сверх пакета.</p>
                    <p>При исчерпании пакета SMS, включенных в тариф, исходящие сообщения тарифицируются по базовой стоимости исходящего SMS сверх пакета.</p>
                    <p>При нулевом или отрицательном балансе абонентская плата по условиям тарифного плана и плата за дополнительные услуги не начисляются.</p>
                    <p>В случае отсутствия активности со стороны Абонента на номере (отсутствия исходящих голосовых вызовов, исходящих SMS, Интернет-трафика и платных услуг) в течение более 60 календарных дней подряд, начисляется абонентская плата за обслуживание номера в сети в размере 1 руб./сутки. Абонентская плата начисляется ежедневно до достижения нулевого баланса (порога отключения) или до возобновления абонентской активности на номере. При этом абонент, находящийся в принудительной блокировке, имеет возможность совершать исходящие вызовы на номера спец. служб, принимать все входящие вызовы и SMS, за исключением случаев нахождения Абонента в роуминге, а также иных случаев, предусмотренных условиями оказания услуг связи ООО «ТМТ».</p>
                    <p>Информацию о состоянии баланса можно получить через USSD запрос *100#. Справочную информацию об условиях обслуживания на тарифном плане можно получить по телефону 118-08, (843) 222-22-22 (вызовы не тарифицируются).</p>
                    <p>ООО «ТМТ» вправе в одностороннем порядке изменять условия обслуживания и стоимость услуг, уведомив об этом абонентов через СМИ и на сайте tattelecom.ru не позднее, чем за 10 дней до предполагаемой даты изменения условий.</p>
                    <p>Под мобильной связью и мобильными телефонами понимается подвижная радиотелефонная связь и телефонные номера абонентов операторов подвижной радиотелефонной связи. Городские телефоны – телефонные номера абонентов операторов фиксированной связи. РТ – Республика Татарстан, РФ – Российская Федерация. Под номерами «Летай» понимаются телефонные номера абонентов ООО «ТМТ».</p>
                    <p>Тарифы приведены в рублях с учетом НДС в соответствии с НК РФ.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="info-links" id="info-links-host">
    <div class="gl__page-content">
        <ul class="info-links__list">
            <li class="info-links__item gl__white-container cashback__slide gl__link-arrow-container">
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
            </li>
            <li class="info-links__item gl__white-container cashback__slide gl__link-arrow-container">
                <img src="<?=BUILD_PATH?>img/rates-mobile-list-page/img-3.jpg" alt="" class="cashback__slide-background">
                <div class="cashback__slide-content-wrapper">
                    <div class="cashback__slide-title info-links__slide-title">
                        <div>Вместе выгодно</div>
                        <div>2.0</div>
                    </div>
                    <div class="cashback__slide-text info-links__slide-text">Подключите «Летай» и получайте кешбэк 20%!</div>
                </div>
                <a href="" class="cashback__slide-link">Подробнее</a>
            </li>
            <li class="info-links__item gl__white-container cashback__slide gl__link-arrow-container">
                <img src="<?=BUILD_PATH?>img/rates-mobile-list-page/img-1.jpg" alt="" class="cashback__slide-background">
                <div class="cashback__slide-content-wrapper">
                    <div class="cashback__slide-title info-links__slide-title mod-white">
                        <div>Доставка SIM-карты бесплатно на дом</div>
                    </div>
                    <div class="cashback__slide-text info-links__slide-text mod-white">Рассрочка на приобретение мобильных устройств с поддержкой 4G.</div>
                </div>
                <a href="" class="cashback__slide-link mod-white">Заказать сим-карту</a>
            </li>
            <li class="info-links__item gl__white-container cashback__slide gl__link-arrow-container">
                <img src="<?=BUILD_PATH?>img/rates-mobile-list-page/img-4.png" alt="" class="cashback__slide-img info-links__slide-img">
                <div class="cashback__slide-content-wrapper">
                    <div class="cashback__slide-title info-links__slide-title">
                        <div>Выбирайте красивые номера</div>
                    </div>
                    <div class="cashback__slide-text info-links__slide-text">Серебрянный, Золотой, Бронзовый</div>
                </div>
                <a href="" class="cashback__slide-link mod-black">Подобрать<svg width="40" height="40" aria-hidden="true" class="cashback__slide-link-icon">
                        <use xlink:href="#arrow-line-right"></use>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</section>

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
