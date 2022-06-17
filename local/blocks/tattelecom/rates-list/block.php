<section class="rates-list" id="rates-list-host">
    <div class="gl__page-content">
        <div class="gl__title-head">
            <h2 class="gl__title">Тарифы мобильной связи</h2>
            <div class="gl__xs-hide">
                <a href="/mobile/rates/" class="gl__link-show-all">Все тарифы<svg width="20" height="20" aria-hidden="true" class="gl__link-show-all-icon">
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                </a>
            </div>
        </div>
        <?
        global $arrFilterCity;
        $arrFilterCity[0][1] = [
            "!ID" => \CIBlockElement::SubQuery(
                "ID",
                array(
                    "IBLOCK_ID" => 6,
                    "PROPERTY_EXCLUDE_CITY" => $_SESSION['city']['id'],
                )
            )
        ];
        ?>
        <?$APPLICATION->IncludeComponent("tattelecom:rates.list", "gl-slider-rates", Array(
            "COMPONENT_TEMPLATE" => ".default",
            "IBLOCK_TYPE" => "mobile", // Тип информационного блока (используется только для проверки)
            "IBLOCK_ID" => "6", // Код информационного блока
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