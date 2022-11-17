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
            'type' => [
                "padding-top",
                "padding-bottom"
            ],
        ],
        'nodes' => [
            '.b-page-banner__content' => [
                'name' => 'Сменить порядок блоков',
                'type' => ['order-change']
            ],
            '.b-page-banner__m2m-btn' => [
                'name' => 'Модалка?',
                'type' => ['modal-show']
            ],
            '.b-page-banner__m2m-price-container' => [
                'name' => 'Скрыть',
                'type' => ['display-bx']
            ],
            '.b-page-banner__right-image' => [
                'name' => 'Скрыть',
                'type' => ['display-bx']
            ],
        ],
    ]
);