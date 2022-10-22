<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Первый блок страницы',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(
        '.tatt-mission-hero__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.tatt-mission-hero__subtitle' => array(
            'name' => 'Подзаголовок',
            'type' => 'text',
        ),
        '.tatt-mission-hero' => array(
            'name' => 'Фон',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 1920, 'maxHeight' => 800)
        ),
	),
    'style' => [
        'block' => [
            'type' => [],
        ],
        'nodes' => [
            '.bread-crumbs__list' => [
                'name' => 'Скрыть крошки',
                'type' => ['display-bx']
            ],
        ],
    ]
);