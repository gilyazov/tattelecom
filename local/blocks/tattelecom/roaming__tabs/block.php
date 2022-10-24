<div class="js-menu-tabs-container">
    <section class="roaming-tabs" id="roaming-tabs-host">
        <div class="gl__page-content">
            <div class="roaming-tabs__content">
                <div class="roaming-tabs__menu-tabs-wrapper gl__white-container gl__xs-hide">
                    <div class="menu-tabs__radio-btns-container mod-type-2">
                        <label class="menu-tabs__radio-wrapper">
                            <input type="radio" class="menu-tabs__radio js-menu-tab" name="roaming" checked="checked" value="russia">
                            <span class="menu-tabs__radio-content">Роуминг по России</span>
                        </label>
                        <label class="menu-tabs__radio-wrapper">
                            <input type="radio" class="menu-tabs__radio js-menu-tab" name="roaming" value="world">
                            <span class="menu-tabs__radio-content">Роуминг по всему миру</span>
                        </label>
                    </div>
                </div>
                <div class="gl__xs-show">
                    <div class="roaming-tabs__select-wrapper">
                        <div class="select">
                            <div class="select__container" id="roaming">
                                <label class="select__wrapper">
                                    <select class="gl__select js-custom-select" data-parsley-class-handler="#roaming" name="roaming">
                                        <option value="russia">Роуминг по Россиии</option>
                                        <option value="world">Роуминг по всему миру</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="roaming-tabs__image-wrapper">
                        <img src="/local/js/template/tattelecom-1/img/roaming-page/man.svg" alt="" class="roaming-tabs__image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="js-menu-tab-content gl__menu-tab-content" data-menu="russia">
        <section class="pricing-plans" id="pricing-plans-host">
            <div class="gl__page-content">
                <h2 class="gl__title">Тарифы</h2>
                <div class="pricing-plans__content">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "pricing-plans__list",
                        Array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array("",""),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "28",
                            "IBLOCK_TYPE" => "mobile",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "N",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "20",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "russia",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array("SUBTITLE","OPTIONS",""),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "SORT",
                            "SORT_BY2" => "ACTIVE_FROM",
                            "SORT_ORDER1" => "ASC",
                            "SORT_ORDER2" => "DESC",
                            "STRICT_SECTION_CHECK" => "N"
                        )
                    );?>
                    <img src="/local/js/template/tattelecom-1/img/roaming-page/man.svg" alt="" class="pricing-plans__image gl__md-hide">
                </div>
            </div>
        </section>
        <section class="instructions gl__section" id="instructions-host">
            <div class="gl__page-content">
                <h2 class="gl__title">Инструкция по подключению</h2>
                <div class="instructions__subtitle">Чтобы начать пользоваться национальным роумингом:</div>
                <ul class="instructions__step-list">
                    <li class="instructions__step-item gl__white-container">
                        <div>
                            <div class="instructions__step-caption">Шаг 1</div>
                            <p class="instructions__step-text">Установите автоматический выбор сети на Вашем телефоне. Если ваш телефон не подключился к сети, используйте ручной поиск сети при нахождении в роуминге.</p>
                        </div>
                    </li>
                    <li class="instructions__step-item gl__white-container">
                        <div>
                            <div class="instructions__step-caption">Шаг 2</div>
                            <p class="instructions__step-text">Пополните счет на оптимальную сумму, так как тарифы на связь в роуминге отличаются от тарифов в домашней сети.</p>
                        </div>
                        <div class="instructions__mark">
                            <svg width="24" height="24" aria-hidden="true" class="instructions__mark-icon">
                                <use xlink:href="#info-ellipse"></use>
                            </svg>Важно!
                        </div>
                    </li>
                    <li class="instructions__step-item gl__white-container">
                        <div>
                            <div class="instructions__step-caption">Шаг 3</div>
                            <p class="instructions__step-text">Подключите специальные опции «Открытая Страна», «Интернет по России» и общайтесь на выгодных условиях.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="international-calls">
            <div class="gl__page-content">
                <div class="international-calls__content">
                    <img src="/local/js/template/tattelecom-1/img/roaming-page/woman.svg" alt="" class="international-calls__image">
                    <h2 class="gl__title international-calls__title">Международные звонки в роуминге по России</h2>
                    <ul class="international-calls__faq-list">
                        <li class="faq__item">
                            <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                                <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                    <use xlink:href="#arrow-down"></use>
                                </svg><span class="faq__item-title">Исходящие звонки на фиксированные и мобильные номера за пределы РФ в сети Билайн</span>
                            </button>
                            <div class="faq__item-content-wrapper gl__drop-menu-container js-drop-menu-container">
                                <div class="gl__text gl__drop-menu js-drop-menu">
                                    <p>Стоимость определяется зоной вызова (руб./мин.):</p>
                                    <table class="letaitbl" style="width: 100%;">
                                        <tbody>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Зона 1</span></strong>:</p>
                                                <p>Азербайджан, Армения, Белоруссия, Грузия, Казахстан, Киргизия, Молдавия, Таджикистан, Туркмения, Узбекистан.</p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">78</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Зона 2</span></strong>:</p>
                                                <p>А встрия, Албания, Андорра, Бельгия, Болгария, Босния и Герцеговина, Ватикан, Великобритания, Венгрия, Германия, Гернси, Гибралтар, Греция, Дания, Джерси, Ирландия, Исландия, Испания, Италия, Кипр, Латвия, Литва, Лихтенштейн, Люксембург, Македония, Мальта, Монако, Мэн остров, Нидерланды, Норвегия, Польша, Португалия, Румыния, Сан-Марино, Сербия, Словакия, Словения, Украина, Фарерские острова, Финляндия, Хорватия, Черногория, Чехия, Швейцария, Швеция, Telenor Connexion (883120), Шпицберген, Эстония, Ян-Майен.</p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">138</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Зона 3,4,5,6</span></strong>:</p>
                                                <p>Ангилья, Антигуа и Барбуда, Антильские острова, Аргентина, Аруба, Багамские острова, Барбадос, Белиз, Бермудские острова, Боливия, Бразилия, Венесуэла, Виргинские острова (Брит.), Виргинские острова (США), Гавайские острова, Гаити, Гайана, Гваделупа, Гватемала, Гвиана, Гондурас, Гренада, Гренландия, Доминика, Доминиканская Республика, Каймановы острова, Канада, Колумбия, Коста-Рика, Куба, Мартиника, Мексика, Мидуэй острова, Монтсеррат, Никарагуа, Панама, Парагвай, Перу, Пуэрто-Рико, Сальвадор, Сен-Пьер и Микелон, Сент-Винсент и Гренадины, Сент-Киттс и Невис, Сент-Люсия, США, Суринам, Тёркс и Кайкос острова, Тринидад и Тобаго, Уругвай, Уэйк, Фолклендские острова, Чили, Эквадор, Южная Гергия и Южные Сандвичевы острова, Ямайка, Афганистан, Бангладеш, Бахрейн, Бруней, Бутан, Восточный Тимор, Вьетнам, Гонконг, Израиль, Индия, Индонезия, Иордания, Иран, Ирак, Йемен, Камбоджа, Китай, Кувейт, Лаос, Ливан, Макао, Малайзия, Мальдивы, Монголия, Мьянма, Непал, Оман, Пакистан, Саудовская Аравия, Северная Корея, Сингапур, Сирия, Таиланд, Тайвань, Филиппины, Южная Корея, Япония, Алжир, Ангола, Бенин, Ботсвана, Британская территория в Индийском океане, Буркина-Фасо, Бурунди, Габон, Гамбия, Гана, Гвинея, Гвинея-Бисау, Демократическая Республика Конго, Джибути, Египет, Замбия, Западная Сахара, Кабо-Верде, Камерун, Кения, Коморские острова, Конго, Кот д’Ивуар, Лесото, Либерия, Ливия, Маврикий, Мавритания, Мадагаскар, Майотта остров, Малави, Мали, Марокко, Мозамбик, Намибия, Нигер, Нигерия, Руанда, Сан-Томе и Принсипи, Свазиленд, Святой Елены остров, Сейшельские острова, Сенегал, Сомали, Судан, Сьерра-Леоне, Танзания, Того, Тунис, Турция, Уганда, Франция, Центральноафриканская Республика, Чад, Экваториальная Гвинея, Эритрея, Эфиопия, ЮАР, Южный Судан, Австралия, Вануату, Восточное Самоа, Гуам, Западное Самоа, Маршалловы острова, Северные Марианские острова, Федеративные Штаты Микронезии, Кирибати, Кокосовые острова, Кука острова, Науру, Ниуэ, Новая Зеландия, Новая Каледония, Норфолк, Палау, Папуа-Новая Гвинея, Питкэрн, Рождества остров, Соломоновы острова, Токелау, Тонга, Тувалу, Уоллис и Футуна, Фиджи, Французская Полинезия, Все спутниковые сети, кроме Инмарсат</p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">165</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Зона 7</span></strong>:</p>
                                                Катар, Шри-Ланка, Реюньон, ОАЭ, Зимбабве</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">55</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Зона 8 и9</span></strong>:</p>
                                                Все спутниковые сети, в том числе Инмарсат</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">800</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                        <li class="faq__item">
                            <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                                <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                    <use xlink:href="#arrow-down"></use>
                                </svg><span class="faq__item-title">Исходящие звонки на фиксированные и мобильные номера за пределы РФ в сети МТС и Мегафон</span>
                            </button>
                            <div class="faq__item-content-wrapper gl__drop-menu-container js-drop-menu-container">
                                <div class="gl__text gl__drop-menu js-drop-menu">
                                    <p>Стоимость определяется направлением вызова (руб./мин.):</p>
                                    <table class="letaitbl" style="width: 100%;">
                                        <tbody>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0"><strong><span style="text-decoration: underline;">СНГ и Грузия</span>:</strong> Азербайджан, Армения, Белоруссия, Грузия, Казахстан, Киргизия, Молдавия, Таджикистан, Туркмения, Узбекистан, Украина.</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">39</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0"><strong><span style="text-decoration: underline;">Европа</span>:</strong> Австрия, Албания, Андорра, Бельгия, Болгария, Босния и Герцеговина, Ватикан, Великобритания, Венгрия, Германия, Гернси, Гибралтар, Греция, Дания, Джерси, Ирландия, Исландия, Испания, Италия, Кипр, Латвия, Литва, Лихтенштейн, Люксембург, Македония, Мальта, Монако, Мэн остров, Нидерланды, Норвегия, Польша, Португалия, Румыния, Сан-Марино, Сербия, Словакия, Словения,&nbsp; Фарерские острова, Финляндия, Франция, Хорватия, Черногория, Чехия, Швейцария, Швеция, Шпицберген, Эстония, Ян-Майен.</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">48</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0"><strong><span style="text-decoration: underline;">Остальные страны</span>:</strong> Ангилья, Антигуа и Барбуда, Антильские острова, Аргентина, Аруба, Багамские острова, Барбадос, Белиз, Бермудские острова, Боливия, Бразилия, Венесуэла, Виргинские острова (Брит.), Виргинские острова (США), Гавайские острова, Гаити, Гайана, Гваделупа, Гватемала, Гвиана, Гондурас, Гренада, Гренландия, Доминика, Доминиканская Республика, Каймановы острова, Канада, Колумбия, Коста-Рика, Куба, Мартиника, Мексика, Мидуэй острова, Монтсеррат, Никарагуа, Панама, Парагвай, Перу, Пуэрто-Рико, Сальвадор, Сен-Пьер и Микелон, Сент-Винсент и Гренадины, Сент-Киттс и Невис, Сент-Люсия, США, Суринам, Тёркс и Кайкос острова, Тринидад и Тобаго, Уругвай, Уэйк, Фолклендские острова, Чили, Эквадор, Южная Гергия и Южные Сандвичевы острова, Ямайка, Афганистан, Бангладеш, Бахрейн, Бруней, Бутан, Восточный Тимор, Вьетнам, Гонконг, Израиль, Индия, Индонезия, Иордания, Иран, Ирак, Йемен, Камбоджа, Китай, Кувейт, Лаос, Ливан, Макао, Малайзия, Мальдивы, Монголия, Мьянма, Непал, Оман, Пакистан, Саудовская Аравия, Северная Корея, Сингапур, Сирия, Таиланд, Тайвань, Филиппины, Южная Корея, Япония, Алжир, Ангола, Бенин, Ботсвана, Британская территория в Индийском океане, Буркина-Фасо, Бурунди, Габон, Гамбия, Гана, Гвинея, Гвинея-Бисау, Демократическая Республика Конго, Джибути, Египет, Замбия, Западная Сахара, Кабо-Верде, Камерун, Кения, Коморские острова, Конго, Кот д’Ивуар, Лесото, Либерия, Ливия, Маврикий, Мавритания, Мадагаскар, Майотта остров, Малави, Мали, Марокко, Мозамбик, Намибия, Нигер, Нигерия, Руанда, Сан-Томе и Принсипи, Свазиленд, Святой Елены остров, Сейшельские острова, Сенегал, Сомали, Судан, Сьерра-Леоне, Танзания, Того, Тунис, Турция, Уганда, Центральноафриканская Республика, Чад, Экваториальная Гвинея, Эритрея, Эфиопия, ЮАР, Южный Судан, Австралия, Вануату, Восточное Самоа, Гуам, Западное Самоа, Маршалловы острова, Северные Марианские острова, Федеративные Штаты Микронезии, Кирибати, Кокосовые острова, Кука острова, Науру, Ниуэ, Новая Зеландия, Новая Каледония, Норфолк, Палау, Папуа-Новая Гвинея, Питкэрн, Рождества остров, Соломоновы острова, Токелау, Тонга, Тувалу, Уоллис и Футуна, Фиджи, Французская Полинезия, Катар, Шри-Ланка, Реюньон, ОАЭ, Зимбабве</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">67</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0"><strong><span style="text-decoration: underline;">Все спутниковые сети</span></strong></td>
                                            <td style="text-align: center; width: 321px;" valign="middle">180</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">Инмарсат</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">460</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                        <li class="faq__item">
                            <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                                <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                    <use xlink:href="#arrow-down"></use>
                                </svg><span class="faq__item-title">Исходящие звонки на фиксированные и мобильные номера за пределы РФ в сети Tele2</span>
                            </button>
                            <div class="faq__item-content-wrapper gl__drop-menu-container js-drop-menu-container">
                                <div class="gl__text gl__drop-menu js-drop-menu">
                                    <p>Стоимость определяется направлением вызова (руб./мин.):</p>
                                    <table class="letaitbl" style="width: 100%;">
                                        <tbody>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0"><strong><span style="text-decoration: underline;">СНГ</span>:</strong> Армения, Азербайджан, Белоруссия, Грузия, Казахстан, Киргизстан, Молдова, Таджикистан, Туркменистан, Узбекистан, Украина.</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">65</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0"><strong><span style="text-decoration: underline;">Страны Балтии</span>:</strong> Латвия, Литва, Эстония.</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">125</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0"><strong><span style="text-decoration: underline;">Европа</span>:</strong> Австрия, Албания, Андорра, Бельгия, Болгария, Босния и Герцеговина, Великобритания, Венгрия, Германия, Гернси о-в, Гибралтар, Греция, Дания, Джерси о-в., Израиль, Ирландия, Исландия, Испания, Италия, Кипр, Лихтенштейн, Люксембург, Македония, Мальта, Монако, Нидерланды, Норвегия, Остров Мэн, Польша, Португалия, Румыния, Сан-Марино, Сербия, Словацкая республика, Словения, Турция, Фарерские острова, Финляндия, Франция, Хорватия, Черногория, Чешская Респ., Швейцария, Швеция.</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">125</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0"><strong><span style="text-decoration: underline;">США и Канада</span>:</strong> Канада, США.</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">125</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0"><strong><span style="text-decoration: underline;">Латинская и Южная Америка</span>: </strong>Антильские острова, Аргентина, Аруба, Багамы, Барбадос, Белиз, Бермудские острова, Боливия, Бразилия, Венесуэла, Гавайи, Гайана, Гаити, Гана, Гватемала, Гондурас, Гренада, Доминика, Доминиканская республика, Колумбия, Коста-Рика, Куба, Мартиника, Мексика, Никарагуа, Остров Гваделупа, Остров Гренландия, Панама, Парагвай, Перу, Пуэрто-Рико, Сальвадор, Сен-Бартелеми, Сен-Пьер и Микелон, Суринам, Уругвай, Фолклендские острова, Французская Гвиана, Чили, Эквадор, Ямайка.</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">125</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0"><strong><span style="text-decoration: underline;">Азия</span>: </strong>Афганистан, Бангладеш, Бахрейн, Бруней, Бутан, Вануату, Восточный Тимор, Вьетнам, Гонконг, Гуам, Йемен, Индия, Индонезия, Иордания, Ирак, Иран, Камбоджа, Катар Китай, Кувейт, Лаос, Ливан, Макао, Малайзия, Мальдивы, Маршалловы Острова, Микронезия, Монголия, Мьянма, Науру, Непал, ОАЭ, Оман, Пакистан, Папуа – Новая Гвинея, Респ. Корея, Саудовская Аравия, Северная Корея, Северные Марианские острова, Сингапур, Сирия, Соломоновы Острова, Тайвань, Таиланд, Тонга, Фиджи, Филиппины, Шри-Ланка, Япония.</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">125</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0"><strong><span style="text-decoration: underline;">Африка</span>: </strong>Алжир, Ангола, Бенин, Ботсвана, Буркина-Фасо, Бурунди, Габон, Гамбия, Гвинея, Гвинея-Бисау, Демократическая Республика Конго, Джибути, Египет, Замбия, Зимбабве, Кабо-Верде, Камерун, Кения, Коморские острова, Конго, Кот Д`Ивуар, Лесото, Либерия, Ливия, Маврикий, Мавритания, Мадагаскар, Малави, Мали, Марокко, Мозамбик, Намибия, Нигер, Нигерия, Остров C-Елены, Реюньон, Руанда, Сан-Томе и Принсипи, Свазиленд, Сейшельские острова, Сенегал, Сомали, Судан, Сьерра-Леоне, Танзания, Того, Тунис, Уганда, Центральноафриканская Республика, Чад, Экваториальной Гвинея, Эфиопия, Южная Африка.</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">155</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0"><strong><span style="text-decoration: underline;">Австралия, Океания, Нов. Зеландия</span>: </strong>Американское Самоа, Западное Самоа, Кирибати, Кокосовые острова, Новая Зеландия, Новая Каледония, Норфолк, Острова Кука, Тувалу, Уоллис и Футуна, Французская Полинезия.</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">385</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0"><strong><span style="text-decoration: underline;">Спутниковые сети и Инмарсат</span></strong></td>
                                            <td style="text-align: center; width: 321px;" valign="middle">1030</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                        <li class="faq__item">
                            <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                                <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                    <use xlink:href="#arrow-down"></use>
                                </svg><span class="faq__item-title">Исходящие звонки на фиксированные и мобильные номера за пределы РФ в сети К-Телеком, Сервис-телеком и КТК-телеком (Республика крым)</span>
                            </button>
                            <div class="faq__item-content-wrapper gl__drop-menu-container js-drop-menu-container">
                                <div class="gl__text gl__drop-menu js-drop-menu">
                                    <p>Стоимость определяется зоной вызова (руб./мин.):</p>
                                    <table class="letaitbl" style="width: 100%;">
                                        <tbody>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Зона 1</span></strong>:</p>
                                                Азербайджан (AZE, 994), Армения (ARM, 374), Белоруссия (BLR, 375), Грузия (GEO, 995), Казахстан (KAZ, 76, 77), Киргизия (KGZ, 996), Молдавия (MDA, 373), Таджикистан (TJK, 992), Туркмения (ТКМ, 993), Узбекистан (UZB, 998), Украина (UKR, 380)</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">85</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Зона 2</span></strong>:</p>
                                                Австрия (AUT, 43), Албания (ALB, 355), Андорра (AND, 376), Бельгия (BEL, 32), Болгария (BGR, 359), Босния и Герцеговина (BIH, 387), Ватикан (VAT, 379), Великобритания (GBR, 44), Венгрия (HUN, 36), Германия (DEU, 49), Гернси (44), Гибралтар (GIB, 350), Греция (GRC, 30), Дания (DNK, 45), Джерси (44), Ирландия (IRL, 353), Исландия (ISL, 354), Испания (ESP, 34), Италия (ITA, 39), Кипр (СУР, 357), Латвия (LVA, 371), Литва (LTU, 370), Лихтенштейн (LIE, 423, Люксембург (LUX, 352), Македония (MKD, 389), Мальта (MLT, 356), Монако (МСО, 377), Мэн остров (44), Нидерланды (NLD, 31), Норвегия (NOR, 47), Польша (POL, 48), Португалия (PRT, 351), Румыния (ROU, 40), Сан-Марино (SMR, 378), Сербия (SRB, 381), Словакия (SVK, 421), Словения (SVN, 386), Фарерские острова (FRO, 298), Финляндия FIN, 358), Хорватия (HRV, 385), Черногория (382), Чехия (CZE, 420), Швейцария (СНЕ, 41), Швеция (SWE, 46, 883120), Telenor Connexion (883120), Шпицберген (47), Эстония (EST, 372), Ян-Майен (47), Ангилья (1264), Антигуа и Барбуда (1268), Антильские острова (599), Аргентина (54), Аруба (297), Багамские острова (1242), Барбадос (1246), Белиз (501), Бермудские острова (1441), Боливия (591), Бразилия (55), Венесуэла (58), Виргинские острова (Брит.) (1284), Виргинские острова (США) (1340), Гавайские острова (1808), Гаити (509), Гайана (592), Гваделупа (590), Гватемала (502), Гвиана (594, Гондурас (504), Гренада (1473), Гренландия (299), Доминика (1767), Доминиканская Республика (1809; 1829; 1849), Каймановы острова (1345), Канада (1), Колумбия (57), Коста-Рика (506), Куба (53), Мартиника (596), Мексика (52), Монтсеррат (1664), Никарагуа (505), Панама (507), Парагвай (595), Перу (51), Пуэрто-Рико (1787; 1939), Сальвадор (503), Сен-Пьер и Микелон (508), Сент-Винсент и Гренадины (1784), Сент-Киттс и Невис (1869), Сент-Люсия (1758), США (1), Суринам (597), Тёркс и Кайкос острова (1649), Тринидад и Тобаго (1868), Уругвай (598), Фолклендские острова (500), Чили (56), Эквадор (593), Южная Гергия и Южные Сандвичевы острова (500), Ямайка (1876), Афганистан (93), Бангладеш (880), Бахрейн (973), Бруней (673), Бутан (975), Восточный Тимор (670), Вьетнам (84), Гонконг (852), Израиль (972), Индия (91), Индонезия (62), Иордания (962), Иран (98), Ирак (964), Йемен (967), Камбоджа (855), Китай (86), Кувейт (965), Лаос (856, Ливан (961), Макао (853), Малайзия (60), Мальдивы (960), Монголия (976), Мьянма (95), Непал (977), Оман (968), Пакистан (92), Саудовская Аравия (966), Северная Корея (850), Сингапур (65), Сирия (963), Таиланд (66), Тайвань (886), Филиппины (63), Южная Корея (82), Япония (81).</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">170</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Зона 3</span></strong>:</p>
                                                Алжир (213), Ангола (244), Бенин (229), Ботсвана (267), Британская территория в Индийском океане (246), Буркина-Фасо, Габон (241), Гамбия (220), Гана (233), Гвинея (224), Гвинея-Бисау (245), Демократическая Республика Конго (243), Джибути (253), Египет (2), Замбия (260), Западная Сахара (212), Кабо-Верде (238), Камерун (237), Кения (254), Коморские острова (269), Конго (2430, Кот д’Ивуар (225), Лесото (266), Либерия (231), Ливия (218), Маврикий (230), Мавритания (222), Мадагаскар (261), Майотта остров (262), Малави (265), Мали (223), Марокко (212), Мозамбик (258), Намибия (264), Нигер (227), Нигерия (234), Руанда (250), Сан-Томе и Принсипи (239), Свазиленд (268), Святой Елены остров (290), Сейшельские острова (248), Сенегал (221), Сомали (252), Судан (249), Сьерра-Леоне (232), Танзания (255), Того (228), Тунис (216), Турция (90), Уганда (256), Франция (33), Центральноафриканская Республика (236), Чад (235), Экваториальная Гвинея (240), Эритрея (291), Эфиопия (251), ЮАР (27), Южный Судан (211).</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">225</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Зона 4</span></strong>:</p>
                                                Австралия (61), Вануату (678), Катар (974), Шри-Ланка (94), Реюньон (262), ОАЭ (971), Зимбабве (263), другие страны.</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">290</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Зона 5</span></strong>:</p>
                                                Инмарсат (870)</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">1500</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Зона 9</span></strong>:</p>
                                                Все спутниковые сети, кроме Инмарсат</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">720</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                        <li class="faq__item">
                            <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                                <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                    <use xlink:href="#arrow-down"></use>
                                </svg><span class="faq__item-title">Исходящие звонки на фиксированные и мобильные номера за пределы РФ в сети Екатеринбург-2000</span>
                            </button>
                            <div class="faq__item-content-wrapper gl__drop-menu-container js-drop-menu-container">
                                <div class="gl__text gl__drop-menu js-drop-menu">
                                    <p>Стоимость определяется зоной вызова (руб./мин.):</p>
                                    <table class="letaitbl" style="width: 100%;">
                                        <tbody>
                                        <tr>
                                            <td style="text-align: justify;" colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">СНГ</span></strong>:</p>
                                                Армения, Украина, Туркменистан, Таджикистан, Молдова, Кыргызстан, Казахстан, Грузия, Беларусь, Азербайджан, Узбекистан.</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">115</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: justify;" colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Европа</span></strong>:</p>
                                                Ватикан, Норвегия, Нидерланды, Монако, Мальта, Черногория, Македония, Люксембург, Литва, Польша, Румыния, Великобритания, Швейцария, Швеция, Испания, Словения, Словакия, Сербия, Сан Марино, Лихтенштейн, Латвия, Греция, Чехия, Кипр, Хорватия, Болгария, Босния и Герцеговина, Бельгия, Австрия, Андорра, Дания, Эстония, Фарерские острова, Гибралтар, Германия, Италия, Ирландия, Исландия, Венгрия, Франция, Финляндия, Албания.</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">143</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Остальные страны</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">334</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Спутниковая связь</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">1908</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                        <li class="faq__item">
                            <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                                <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                    <use xlink:href="#arrow-down"></use>
                                </svg><span class="faq__item-title">Тарифы на специальные голосовые сервисы в сети Екатеринбург-2000</span>
                            </button>
                            <div class="faq__item-content-wrapper gl__drop-menu-container js-drop-menu-container">
                                <div class="gl__text gl__drop-menu js-drop-menu">
                                    <p>Тарифы на специальные голосовые сервисы (руб./мин.):</p>
                                    <table class="letaitbl" style="width: 100%;">
                                        <tbody>
                                        <tr>
                                            <td style="text-align: justify;" colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 1:</span></strong>:</p>
                                                8800100,8802333,8802505,8802555,8804333,8804777,<br>8805200,8805333,8805500,8805555,8805777,8800777,<br>8800700,8800111,8800200,8800220,8800300,8800303,<br>8800333,8800500,8800505,8800510,8800555,8809505.</td>
                                            <td style="text-align: center; width: 321px;" valign="middle">0</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: justify;" colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 2: 88033331</span></strong>:</p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">36</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 3: 88033332,88093331</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">45</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 4: 88033333</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">53</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 5: 88033334</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">72</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 6: 88033335,88093334,88095057</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">90</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 7: 88033336, 88093335</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">108</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 8: 88033337, 88093336</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">125</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 9: 88033338</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">143</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 10: 88033339</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">179</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 11: 88093332</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">63</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 12: 88093333</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">80</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 13: 88093337</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">152</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 14: 88093338</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">215</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 15: 88093339, 88095051,88095059</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">268</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 16: 88095050</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">10</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 17: 88095052</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">74</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 18: 88095053</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">135</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 19: 88095054</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">164</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 20: 88095055</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">176</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 21: 88095056</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">206</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" width="718.0">
                                                <p><strong><span style="text-decoration: underline;">Интерактивные голосовые сервисы 22: 88095058</span></strong></p>
                                            </td>
                                            <td style="text-align: center; width: 321px;" valign="middle">239</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="faq" id="faq-russia-host">
            <div class="gl__page-content">
                <h2 class="gl__title">Вопросы и ответы</h2>
                <ul class="faq__list-wrapper">
                    <li class="faq__item">
                        <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                            <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg>Как получить автоматические настройки Интернет и MMS?
                        </button>
                        <div class="faq__item-content-wrapper gl__drop-menu-container js-drop-menu-container">
                            <div class="gl__text gl__drop-menu js-drop-menu">
                                <p>Для получения настроек <b>Интернет</b> и/или <b>MMS</b> мобильной связи «Летай»:</p>
                                <p>1. отправьте любой текст на номер 116111 для получения настроек Internet и MMS;</p>
                                <p>2. отправьте текст «111» на 116111 для получения настроек Internet;</p>
                                <p>3. отправьте текст «222» на 116111 для получения настроек MMS.</p>
                                <p>Далее Вам будет доставлено конфигурационное сообщение с настройками, которое необходимо установить на телефоне, в поле запрашиваемого PIN введите «1234». При невозможности установки конфигурационного SMS, произведите ручную настройку.</p>
                            </div>
                        </div>
                    </li>
                    <li class="faq__item">
                        <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                            <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg>Как самостоятельно настроить sms-центр?
                        </button>
                        <div class="faq__item-content-wrapper gl__drop-menu-container js-drop-menu-container">
                            <div class="gl__text gl__drop-menu js-drop-menu">
                                <p>Для отправки СМС-сообщений в поездке по России и в международном роуминге на Вашем мобильном устройстве необходимо настроить номер СМС-центра.</p>
                            </div>
                        </div>
                    </li>
                    <li class="faq__item">
                        <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                            <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg>Для настройки номера СМС-центра на OS Windows 10 Mobile необходимо:
                        </button>
                        <div class="faq__item-content-wrapper gl__drop-menu-container js-drop-menu-container">
                            <div class="gl__text gl__drop-menu js-drop-menu">
                                <ol>
                                    <li>Зайти из главного меню в «Параметры»</li>
                                    <li>Выбрать пункт «Система»</li>
                                    <li>Выбрать «Обмен сообщениями»</li>
                                    <li>В пункте «Номер СМС-центра» прописать: +79506651010</li>
                                </ol>
                            </div>
                        </div>
                    </li>
                    <li class="faq__item">
                        <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                            <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg>Для настройки номера СМС-центра на OS Android необходимо:
                        </button>
                        <div class="faq__item-content-wrapper gl__drop-menu-container js-drop-menu-container">
                            <div class="gl__text gl__drop-menu js-drop-menu">
                                <ol>
                                    <li>Зайти в меню «Сообщения»</li>
                                    <li>Выбрать «Настройки»</li>
                                    <li>В пункте «Номер СМС-центра» прописать: +79506651010 и нажать «Сохранить»</li>
                                </ol>
                            </div>
                        </div>
                    </li>
                    <li class="faq__item">
                        <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                            <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg>Для настройки номера СМС-центра на iOS (iPhone) необходимо:
                        </button>
                        <div class="faq__item-content-wrapper gl__drop-menu-container js-drop-menu-container">
                            <div class="gl__text gl__drop-menu js-drop-menu">
                                <ol>
                                    <li>Необходимо проверить текущий установленный номер СМС-центра, набрав комбинацию: *#5005*7672#</li>
                                    <li>Если номер СМС-центра не соответствует +79506651010, то необходимо его установить, набрав комбинацию: *5005*7672*+79506651010#</li>
                                </ol>
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="/helpdesk/faq/" class="faq__link-show-all">Все вопросы и ответы<svg width="20" height="20" aria-hidden="true" class="faq__link-show-all-icon">
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                </a>
            </div>
        </section>

        <section class="application" id="application-host">
            <img src="/local/js/template/tattelecom-1/img/main-page/application/background.svg" alt="" class="application__background">
            <div class="gl__page-content">
                <div class="application__content">
                    <h2 class="gl__title application__title">Не нашли ответа на свой вопрос?</h2>
                    <div class="application__subtitle mod-no-answer">Напишите нам или позвоните по телефону</div>
                    <a href="tel:+78432222222" class="application__tel">(843) 222-22-22</a>
                    <?$APPLICATION->IncludeComponent(
                        "tattelecom:form",
                        "application__form",
                        [],
                        false
                    );?>
                </div>
            </div>
        </section>
    </div>

    <div class="js-menu-tab-content gl__menu-tab-content" data-menu="world" id="roamingAjax">
        <?if($_REQUEST['set_filter'] === 'Y' && $_GET['ajax'] !== 'N') {
            $GLOBALS['APPLICATION']->RestartBuffer();
        } ?>

        <section class="roaming-without-worries" id="roaming-without-worries-host">
            <div class="gl__page-content">
                <h2 class="gl__title">Роуминг без забот</h2>
                <div class="roaming-without-worries__subtitle">Узнайте, как оптимизировать свои расходы в поездках по миру</div>
                <div class="roaming-without-worries__content-wrapper">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:catalog.filter",
                        "roaming-without-worries",
                        Array(
                            "IBLOCK_TYPE" => "mobile",
                            "IBLOCK_ID" => 28,
                            "FILTER_NAME" => "arrFilter",
                            "FIELD_CODE" => "",
                            "PROPERTY_CODE" => [
                                "COUNTRY", "TYPE"
                            ],
                        ),
                        false
                    );?>
                    <div class="roaming-without-worries__content-image" style="background-image: url('/local/js/template/tattelecom-1/img/roaming-page/man-2.svg')"></div>
                </div>
            </div>
        </section>
        <?
        if($GLOBALS['arrFilter']){
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "pricing-world-plans__list",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("",""),
                    "FILTER_NAME" => "arrFilter",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "28",
                    "IBLOCK_TYPE" => "mobile",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "N",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    // "PARENT_SECTION_CODE" => "world",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("OPTIONS",""),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "SORT",
                    "SORT_BY2" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "ASC",
                    "SORT_ORDER2" => "DESC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            );
        }
        ?>

        <section class="instructions gl__section" id="instructions-host">
            <div class="gl__page-content">
                <h2 class="gl__title">Инструкция по подключению</h2>
                <div class="instructions__subtitle">Чтобы начать пользоваться международным роумингом:</div>
                <ul class="instructions__step-list">
                    <li class="instructions__step-item gl__white-container">
                        <div>
                            <div class="instructions__step-caption">Шаг 1</div>
                            <p class="instructions__step-text">Проверьте, подключен ли роуминг. Для этого обратитесь в Контакт-центр (843) 222-22-22 или наберите USSD команду *116*325#. Подключить роуминг можно в личном кабинете или в офисе продаж</p>
                        </div>
                    </li>
                    <li class="instructions__step-item gl__white-container">
                        <div>
                            <div class="instructions__step-caption">Шаг 2</div>
                            <p class="instructions__step-text">Ознакомьтесь с тарифами на услуги связи и подключите специальную опцию для общения на выгодных условиях</p>
                        </div>
                    </li>
                    <li class="instructions__step-item gl__white-container">
                        <div>
                            <div class="instructions__step-caption">Шаг 3</div>
                            <p class="instructions__step-text">Пополните счет на оптимальную сумму, так как тарифы на связь в роуминге отличаются от тарифов в домашней сети</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="ussd-faq" id="ussd-requests-host">
            <div class="gl__page-content">
                <div class="ussd-faq__content">
                    <h2 class="gl__title">USSD-запросы</h2>
                    <div class="ussd-faq__subtitle">USSD-запросы позволяют выполнить различные действия с вашим номером путем ввода определенной комбинации.</div>
                    <li class="faq__item">
                        <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                            <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg>Общая информация
                        </button>
                        <div class="faq__flexs-list gl__drop-menu-container js-drop-menu-container">
                            <ul class="gl__drop-menu js-drop-menu">
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Баланс лицевого счета</div>
                                    <div class="info-drop-menu__flex-value">*100#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Ваш тарифный план</div>
                                    <div class="info-drop-menu__flex-value">*116*100#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Ваш мобильный номер</div>
                                    <div class="info-drop-menu__flex-value">*116*106#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Список подключенных услуг</div>
                                    <div class="info-drop-menu__flex-value">*116*103#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Пароль к личному кабинету</div>
                                    <div class="info-drop-menu__flex-value">*100*3#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Сумма ежемесячного платежа по рассрочке</div>
                                    <div class="info-drop-menu__flex-value">*116*116#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Информация о программе «Вместе выгодно»</div>
                                    <div class="info-drop-menu__flex-value">*116*117#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Узнать свой «Дополнительный номер»</div>
                                    <div class="info-drop-menu__flex-value">*116*718#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Баланс семейного кэшбэка</div>
                                    <div class="info-drop-menu__flex-value">*103#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Баланс домашнего кэшбэка (Вместе выгодно 2.0)</div>
                                    <div class="info-drop-menu__flex-value">*104#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Запрос остатка трафика (Гб, мин)</div>
                                    <div class="info-drop-menu__flex-value">*116*700#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Запрос остатка интернет-трафика в международном роуминге</div>
                                    <div class="info-drop-menu__flex-value">*102#</div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="faq__item">
                        <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                            <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg>Полезные возможности
                        </button>
                        <div class="faq__flexs-list gl__drop-menu-container js-drop-menu-container">
                            <ul class="gl__drop-menu js-drop-menu">
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Баланс лицевого счета</div>
                                    <div class="info-drop-menu__flex-value">*100#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Ваш тарифный план</div>
                                    <div class="info-drop-menu__flex-value">*116*100#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Ваш мобильный номер</div>
                                    <div class="info-drop-menu__flex-value">*116*106#</div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="faq__item">
                        <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                            <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg>Услуги национального и международного роуминга
                        </button>
                        <div class="faq__flexs-list gl__drop-menu-container js-drop-menu-container">
                            <ul class="gl__drop-menu js-drop-menu">
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Баланс лицевого счета</div>
                                    <div class="info-drop-menu__flex-value">*100#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Ваш тарифный план</div>
                                    <div class="info-drop-menu__flex-value">*116*100#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Ваш мобильный номер</div>
                                    <div class="info-drop-menu__flex-value">*116*106#</div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="faq__item">
                        <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                            <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg>Услуги Интернет
                        </button>
                        <div class="faq__flexs-list gl__drop-menu-container js-drop-menu-container">
                            <ul class="gl__drop-menu js-drop-menu">
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Баланс лицевого счета</div>
                                    <div class="info-drop-menu__flex-value">*100#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Ваш тарифный план</div>
                                    <div class="info-drop-menu__flex-value">*116*100#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Ваш мобильный номер</div>
                                    <div class="info-drop-menu__flex-value">*116*106#</div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="faq__item">
                        <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                            <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg>Услуги Wi-Fi
                        </button>
                        <div class="faq__flexs-list gl__drop-menu-container js-drop-menu-container">
                            <ul class="gl__drop-menu js-drop-menu">
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Баланс лицевого счета</div>
                                    <div class="info-drop-menu__flex-value">*100#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Ваш тарифный план</div>
                                    <div class="info-drop-menu__flex-value">*116*100#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Ваш мобильный номер</div>
                                    <div class="info-drop-menu__flex-value">*116*106#</div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="faq__item">
                        <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                            <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg>Другие
                        </button>
                        <div class="faq__flexs-list gl__drop-menu-container js-drop-menu-container">
                            <ul class="gl__drop-menu js-drop-menu">
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Баланс лицевого счета</div>
                                    <div class="info-drop-menu__flex-value">*100#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Ваш тарифный план</div>
                                    <div class="info-drop-menu__flex-value">*116*100#</div>
                                </li>
                                <li class="info-drop-menu__flex">
                                    <div class="info-drop-menu__flex-caption">Ваш мобильный номер</div>
                                    <div class="info-drop-menu__flex-value">*116*106#</div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </div>
            </div>
        </section>
        <section class="faq" id="faq-world-host">
            <div class="gl__page-content">
                <h2 class="gl__title">Вопросы и ответы</h2>
                <ul class="faq__list-wrapper">
                    <li class="faq__item">
                        <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                            <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg><span class="faq-title">Как звонить в международном роуминге?</span>
                        </button>
                        <div class="faq__item-content-wrapper gl__drop-menu-container js-drop-menu-container">
                            <div class="gl__text gl__drop-menu js-drop-menu">
                                <p>Находясь в международном роуминге, номера телефонов нужно набирать в международном формате:</p>
                                <p>+ код страны • код города • номер телефона. (Например: +37 707 1234567)</p>
                                <p>Чтобы позвонить в Россию на мобильный телефон с федеральным номером, набираем:</p>
                                <p>+ 7 • код сети • номер телефона. (Например: +7 908 3210123)</p>
                            </div>
                        </div>
                    </li>
                    <li class="faq__item">
                        <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                            <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg><span class="faq-title">Как позвонить в справочную службу при нахождении в международном роуминге?</span>
                        </button>
                        <div class="faq__item-content-wrapper gl__drop-menu-container js-drop-menu-container">
                            <div class="gl__text gl__drop-menu js-drop-menu">
                                <p>text 1</p>
                                <p>text 2</p>
                                <p>text 3</p>
                            </div>
                        </div>
                    </li>
                    <li class="faq__item">
                        <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                            <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg><span class="faq-title">Как получить автоматические настройки Интернет и MMS?</span>
                        </button>
                        <div class="faq__item-content-wrapper gl__drop-menu-container js-drop-menu-container">
                            <div class="gl__text gl__drop-menu js-drop-menu">
                                <p>text 1</p>
                                <p>text 2</p>
                                <p>text 3</p>
                            </div>
                        </div>
                    </li>
                    <li class="faq__item">
                        <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                            <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg><span class="faq-title">Как пользоваться услугами роуминга?</span>
                        </button>
                        <div class="faq__item-content-wrapper gl__drop-menu-container js-drop-menu-container">
                            <div class="gl__text gl__drop-menu js-drop-menu">
                                <p>text 1</p>
                                <p>text 2</p>
                                <p>text 3</p>
                            </div>
                        </div>
                    </li>
                    <li class="faq__item">
                        <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                            <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg><span class="faq-title">Как пополнить счет в поездке?</span>
                        </button>
                        <div class="faq__item-content-wrapper gl__drop-menu-container js-drop-menu-container">
                            <div class="gl__text gl__drop-menu js-drop-menu">
                                <p>text 1</p>
                                <p>text 2</p>
                                <p>text 3</p>
                            </div>
                        </div>
                    </li>
                    <li class="faq__item">
                        <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                            <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg><span class="faq-title">Как проверить баланс за границей?</span>
                        </button>
                        <div class="faq__item-content-wrapper gl__drop-menu-container js-drop-menu-container">
                            <div class="gl__text gl__drop-menu js-drop-menu">
                                <p>text 1</p>
                                <p>text 2</p>
                                <p>text 3</p>
                            </div>
                        </div>
                    </li>
                    <li class="faq__item">
                        <button type="button" class="faq__item-btn-wrapper faq__item-btn-hover gl__drop-menu-btn js-drop-menu-btn">
                            <svg width="24" height="24" aria-hidden="true" class="faq__item-btn-icon gl__drop-menu-icon">
                                <use xlink:href="#arrow-down"></use>
                            </svg><span class="faq-title">Как самостоятельно настроить sms-центр?</span>
                        </button>
                        <div class="faq__item-content-wrapper gl__drop-menu-container js-drop-menu-container">
                            <div class="gl__text gl__drop-menu js-drop-menu">
                                <p>text 1</p>
                                <p>text 2</p>
                                <p>text 3</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="" class="faq__link-show-all">Все вопросы и ответы<svg width="20" height="20" aria-hidden="true" class="faq__link-show-all-icon">
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                </a>
            </div>
        </section>

        <?if($_REQUEST['set_filter'] === 'Y' && $_GET['ajax'] !== 'N') {
            die();
        } ?>
    </div>
</div>