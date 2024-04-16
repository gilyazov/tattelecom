<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<footer class="footer">
    <div class="container">

        <?$APPLICATION->IncludeComponent("bitrix:menu", "footer__columns", Array(
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

<div class="modal">
    <div class="modal__container modal--success" data-target="modal-success">
        <div class="modal__content">
            <button class="button-reset modal__close-btn modal-close" type="button"><span></span><span></span>
            </button>
            <div class="modal__title">Ваша заявка успешно отправлена!<br>Мы перезвоним Вам в течение получаса</div>
        </div>
    </div>
    <div class="modal__container modal--error" data-target="modal-error">
        <div class="modal__content">
            <button class="button-reset modal__close-btn modal-close" type="button"><span></span><span></span>
            </button>
            <div class="modal__title">"Нам жаль, но заявка не была отправлена.<br>Пожалуйста, повторите попытку"</div>
        </div>
    </div>
</div>