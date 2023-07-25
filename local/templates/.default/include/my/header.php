<header class="header mod-tattelekom" id="header-host">
    <div class="header__content">
        <div class="header__main-content">
            <div class="header__top-block">
                <div class="gl__page-content header__tatt-top-block-content_wrap">
                    <a href="<?=SITE_DIR?>" class="header__tatt-top-block-link">
                        <img src="<?=BUILD_PATH?>img/header/logo-tat.svg" alt="" class="header__tatt-top-block-logo">
                    </a>
                    <div class="header__top-block-content header__tatt-top-block-content">
                        <ul class="header__top-menu-items-list gl__md-hide">
                            <li class="header__top-menu-items">
                                <a href="/" class="header__top-menu-items-link _is-active">Таттелеком</a>
                            </li>
                            <li class="header__top-menu-items">
                                <a href="https://tattelecom.ru/" class="header__top-menu-items-link">Частным клиентам</a>
                            </li>
                            <li class="header__top-menu-items">
                                <a href="https://b2b.tattelecom.ru/" class="header__top-menu-items-link">Бизнесу</a>
                            </li>
                        </ul>
                        <div class="header__top-menu-items header__top-menu-hover-nav-container">
                            <button type="button" class="header__top-menu-items-link header__top-menu-hover-nav mod-tattelekom">Ещё<svg width="7" height="3" aria-hidden="true" class="header__top-menu-items-link-icon mod-tatt-arrow-down">
                                    <use xlink:href="#arrow-down"></use>
                                </svg>
                                <div class="header__top-menu-hover-container">
                                    <div class="header__top-menu-hover-content">
                                        <a href="https://b2b.tattelecom.ru/" class="header__top-menu-items-link">Бизнесу</a>
                                        <!--<a href="/" class="header__top-menu-items-link">Таттелеком</a>-->
                                        <a href="https://letai.ru/" class="header__top-menu-items-link">Частным клиентам</a>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="header__top-block-right">
                            <div class="header__contacts-wrapper">
                                <a href="/contacts/offices/" class="header__top-menu-items-link mod-tatt-right-block-link">Офисы продаж</a>
                                <a href="" class="header__top-menu-items-link mod-with-icons mod-tatt-right-block-link">
                                    <svg width="20" height="20" aria-hidden="true" class="header__top-menu-items-link-icon mod-geolocation-tatt">
                                        <use xlink:href="#geolocation-tatt"></use>
                                    </svg>Казань
                                </a>
                                <a href="https://lk.letai.ru/template.LOGIN/" class="header__top-menu-items-link mod-with-icons mod-tatt-right-block-link gl__bg-hide">
                                    <svg width="20" height="20" aria-hidden="true" class="header__top-menu-items-link-icon mod-tatt-person-lk">
                                        <use xlink:href="#person-tatt"></use>
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
                        <a href="/" class="header__logo-link">
                            <img src="<?=BUILD_PATH?>img/header/logo-new.svg" alt="" class="header__logo mod-tatt-logo">
                        </a>
                    </div>
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
                    </div>
                    <div class="header__bottom-block-right gl__bg-show">
                        <div class="header__btns-container">
                            <button type="button" class="header__bottom-btn header__btn-lk">
                                <svg width="30" height="30" aria-hidden="true" class="header__btn-lk-icon">
                                    <use xlink:href="#lk"></use>
                                </svg>
                            </button>
                            <button type="button" class="header__bottom-btn header__btn-burger js-open-side-bar"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?$APPLICATION->IncludeComponent("bitrix:menu", "header__popup-container", Array(
            "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
            "CHILD_MENU_TYPE" => "",    // Тип меню для остальных уровней
            "DELAY" => "N", // Откладывать выполнение шаблона меню
            "MAX_LEVEL" => "2", // Уровень вложенности меню
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
</header>