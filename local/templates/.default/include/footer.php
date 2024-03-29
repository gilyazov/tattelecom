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

    </div>

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
            <div class="footer__contact-phone-wrapper" itemscope itemtype="http://schema.org/Organization">
                <?
                    $phoneCode = (SITE_ID == "s2" ? "UF_B2B_CONTACT_CENTER" : "UF_CONTACT_CENTER");
                ?>
                <a href="tel:+7<?php echo preg_replace("/\D/","",\Bitrix\Main\Config\Option::get( "askaron.settings", $phoneCode));?>" class="footer__contact-phone">
                    <span itemprop="telephone"><?php echo \Bitrix\Main\Config\Option::get( "askaron.settings", $phoneCode);?></span>
                </a>
            </div>
            <?$APPLICATION->IncludeComponent("bitrix:news.list", "footer-socials",
                Array(
                    "IBLOCK_TYPE" => "about",
                    "IBLOCK_ID" => "51",
                    "NEWS_COUNT" => "999",
                    "SORT_BY1" => "SORT",
                    "SORT_ORDER1" => "ASC",
                    "SORT_BY2" => "ACTIVE_FROM",
                    "SORT_ORDER2" => "DESC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => [],
                    "PROPERTY_CODE" => ["LINK", "ICON_FOOTER"],
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "N",
                    "SET_BROWSER_TITLE" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "PARENT_SECTION" => "823",
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
        </div>
        <div class="footer__bottom-block-agreement-wrapper">
            <div class="footer__agreement-text">Продолжая использовать наш сайт, вы даете согласие на обработку файлов Cookies и других пользовательских данных, в соответствии с <a href="https://letai.ru/policy.php" target="_blank" class="footer__agreement-link">Политикой конфиденциальности</a>.</div>
            <div class="footer__copyright">© <?=date('Y');?> <?=\Bitrix\Main\Config\Option::get( "askaron.settings", "UF_FOOTER_TEXT")?> <a target="_blank" href="<?=CFile::GetPath(\Bitrix\Main\Config\Option::get( "askaron.settings", "UF_SMI_LICENSE"));?>">Эл №ФС77-66502 от 14.07.2016</a></div>
        </div>
        <div class="footer__autor">
            <a target="_blank" href="https://markweber.ru/">Разработано в сотрудничестве с Mark Weber</a>
        </div>
    </div>
</footer>