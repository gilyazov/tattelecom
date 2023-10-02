<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Преимущества',
        'section' => ['Tattelecom', 'content'],
	),
    'cards' => [
        '.landing-node-first' => [
            'name' => 'Преимущество слева',
            'label' => [
                '.advantages__list-item-title'
            ]
        ],
        '.landing-node-second' => [
            'name' => 'Преимущество справа',
            'label' => [
                '.advantages__list-item-title'
            ]
        ]
    ],
	'nodes' => array(
        '.advantages__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => true
        ),

        '.advantages__list-item-title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => true
        ),
        '.advantages__list-item-content p' => array(
            'name' => 'Описание',
            'type' => 'text',
            'textOnly' => true
        ),
        '.advantages__list-item-icon' => array(
            'name' => 'Иконка',
            'type' => 'img'
        ),
    ),
    'groups' => array()
);