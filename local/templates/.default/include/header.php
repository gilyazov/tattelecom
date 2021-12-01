<header class="header  " id="header-host">
    <div class="header__content" >

        <div class="header__main-content">
            <div class="header__top-block">
                <div class="gl__page-content">
                    <div class="header__top-block-content">
                        <ul class="header__top-menu-items-list gl__md-hide">
                            <li class="header__top-menu-items">
                                <a href="" class="header__top-menu-items-link">Таттелеком</a>
                            </li>
                            <li class="header__top-menu-items">
                                <a href="" class="header__top-menu-items-link">Частным клиентам</a>
                            </li>
                            <li class="header__top-menu-items">
                                <a href="" class="header__top-menu-items-link">Бизнесу</a>
                            </li>
                            <li class="header__top-menu-items">
                                <button type="button" class="header__top-menu-items-link">Ещё</button>
                            </li>
                        </ul>

                        <button type="button" class="header__top-menu-items-link gl__md-show">
                            Частным клиентам
                        </button>

                        <div class="header__top-block-right">
                            <ul class="header__top-menu-items-list gl__bg-hide">
                                <li class="header__top-menu-items">
                                    <a href="" class="header__top-menu-items-link">Поддержка</a>
                                </li>
                                <li class="header__top-menu-items">
                                    <a href="" class="header__top-menu-items-link">Офисы продаж</a>
                                </li>
                                <li class="header__top-menu-items">
                                    <a href="" class="header__top-menu-items-link">Оплата</a>
                                </li>
                            </ul>

                            <div class="header__contacts-wrapper">
                                <a href="" class="header__top-menu-items-link mod-with-icons">
                                    <svg width="20" height="20" aria-hidden="true" class="header__top-menu-items-link-icon">
                                        <use xlink:href="#geolocation"></use>
                                    </svg>
                                    Казань
                                </a>
                                <a href="" class="header__top-menu-items-link mod-with-icons">
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
                            <button type="button" class="header__bottom-btn header__btn-search">
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
                            <button type="button" class="header__bottom-btn header__btn-lk">
                                <svg width="30" height="30" aria-hidden="true" class="header__btn-lk-icon">
                                    <use xlink:href="#lk"></use>
                                </svg>
                            </button>

                            <button type="button" class="header__bottom-btn header__btn-burger"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header__popup-container js-header-popup-container">
            <div class="header__popup-wrapper js-header-popup-wrapper">
                <div class="gl__page-content">
                    <div class="header__popup-content js-header-popup" data-hover-value="mobile">
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Тарифы</a>
                            <ul class="header__popup-item-list">
                                <li><a href="" class="header__popup-item-link">Безлимитный интернет</a></li>
                                <li><a href="" class="header__popup-item-link">Много звонков</a></li>
                                <li><a href="" class="header__popup-item-link">Все и сразу</a></li>
                                <li><a href="" class="header__popup-item-link">Детский</a></li>
                                <li><a href="" class="header__popup-item-link">Для модемов</a></li>
                                <li><a href="" class="header__popup-item-link">Для умных устройств</a></li>
                            </ul>
                        </div>
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Стать абонентом Летай</a>
                            <ul class="header__popup-item-list">
                                <li><a href="" class="header__popup-item-link">Выбрать красивый номер</a></li>
                                <li><a href="" class="header__popup-item-link">Перейти со своим номером</a></li>
                                <li><a href="" class="header__popup-item-link">Заказать доставку сим-карты</a></li>
                            </ul>
                        </div>
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Акции</a>
                            <ul class="header__popup-item-list">
                                <li><a href="" class="header__popup-item-link">Вместе выгодно 2.0</a></li>
                                <li><a href="" class="header__popup-item-link">Вместе выгодно</a></li>
                            </ul>
                        </div>
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Роуминг</a>
                            <ul class="header__popup-item-list">
                                <li><a href="" class="header__popup-item-link">В поездках по России</a></li>
                                <li><a href="" class="header__popup-item-link">В поездках за границей</a></li>
                            </ul>
                        </div>
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Оплата услуг</a>
                        </div>
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Полезные команды</a>
                        </div>
                    </div>

                    <div class="header__popup-content js-header-popup" data-hover-value="internet">
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Тарифы</a>
                            <ul class="header__popup-item-list">
                                <li><a href="" class="header__popup-item-link">Домашний интернет + ТВ + мобильная связь</a></li>
                                <li><a href="" class="header__popup-item-link">Домашний интернет</a></li>
                                <li><a href="" class="header__popup-item-link">Домашний интернет + ТВ</a></li>
                                <li><a href="" class="header__popup-item-link">Интернет + ТВ для частного дома</a></li>
                            </ul>
                        </div>
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Акции</a>
                            <ul class="header__popup-item-list">
                                <li><a href="" class="header__popup-item-link">Вместе выгодно 2.0</a></li>
                                <li><a href="" class="header__popup-item-link">Вместе выгодно</a></li>
                            </ul>
                        </div>
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Дополнительные услуги</a>
                            <ul class="header__popup-item-list">
                                <li><a href="" class="header__popup-item-link">Антивирус</a></li>
                                <li><a href="" class="header__popup-item-link">Статичный IP</a></li>
                            </ul>
                        </div>
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Оплата услуг</a>
                        </div>
                    </div>

                    <div class="header__popup-content js-header-popup" data-hover-value="tv">
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Тарифы</a>
                            <ul class="header__popup-item-list">
                                <li><a href="" class="header__popup-item-link">Базовый пакет каналов</a></li>
                                <li><a href="" class="header__popup-item-link">Дополнительные пакеты каналов</a></li>
                            </ul>
                        </div>
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Акции</a>
                            <ul class="header__popup-item-list">
                                <li><a href="" class="header__popup-item-link">Вместе выгодно 2.0</a></li>
                                <li><a href="" class="header__popup-item-link">Вместе выгодно</a></li>
                            </ul>
                        </div>
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Онлайн ТВ</a>
                        </div>
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Оплата услуг</a>
                        </div>
                    </div>

                    <div class="header__popup-content js-header-popup" data-hover-value="doorphone">
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Тарифы</a>
                        </div>
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Акции</a>
                        </div>
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Онлайн ТВ</a>
                        </div>
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Оплата услуг</a>
                        </div>
                    </div>

                    <div class="header__popup-content js-header-popup" data-hover-value="catalog">
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Смартфоны</a>
                            <ul class="header__popup-item-list">
                                <li><a href="" class="header__popup-item-link">Смартфоны Honor</a></li>
                                <li><a href="" class="header__popup-item-link">Смартфоны Samsung</a></li>
                                <li><a href="" class="header__popup-item-link">Смартфоны Oppo</a></li>
                                <li><a href="" class="header__popup-item-link">Смартфоны Realme</a></li>
                                <li><a href="" class="header__popup-item-link">Смартфон Xiaomi</a></li>
                            </ul>
                        </div>
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Смарт-часы и Фитнес-браслеты</a>
                        </div>
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Наушники и колонки</a>
                        </div>
                        <div class="header__popup-item-wrapper">
                            <a href="/" class="header__popup-item-caption">Аксессуары</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>