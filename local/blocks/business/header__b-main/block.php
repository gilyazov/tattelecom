<div class="gl__page-content">
    <div class="header__b-main-page-menu-content js-header-popup" id="header-b-main-page-menu-content">
        <?$APPLICATION->IncludeComponent("bitrix:menu", "header__b-main", Array(
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

        <div class="header__b-main-page-menu-tel-wrapper">
            <div class="header__b-main-page-menu-tel-title">Свяжитесь с нами</div>
            <div>
                <div class="header__b-main-page-menu-tel-caption">Контакт-центр:</div>
                <a href="tel:+78432380000" class="header__b-main-page-menu-tel-link">(843) 238-00-00</a>
                <button type="button" class="header__b-main-page-menu-btn js-open-callback-modal">Подобрать решение</button>
            </div>
        </div>
    </div>
</div>