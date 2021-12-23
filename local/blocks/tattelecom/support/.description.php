<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Кэшбэк',
        'section' => ['Tattelecom', 'page'],
        'dynamic' => false,
	),
    'cards' => [
        '.support__link-item' => [
            'name' => 'Меню',
            'label' => [
                '.support__link-item-title'
            ]
        ],

        '.support__messages-item' => [
            'name' => 'Ссылка',
            'label' => [
                '.support__messages-icon'
            ]
        ]
    ],
	'nodes' => array(
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.support__subtitle' => array(
            'name' => 'Описание',
            'type' => 'text',
        ),
        '.support__tel' => array(
            'name' => 'Телефон',
            'type' => 'link',
        ),

        '.support__link-item-title' => array(
            'name' => 'Текст',
            'type' => 'text',
        ),
        '.support__link' => array(
            'name' => 'Пункт меню',
            'type' => 'link',
            'skipContent' => true,
        ),

        '.support__messages-link' => array(
            'name' => 'Ссылка соц.сети',
            'type' => 'link',
            'skipContent' => true,
        ),
        '.support__messages-icon' => array(
            'name' => 'Иконка',
            'type' => 'img',
        ),
	),
    'groups' => array(

    ),
);