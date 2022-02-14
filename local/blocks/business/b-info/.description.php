<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Заголовок + описание',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
    ),
    'cards' => array(

    ),
    'nodes' => array(
        '.gl__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],

        '.b-info__text' => [
            'name' => 'Цифра',
            'type' => 'text'
        ]
    ),
    'style' => array(

    ),
);