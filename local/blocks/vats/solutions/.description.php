<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Solutions',
        'section' => ['Tattelecom', 'content'],
	),
    'cards' => [
        '.solutions__list-item' => [
            'name' => 'Задача',
            'label' => [
                '.solutions__list-item-title'
            ]
        ]
    ],
	'nodes' => array(
        '.solutions__title' => array(
            'name' => 'Заголовок',
            'type' => 'text'
        ),

        '.solutions__list-item-title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => true
        ),
        '.solutions__list-item-desc' => array(
            'name' => 'Описание',
            'type' => 'text',
            'textOnly' => true
        ),
        '.solutions__list-item-icon' => array(
            'name' => 'Иконка',
            'type' => 'img'
        ),
    ),
    'groups' => array()
);