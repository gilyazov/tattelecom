<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Функции домофона',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [
        '.intercom-functions__item' => [
            'name' => 'Функция',
            'label' => [
                '.intercom-functions__item-text'
            ]
        ]
    ],
	'nodes' => array(
        '.intercom-functions__item-text' => array(
            'name' => 'Функция',
            'type' => 'text',
        ),
        '.intercom-functions__image' => array(
            'name' => 'Фон',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 1920, 'maxHeight' => 1080)
        ),
	)
);