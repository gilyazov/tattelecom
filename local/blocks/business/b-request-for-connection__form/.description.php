<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Форма - Оставить заявку на подключение',
        'section' => ['Tattelecom', 'forms'],
        'dynamic' => false,
    ),
    'cards' => array(

    ),
    'nodes' => array(
        '.b-request-for-connection__form-title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],
        'bitrix:iblock.element.add.form' => array(
            'type' => 'component',
            'extra' => array(
                'editable' => array(
                    'IBLOCK_ID' => [],
                    'USE_CAPTCHA' => [],
                )
            )
        )
    ),
    'style' => array(

    ),
);