<section class="b-tariffs-list gl__section">
    <div class="gl__page-content">
        <h2 class="gl__title">Тарифы</h2>
        <div class="b-tariffs-list__content">
            <div class="gl-slider js-swiper" data-swiper-slides-preview="4">
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
                <?$APPLICATION->IncludeComponent("bitrix:news.list", "rates-list", Array(
                    "COMPONENT_TEMPLATE" => "rates-list",
                    "IBLOCK_TYPE" => "buisness", // Тип информационного блока (используется только для проверки)
                    "IBLOCK_ID" => "33", // Код информационного блока
                    "NEWS_COUNT" => "20",   // Количество новостей на странице
                    "SORT_BY1" => "NAME",   // Поле для первой сортировки новостей
                    "SORT_ORDER1" => "ASC", // Направление для первой сортировки новостей
                    //"FILTER_NAME" => "arrFilter",    // Фильтр
                    "PROPERTY_CODE" => array(   // Свойства
                        0 => "BENEFITS",
                        1 => "B_ICO",
                        2 => "B_VALUE",
                        3 => "PRICE",
                        4 => "OLD_PRICE",
                        5 => "TARIFFING",
                        6 => "CONDITIONS",
                        7 => "ATTACHMENTS",
                        8 => "NOTES",
                        9 => "NOTES_T",
                        10 => "NOTES_V"
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
        </div>
        <div class="gl__b-hint-nds mod-no-line">Тарифы указаны с учетом НДС</div>
    </div>
</section>
