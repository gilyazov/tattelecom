<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Остались вопросы по услугам?',
        'section' => ['Tattelecom', 'content'],
	),
    'cards' => [

    ],
	'nodes' => array(
        '.knowledge__title' => [
            'type' => 'text',
            'name' => 'Заголовок',
            'textOnly' => false
        ],

        '.knowledge__link' => [
            'type' => 'link',
            'name' => 'Кнопка'
        ],
        '.knowledge__button' => [
            'type' => 'link',
            'name' => 'Скачать презентацию'
        ]
    ),
    'groups' => array()
);