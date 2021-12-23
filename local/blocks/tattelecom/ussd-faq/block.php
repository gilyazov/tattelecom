<section class="ussd-faq" id="ussd-requests-host">
    <div class="gl__page-content">
        <div class="ussd-faq__content">
            <h2 class="gl__title">USSD-запросы</h2>
            <div class="ussd-faq__subtitle">USSD-запросы позволяют выполнить различные действия с вашим номером путем ввода определенной комбинации.</div>

            <?$APPLICATION->IncludeComponent("bitrix:news.list", "ussd-faq", Array(
                "COMPONENT_TEMPLATE" => ".default",
                "IBLOCK_TYPE" => "mobile", // Тип информационного блока (используется только для проверки)
                "IBLOCK_ID" => "19", // Код информационного блока
                "NEWS_COUNT" => "20",   // Количество новостей на странице
                "SORT_BY1" => "SORT",   // Поле для первой сортировки новостей
                "SORT_ORDER1" => "ASC", // Направление для первой сортировки новостей
                "SORT_BY2" => "ACTIVE_FROM",    // Поле для второй сортировки новостей
                "SORT_ORDER2" => "DESC",    // Направление для второй сортировки новостей
                "FILTER_NAME" => "",    // Фильтр
                "FIELD_CODE" => array(  // Поля
                    0 => "",
                    1 => "",
                ),
                "PROPERTY_CODE" => array(   // Свойства
                    0 => "USSD",
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

            <ul>
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
            </ul>
        </div>
    </div>
</section>