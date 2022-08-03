<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Картинка + текст с кнопкой',
        'section' => ['Tattelecom', 'banner'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(
        '.b-page-banner__m2m-title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.b-page-banner__m2m-subtitle' => array(
            'name' => 'Описание',
            'type' => 'text',
        ),

        '.b-page-banner__m2m-btn' => array(
            'name' => 'Кнопка',
            'type' => 'link',
        ),

        '.b-page-banner__right-image' => array(
            'name' => 'Картинка',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 500, 'maxHeight' => 500)
        ),
	),
    'groups' => array(

    ),
    'style' => [
        'block' => [
            'type' => [],
        ],
        'nodes' => [
            '.b-page-banner__m2m-btn' => [
                'name' => 'Модалка?',
                'type' => ['modal-show']
            ],
        ],
    ]
);