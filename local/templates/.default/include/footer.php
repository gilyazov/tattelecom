<footer class="footer" id="footer-host">
    <div class="gl__page-content">
        <div class="footer__top-block">
            <div class="footer__top-grid-wrapper">
                <div class="footer__top-grid-item">
                    <div class="footer__link-title gl__drop-menu-btn js-drop-menu-btn">Таттелеком<svg width="24" height="24" aria-hidden="true" class="footer__link-title-icon gl__drop-menu-icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </div>
                    <div class="footer__links-list gl__drop-menu-container js-drop-menu-container">
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "footer_menu", Array(
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
                            "ROOT_MENU_TYPE" => "tattel_bottom",  // Тип меню для первого уровня
                            "USE_EXT" => "Y",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
                        ),
                            false
                        );?>
                    </div>
                </div>
                <div class="footer__top-grid-item">
                    <div class="footer__link-title gl__drop-menu-btn js-drop-menu-btn">Частным клиентам<svg width="24" height="24" aria-hidden="true" class="footer__link-title-icon gl__drop-menu-icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </div>
                    <div class="footer__links-list gl__drop-menu-container js-drop-menu-container">
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "footer_menu", Array(
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
                            "ROOT_MENU_TYPE" => "my_bottom",  // Тип меню для первого уровня
                            "USE_EXT" => "Y",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
                        ),
                            false
                        );?>
<!--                        <ul class="gl__drop-menu js-drop-menu">-->
<!--                            <li class="footer__link-item">-->
<!--                                <a href="" class="footer__link">Мобильная связь</a>-->
<!--                            </li>-->
<!--                            <li class="footer__link-item">-->
<!--                                <a href="" class="footer__link">Интернет</a>-->
<!--                            </li>-->
<!--                            <li class="footer__link-item">-->
<!--                                <a href="" class="footer__link">Телевидение</a>-->
<!--                            </li>-->
<!--                            <li class="footer__link-item">-->
<!--                                <a href="" class="footer__link">Каталог устройств</a>-->
<!--                            </li>-->
<!--                            <li class="footer__link-item">-->
<!--                                <a href="" class="footer__link">Домофония</a>-->
<!--                            </li>-->
<!--                            <li class="footer__link-item">-->
<!--                                <a href="" class="footer__link">Видеонаблюдение</a>-->
<!--                            </li>-->
<!--                        </ul>-->
                    </div>
                </div>
                <div class="footer__top-grid-item">
                    <div class="footer__link-title gl__drop-menu-btn js-drop-menu-btn">Бизнесу<svg width="24" height="24" aria-hidden="true" class="footer__link-title-icon gl__drop-menu-icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </div>
                    <div class="footer__links-list gl__drop-menu-container js-drop-menu-container">
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "footer_menu", Array(
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
                            "ROOT_MENU_TYPE" => "b2b_bottom",  // Тип меню для первого уровня
                            "USE_EXT" => "Y",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
                        ),
                            false
                        );?>
                    </div>
                </div>
                <div class="footer__top-grid-item mod-first-half-row">
                    <div class="footer__link-title gl__drop-menu-btn js-drop-menu-btn">Партнерам<svg width="24" height="24" aria-hidden="true" class="footer__link-title-icon gl__drop-menu-icon">
                            <use xlink:href="#arrow-down"></use>
                        </svg>
                    </div>
                    <div class="footer__links-list gl__drop-menu-container js-drop-menu-container">
                        <ul class="gl__drop-menu js-drop-menu">
                            <li class="footer__link-item">
                                <a href="" class="footer__link">Поставщикам</a>
                            </li>
                            <li class="footer__link-item">
                                <a href="" class="footer__link">Операторам связи</a>
                            </li>
                            <li class="footer__link-item">
                                <a href="" class="footer__link">Дилерам</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer__top-grid-item mod-second-half-row">
                    <a href="/fly-old-number.html" class="gl__main-btn mod-transparent footer__btn">Перейти в «Летай»</a>
                </div>
            </div>
        </div>
        <div class="footer__bottom-block">
            <div class="footer__bottom-block-info">
                <ul class="footer__additional-info-links-list">
                    <li class="footer__additional-info-link-item">
                        <a href="" class="footer__additional-info-link">Раскрытие информации</a>
                    </li>
                    <li class="footer__additional-info-link-item">
                        <a href="" class="footer__additional-info-link">Лицензии и сертификаты</a>
                    </li>
                    <li class="footer__additional-info-link-item">
                        <a href="" class="footer__additional-info-link">Закупки</a>
                    </li>
                    <li class="footer__additional-info-link-item">
                        <a href="" class="footer__additional-info-link">Приложения</a>
                    </li>
                </ul>
            </div>
            <div class="footer__bottom-block-contacts">
                <div class="footer__contacts-title">Контакт-центр:</div>
                <div class="footer__contact-phone-wrapper">
                    <a href="tel:+78432222222" class="footer__contact-phone">(843) 222-22-22</a>
                </div>
                <div class="footer__contact-social-wrapper">
                    <a href="" class="footer__contact-social-link">
                        <svg width="40" height="40" aria-hidden="true" class="footer__contact-social-icon">
                            <use xlink:href="#vk-footer"></use>
                        </svg>
                    </a>
                    <a href="" class="footer__contact-social-link">
                        <svg width="40" height="40" aria-hidden="true" class="footer__contact-social-icon">
                            <use xlink:href="#inst-footer"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="footer__bottom-block-agreement-wrapper">
                <div class="footer__agreement-text">Продолжая использовать наш сайт, вы даете согласие на обработку файлов Cookies и других пользовательских данных, в соответствии с<a href="" class="footer__agreement-link">Политикой конфиденциальности</a>.</div>
                <div class="footer__copyright">© <?=date('Y');?> ПАО «Таттелеком»</div>
            </div>
        </div>
    </div>
</footer>