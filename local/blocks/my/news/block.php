<?php
// На основе GET-параметров собираем фильтр и фильтруем выдачу
// Проверяем на заполнение. Если оба GET-параметра пустые, то в компонет отправляем пустой фильтр
global $technicalWorksFilter;

if($_GET['year'] == "" && $_GET["month"] == "") {
    $technicalWorksFilter = array("PROPERTY_TYPE_VALUE" => "О компании");
} else {
    // 1. Месяц
    // Если месяц не задан, то выбираем диапазон от Января до Декабря
    if(!empty($_GET['month'])) {
        $monthStart = $_GET['month'];
        $monthEnd = $_GET['month'];
    } else {
        $monthStart = '01';
        $monthEnd = '12';
    }

    // 2. Год
    // Если год не задан, то выбираем текущий.
    // Это понадобится, если в фильтре задать месяц, но не задать год.
    // Тогда отфильтруется по текущему году.
    if(!empty($_GET['year']) || !($_GET['year'] == "")) {
        $year = $_GET['year'];
    } else {
        $year = date('Y');
    }

    // 3. Фильтр
    // Собираем фильтр для компонента news.list
    $technicalWorksFilter = array(
        "LOGIC" => "AND",
        ">=DATE_ACTIVE_FROM" => '01.' . $monthStart . '.' . $year,
        "<=DATE_ACTIVE_FROM" => '29.' . $monthEnd . '.' . $year,
        "PROPERTY_TYPE_VALUE" => "О компании"
    );
}
?>

    <h2 class="gl__title">Новости</h2>
    <?php $APPLICATION->IncludeComponent("bitrix:news.list","tatt-news",Array(
            "IBLOCK_TYPE" => "mobile",
            "IBLOCK_ID" => "29",
            "NEWS_COUNT" => "9",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_ORDER1" => "DESC",
            "SORT_BY2" => "SORT",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "technicalWorksFilter",
            "FIELD_CODE" => [],
            "PROPERTY_CODE" => [],
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "/press-center/news/#ELEMENT_CODE#/",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "SET_TITLE" => "N",
            "SET_BROWSER_TITLE" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_META_DESCRIPTION" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "PARENT_SECTION" => "",
            "INCLUDE_SUBSECTIONS" => "N",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600",
            "CACHE_FILTER" => "Y",
            "CACHE_GROUPS" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "PAGER_TITLE" => "",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => "",
            "SET_STATUS_404" => "N",
            "SHOW_404" => "N",
            "MESSAGE_404" => ""
        )
    );?>