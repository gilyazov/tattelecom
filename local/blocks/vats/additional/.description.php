<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Дополнительные услуги',
        'section' => ['Tattelecom', 'content'],
	),
    'cards' => [
        '.additional__list-item' => [
            'name' => 'Услуга',
            'label' => [
                '.additional__list-item-title'
            ]
        ]
    ],
	'nodes' => [
        '.additional__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => false
        ),

        '.additional__list-item-title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => false
        ),
        '.additional__list-item-desc' => array(
            'name' => 'Описание',
            'type' => 'text',
            'textOnly' => false
        ),
        '.additional__list-item-price' => array(
            'name' => 'Цена',
            'type' => 'text'
        ),
        '.additional__list-item-date' => array(
            'name' => 'Период',
            'type' => 'text',
            'textOnly' => false
        )
    ],
    'groups' => array()
);