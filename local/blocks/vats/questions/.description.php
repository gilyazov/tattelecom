<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Часто задаваемые вопросы',
        'section' => ['Tattelecom', 'content'],
	),
    'cards' => [
        '.questions__list-item' => [
            'name' => 'Вопрос',
            'label' => [
                '.questions__list-item-title'
            ]
        ]
    ],
	'nodes' => array(
        '.questions__title' => [
            'type' => 'text',
            'name' => 'Заголовок',
            'textOnly' => false
        ],

        '.questions__list-item-title' => [
            'type' => 'text',
            'name' => 'Вопрос',
            'textOnly' => false
        ],
        '.questions__list-item-content p' => [
            'type' => 'text',
            'name' => 'Ответ',
            'textOnly' => false
        ]
    ),
    'groups' => array()
);