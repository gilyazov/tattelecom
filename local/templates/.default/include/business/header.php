<header class="header mod-business<?=($APPLICATION->GetCurPage(false) === "" ? " js-business-main" : "")?>" id="header-host">
    <div class="header__content" style="background-image: url('<?=BUILD_PATH?>img/header/buliness-background.jpg')">
        <div class="header__main-content">
            <div class="header__top-block">
                <div class="gl__page-content">
                    <div class="header__top-block-content">
                        <ul class="header__top-menu-items-list gl__md-hide">
                            <li class="header__top-menu-items">
                                <a href="#" target="_blank" class="header__top-menu-items-link">Таттелеком</a>
                            </li>
                            <li class="header__top-menu-items">
                                <a href="https://tattelecom.ru/" target="_blank" class="header__top-menu-items-link">Частным клиентам</a>
                            </li>
                            <li class="header__top-menu-items">
                                <a href="<?=SITE_DIR?>" class="header__top-menu-items-link">Бизнесу</a>
                            </li>
                            <li class="header__top-menu-items">
                                <a href="" class="header__top-menu-items-link">Акции</a>
                            </li>
                            <li class="header__top-menu-items mod-more">
                                <button type="button" class="header__top-menu-items-link">Ещё</button>
                            </li>
                        </ul>
                        <div class="gl__md-show header__top-menu-mobile-nav">
                            <button type="button" class="header__top-menu-items-link">Частным клиентам</button>
                            <div class="header__top-menu-items-link header__top-menu-hover-nav mod-b-top-menu-hover">Ещё<div class="header__top-menu-hover-container">
                                    <div class="header__top-menu-hover-content">
                                        <a href="" class="header__top-menu-items-link">Бизнесу</a>
                                        <a href="" class="header__top-menu-items-link">Таттелеком</a>
                                        <a href="" class="header__top-menu-items-link">Частным клиента</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header__top-block-right">
                            <ul class="header__top-menu-items-list gl__bg-hide">
                                <li class="header__top-menu-items">
                                    <a href="" class="header__top-menu-items-link">Поддержка</a>
                                </li>
                            </ul>
                            <div class="header__contacts-wrapper">
                                <a href="" class="header__top-menu-items-link mod-with-icons js-show-location-popup" data-hover-value="location">
                                    <svg width="20" height="20" aria-hidden="true" class="header__top-menu-items-link-icon">
                                        <use xlink:href="#geolocation"></use>
                                    </svg><?=$_SESSION['city']['name']?>
                                </a>
                                <a href="https://web.tattelecom.ru/" target="_blank" class="header__top-menu-items-link mod-with-icons">
                                    <svg width="20" height="20" aria-hidden="true" class="header__top-menu-items-link-icon">
                                        <use xlink:href="#lk"></use>
                                    </svg>Войти
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__b-bottom-block">
                <div class="gl__page-content header__bottom-block-content">
                    <div class="header__logo-wrapper">
                        <a href="<?=SITE_DIR?>" class="header__logo-link">
                            <img src="<?=BUILD_PATH?>img/header/logo-business.svg" alt="" class="header__logo mod-business">
                        </a>
                    </div>
                    <div class="header__bottom-block-right<?=($APPLICATION->GetCurPage(false) !== '/' ? " mod-show" : "")?> mod-business gl__bg-hide js-b-menu-header header__hide-when-search js-hide-when-search">
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
                    </div>
                    <form class="header__input-search-form js-show-when-search mod-business">
                        <label class="header__input-search-wrapper">
                            <svg width="24" height="24" aria-hidden="true" class="header__input-search-icon">
                                <use xlink:href="#search"></use>
                            </svg>
                            <input type="text" class="header__input-search js-input-search" placeholder="Поиск">
                            <button type="button" class="header__search-btn-close js-close-search-btn">
                                <svg width="30" height="30" aria-hidden="true" class="header__search-btn-close-icon">
                                    <use xlink:href="#close"></use>
                                </svg>
                            </button>
                        </label>
                    </form>
                    <div class="header__bottom-block-right header__hide-when-search js-hide-when-search">
                        <div class="header__btns-container">
                            <button type="button" class="header__bottom-btn header__btn-search js-open-search-btn gl__lg-hide">
                                <svg width="30" height="30" aria-hidden="true" class="header__btn-search-icon mod-business">
                                    <use xlink:href="#search"></use>
                                </svg>
                            </button>
                            <button type="button" class="header__b-main-page-menu-btn gl__mx-hide">Подобрать решение</button>
                            <button type="button" class="header__bottom-btn header__btn-burger gl__bg-show mod-business js-open-side-bar"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__popup-container mod-business js-header-popup-container">
            <div class="header__popup-wrapper mod-business js-header-popup-wrapper" style="background-image: url('<?=BUILD_PATH?>img/header/buliness-background.jpg')">
                <div class="gl__page-content">
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "header-business-popup-wrapper", Array(
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
                    <div class="header__b-popup-content js-header-popup js-b-popup-margin" data-alignment="0" data-hover-value="business-solutions">
                        <ul>
                            <li>
                                <a href="" class="header__b-menu-item-control">
                                    <img src="<?=BUILD_PATH?>img/header/business-menu/squares.svg" alt="" class="header__b-menu-item-control-icon"> Комплекс услуг связи (Единый бизнес)
                                </a>
                            </li>
                            <li>
                                <a href="" class="header__b-menu-item-control">
                                    <img src="<?=BUILD_PATH?>img/header/business-menu/tree.svg" alt="" class="header__b-menu-item-control-icon"> Виртуальная АТС
                                </a>
                            </li>
                            <li>
                                <a href="" class="header__b-menu-item-control">
                                    <img src="<?=BUILD_PATH?>img/header/business-menu/files.svg" alt="" class="header__b-menu-item-control-icon"> Таттелеком Коннект (ЭДокс)
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__b-popup-content js-header-popup js-b-popup-margin" data-alignment="0" data-hover-value="connection">
                        <div class="header__b-popup-content-item">
                            <div class="header__b-popup-caption-list">
                                <img src="<?=BUILD_PATH?>img/header/business-menu/tel.svg" alt="" class="header__b-menu-item-control-icon"> Мобильная связь
                            </div>
                            <ul class="header__b-popup-list">
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Тарифы Мобильной связи</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Тарифы Мобильного интернета</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Роуминг</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">«Красивый» номер</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header__b-popup-content-item">
                            <div class="header__b-popup-caption-list">
                                <img src="<?=BUILD_PATH?>img/header/business-menu/internet.svg" alt="" class="header__b-menu-item-control-icon"> Интернет
                            </div>
                            <ul class="header__b-popup-list">
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Интернет для офиса</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Интернет Wi-Fi</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Интернет по Радиоканалу</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Виртуальные сети IP VPN</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header__b-popup-content-item">
                            <div class="header__b-popup-caption-list">
                                <img src="<?=BUILD_PATH?>img/header/business-menu/telephony.svg" alt="" class="header__b-menu-item-control-icon"> Телефония
                            </div>
                            <ul class="header__b-popup-list">
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Междугородная и международная связь</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Виртуальная АТС</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Цифровая Телефония</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Сервисы и услуги</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header__b-popup-content js-header-popup js-b-popup-margin" data-hover-value="digital-services">
                        <div class="header__b-popup-content-item">
                            <div class="header__b-popup-caption-list">
                                <img src="<?=BUILD_PATH?>img/header/business-menu/internet-things.svg" alt="" class="header__b-menu-item-control-icon"> Интернет вещей
                            </div>
                            <ul class="header__b-popup-list">
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">LoRaWAN</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">М2М решения для бизнеса</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header__b-popup-content-item">
                            <div class="header__b-popup-caption-list">
                                <img src="<?=BUILD_PATH?>img/header/business-menu/data-processing.svg" alt="" class="header__b-menu-item-control-icon"> Обработка и хранение данных
                            </div>
                            <ul class="header__b-popup-list">
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Colocation</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Виртуальный сервер</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Web–хостинг</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Регистрация доменов</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header__b-popup-content-item">
                            <div class="header__b-popup-caption-list">
                                <img src="<?=BUILD_PATH?>img/header/business-menu/control.svg" alt="" class="header__b-menu-item-control-icon"> Контроль и видеонаблюдение
                            </div>
                            <ul class="header__b-popup-list">
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Облачное видеонаблюдение</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">М2М Контроль</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Видеоаналитика</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Домофония</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header__b-popup-content-item">
                            <div class="header__b-popup-caption-list">
                                <img src="<?=BUILD_PATH?>img/header/business-menu/safety.svg" alt="" class="header__b-menu-item-control-icon"> Безопасность
                            </div>
                            <ul class="header__b-popup-list">
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">DDoS защита</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header__b-popup-content-item">
                            <div class="header__b-popup-caption-list">
                                <img src="<?=BUILD_PATH?>img/header/business-menu/solutions.svg" alt="" class="header__b-menu-item-control-icon"> Решения для бизнеса
                            </div>
                            <ul class="header__b-popup-list">
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Видеоконференцсвязь</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Услуги Ак Барс Банк</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header__b-popup-content js-header-popup js-b-popup-margin" data-alignment="3" data-hover-value="promotion">
                        <ul>
                            <li>
                                <a href="" class="header__b-menu-item-control">
                                    <img src="<?=BUILD_PATH?>img/header/business-menu/sms.svg" alt="" class="header__b-menu-item-control-icon"> SMS рассылка
                                </a>
                            </li>
                            <li>
                                <a href="" class="header__b-menu-item-control">
                                    <img src="<?=BUILD_PATH?>img/header/business-menu/call-center.svg" alt="" class="header__b-menu-item-control-icon"> Услуги Call–центра
                                </a>
                            </li>
                            <li>
                                <a href="" class="header__b-menu-item-control">
                                    <img src="<?=BUILD_PATH?>img/header/business-menu/smart-wifi.svg" alt="" class="header__b-menu-item-control-icon"> SMART Wi-Fi
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="header__b-popup-content js-header-popup js-b-popup-margin location-popup-content mod-b-popup-content" data-hover-value="location">
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
                            "business",
                            [],
                            false
                        );?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>