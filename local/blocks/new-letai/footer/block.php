<footer class="page-footer">
    <div class="page-footer__content">
        <?$APPLICATION->IncludeComponent("bitrix:menu", "page-footer__nav", Array(
            "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
            "CHILD_MENU_TYPE" => "",    // Тип меню для остальных уровней
            "DELAY" => "N", // Откладывать выполнение шаблона меню
            "MAX_LEVEL" => "3", // Уровень вложенности меню
            "MENU_CACHE_GET_VARS" => array( // Значимые переменные запроса
                0 => "",
            ),
            "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
            "MENU_CACHE_TYPE" => "N",   // Тип кеширования
            "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
            "ROOT_MENU_TYPE" => "footer",  // Тип меню для первого уровня
            "USE_EXT" => "Y",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
        ),
            false
        );?>
    </div>
</footer>