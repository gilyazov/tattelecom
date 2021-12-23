<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
/** @global CMain $APPLICATION */
$APPLICATION->SetTitle("Технические работы");
?>

<?php
// На основе GET-параметров собираем фильтр и фильтруем выдачу
// Проверяем на заполнение. Если оба GET-параметра пустые, то в компонет отправляем пустой фильтр
if($_GET['year'] == "" && $_GET["month"] == "") {
    $technicalWorksFilter = array();
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
        "<=DATE_ACTIVE_FROM" => '29.' . $monthEnd . '.' . $year
    );
}
?>

<section class="technical-works" id="technical-works-host">
    <div class="gl__page-content">
        <h2 class="gl__title">Технические работы</h2>
        <?php $APPLICATION->IncludeComponent("bitrix:news.list","technical-works-list",Array(
                "IBLOCK_TYPE" => "support",
                "IBLOCK_ID" => "27",
                "NEWS_COUNT" => "10",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "technicalWorksFilter",
                "FIELD_CODE" => Array("ID", "NAME", "PREVIEW_TEXT"),
                "PROPERTY_CODE" => Array(),
                "CHECK_DATES" => "N",
                "DETAIL_URL" => "/#SECTION_CODE#/#ELEMENT_CODE#/",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d F Y",
                "SET_TITLE" => "N",
                "PAGER_TEMPLATE" => "pagination",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "CACHE_TYPE" => "N",
                "CACHE_TIME" => "0"
            )
        );?>
    </div>
</section>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
