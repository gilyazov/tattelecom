<header class="header  " id="header-host">
    <div class="header__content" >

        <div class="header__main-content">
            <div class="header__top-block">
                <div class="gl__page-content">
                    <div class="header__top-block-content">
                        <ul class="header__top-menu-items-list gl__md-hide">
                            <li class="header__top-menu-items">
                                <a href="https://my.tattelecom.ru/about" class="header__top-menu-items-link">Таттелеком</a>
                            </li>
                            <li class="header__top-menu-items">
                                <a href="<?=SITE_DIR?>" class="header__top-menu-items-link">Частным клиентам</a>
                            </li>
                            <li class="header__top-menu-items">
                                <a href="https://b2b.tattelecom.ru/" class="header__top-menu-items-link">Бизнесу</a>
                            </li>
                            <li class="header__top-menu-items mod-more">
                                <button type="button" class="header__top-menu-items-link">Ещё</button>
                            </li>
                        </ul>

                        <div class="gl__md-show header__top-menu-mobile-nav">
                            <button type="button" class="header__top-menu-items-link">Частным клиентам</button>
                            <div class="header__top-menu-items-link header__top-menu-hover-nav">Ещё<div class="header__top-menu-hover-container">
                                    <div class="header__top-menu-hover-content">
                                        <a href="https://b2b.tattelecom.ru/" class="header__top-menu-items-link">Бизнесу</a>
                                        <a href="https://my.tattelecom.ru/about" class="header__top-menu-items-link">Таттелеком</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="header__top-block-right">
                            <ul class="header__top-menu-items-list gl__bg-hide">
                                <li class="header__top-menu-items">
                                    <a href="/support/" class="header__top-menu-items-link">Поддержка</a>
                                </li>
                                <li class="header__top-menu-items">
                                    <a href="/offices/" class="header__top-menu-items-link">Офисы продаж</a>
                                </li>
                                <li class="header__top-menu-items">
                                    <a href="/payment/" class="header__top-menu-items-link">Оплата</a>
                                </li>
                            </ul>

                            <div class="header__contacts-wrapper">
                                <a href="" class="header__top-menu-items-link mod-with-icons js-show-location-popup" data-hover-value="location">
                                    <svg width="20" height="20" aria-hidden="true" class="header__top-menu-items-link-icon">
                                        <use xlink:href="#geolocation"></use>
                                    </svg><?=$_SESSION['city']['name']?>
                                </a>
                                <a href="https://lk.letai.ru/template.LOGIN/" target="_blank" class="header__top-menu-items-link mod-with-icons">
                                    <svg width="20" height="20" aria-hidden="true" class="header__top-menu-items-link-icon">
                                        <use xlink:href="#lk"></use>
                                    </svg>
                                    <span class="gl__xs-hide">Личный кабинет</span>
                                    <span class="gl__xs-show">ЛК</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header__bottom-block">
                <div class="gl__page-content header__bottom-block-content">
                    <div class="header__logo-wrapper">
                        <a href="<?=SITE_DIR?>" class="header__logo-link">
                            <img src="<?=BUILD_PATH?>img/header/logo-fly.svg" alt="" class="header__logo mod-fly">
                        </a>
                    </div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:search.form",
                        "header-search",
                        array(
                            "PAGE" => "#SITE_DIR#search/",
                            "USE_SUGGEST" => "N",
                            "COMPONENT_TEMPLATE" => "header-search"
                        ),
                        false
                    );?>
                    <div class="header__bottom-block-right gl__bg-hide">
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "header__bottom-menu-list", Array(
                            "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                            "CHILD_MENU_TYPE" => "",    // Тип меню для остальных уровней
                            "DELAY" => "N", // Откладывать выполнение шаблона меню
                            "MAX_LEVEL" => "1", // Уровень вложенности меню
                            "MENU_CACHE_GET_VARS" => array( // Значимые переменные запроса
                                0 => "",
                            ),
                            "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                            "MENU_CACHE_TYPE" => "N",   // Тип кеширования
                            "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                            "ROOT_MENU_TYPE" => "top",  // Тип меню для первого уровня
                            "USE_EXT" => "Y",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
                        ),
                            false
                        );?>

                        <div class="header__btns-container">
                            <button type="button" class="header__bottom-btn header__btn-search header__hide-when-search js-open-search-btn js-hide-when-search">
                                <svg width="30" height="30" aria-hidden="true" class="header__btn-search-icon">
                                    <use xlink:href="#search"></use>
                                </svg>
                            </button>
                            <button type="button" class="header__bottom-btn header__btn-subscriber gl__main-btn js-open-callback-modal">
                                Стать абонентом
                            </button>
                        </div>
                    </div>

                    <div class="header__bottom-block-right gl__bg-show">
                        <div class="header__btns-container">
                            <a href="https://lk.letai.ru/template.LOGIN/" target="_blank" class="header__bottom-btn header__btn-lk">
                                <svg width="30" height="30" aria-hidden="true" class="header__btn-lk-icon">
                                    <use xlink:href="#lk"></use>
                                </svg>
                            </a>
                            <button type="button" class="header__bottom-btn header__btn-burger js-open-side-bar"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header__popup-container js-header-popup-container">
            <div class="header__popup-wrapper js-header-popup-wrapper">
                <div class="gl__page-content">
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "header-popup-wrapper", Array(
                        "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                        "CHILD_MENU_TYPE" => "",    // Тип меню для остальных уровней
                        "DELAY" => "N", // Откладывать выполнение шаблона меню
                        "MAX_LEVEL" => "4", // Уровень вложенности меню
                        "MENU_CACHE_GET_VARS" => array( // Значимые переменные запроса
                            0 => "",
                        ),
                        "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                        "MENU_CACHE_TYPE" => "N",   // Тип кеширования
                        "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                        "ROOT_MENU_TYPE" => "top",  // Тип меню для первого уровня
                        "USE_EXT" => "Y",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
                    ),
                        false
                    );?>

                    <div class="header__popup-content js-header-popup location-popup-content" data-hover-value="location">
                        <div class="header__popup-item-wrapper">
                            <span class="location-popup-content__heading">Республика Татарстан</span>
                            <?
                            global $arrFilter;
                            $arrFilter = Array(
                                "PROPERTY_MAIN_VALUE" => "Y"
                            );
                            ?>
                            <?$APPLICATION->IncludeComponent("bitrix:news.list", "header__popup-item-list", Array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "IBLOCK_TYPE" => "mobile", // Тип информационного блока (используется только для проверки)
                                "IBLOCK_ID" => "25", // Код информационного блока
                                "NEWS_COUNT" => "20",   // Количество новостей на странице
                                "SORT_BY1" => "NAME",   // Поле для первой сортировки новостей
                                "SORT_ORDER1" => "ASC", // Направление для первой сортировки новостей
                                "FILTER_NAME" => "arrFilter",    // Фильтр
                                "PROPERTY_CODE" => array(   // Свойства
                                    0 => "",
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

                            <?
                            global $arrFilter;
                            $arrFilter = Array(
                                "PROPERTY_MAJOR_VALUE" => "Y"
                            );
                            ?>
                            <?$APPLICATION->IncludeComponent("bitrix:news.list", "header__popup-item-list", Array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "IBLOCK_TYPE" => "mobile", // Тип информационного блока (используется только для проверки)
                                "IBLOCK_ID" => "25", // Код информационного блока
                                "NEWS_COUNT" => "20",   // Количество новостей на странице
                                "SORT_BY1" => "NAME",   // Поле для первой сортировки новостей
                                "SORT_ORDER1" => "ASC", // Направление для первой сортировки новостей
                                "FILTER_NAME" => "arrFilter",    // Фильтр
                                "PROPERTY_CODE" => array(   // Свойства
                                    0 => "",
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
                                "MAJOR" => "Y"
                            ),
                                false
                            );?>
                        </div>
                        <?$APPLICATION->IncludeComponent(
                            "tattelecom:city.select",
                            "",
                            [],
                            false
                        );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>