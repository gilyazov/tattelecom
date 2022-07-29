<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Слайдер v2',
        'section' => ['Tattelecom', 'banner'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(

	),
    'attrs' => [
        '.js-swiper-custom' => [
            'name' => 'Время смены слайдера',
            'type' => 'text',
            'attribute' => 'data-swiper-autoplay',
            'value' => '5000'
        ]
    ],
    'assets' => array(
        'js' => [
            BUILD_PATH . 'js/main-page.js'
        ]
    ),
    'style' => [
        'block' => [
            'type' => [],
        ],
        'nodes' => [
            '.rates-preview__content' => [
                'name' => 'Цвет текста',
                'type' => ['color-bx']
            ],
            '.rates-preview__btn' => [
                'name' => 'Скрыть кнопку',
                'type' => ['display-bx', 'modal-show']
            ],
        ],
    ]
);