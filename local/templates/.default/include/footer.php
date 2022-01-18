<footer class="footer" id="footer-host">
    <div class="gl__page-content">
        <?$APPLICATION->IncludeComponent("bitrix:menu", "footer__top", Array(
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
        <div class="footer__bottom-block">
            <div class="footer__bottom-block-info">
                <?php $APPLICATION->IncludeComponent("bitrix:menu", "footer_menu_horizontal", Array(
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
                    "ROOT_MENU_TYPE" => "bottom_horizontal",  // Тип меню для первого уровня
                    "USE_EXT" => "Y",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
                ),
                    false
                );?>
            </div>
            <div class="footer__bottom-block-contacts">
                <div class="footer__contacts-title">Контакт-центр:</div>
                <div class="footer__contact-phone-wrapper">
                    <a href="tel:+7<?php echo preg_replace("/\D/","",\Bitrix\Main\Config\Option::get( "askaron.settings", "UF_CONTACT_CENTER"));?>" class="footer__contact-phone"><?php echo \Bitrix\Main\Config\Option::get( "askaron.settings", "UF_CONTACT_CENTER");?></a>
                </div>
                <div class="footer__contact-social-wrapper">
                    <a target="_blank" href="<?=\Bitrix\Main\Config\Option::get( "askaron.settings", "UF_VK")?>" class="footer__contact-social-link">
                        <svg width="40" height="40" aria-hidden="true" class="footer__contact-social-icon">
                            <use xlink:href="#vk-footer"></use>
                        </svg>
                    </a>
                    <a target="_blank" href="<?=\Bitrix\Main\Config\Option::get( "askaron.settings", "UF_INSTA")?>" class="footer__contact-social-link">
                        <svg width="40" height="40" aria-hidden="true" class="footer__contact-social-icon">
                            <use xlink:href="#inst-footer"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="footer__bottom-block-agreement-wrapper">
                <div class="footer__agreement-text">Продолжая использовать наш сайт, вы даете согласие на обработку файлов Cookies и других пользовательских данных, в соответствии с <a href="https://tattelecom.ru/policy.php" target="_blank" class="footer__agreement-link">Политикой конфиденциальности</a>.</div>
                <div class="footer__copyright">© <?=date('Y');?> ПАО «Таттелеком». Сайт является СМИ. <a target="_blank" href="<?=CFile::GetPath(\Bitrix\Main\Config\Option::get( "askaron.settings", "UF_SMI_LICENSE"));?>">Эл №ФС77-66502 от 14.07.2016</a></div>
            </div>
        </div>
    </div>
</footer>