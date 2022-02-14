<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Слайдер - Цифровые сервисы',
        'section' => ['Tattelecom', 'dynamic'],
        'dynamic' => false,
    ),
    'cards' => array(
        '.b-high-slider__slide' => [
            'name' => 'Слайд',
            'label' => [
                '.b-high-slider__title'
            ]
        ]
    ),
    'nodes' => array(
        '.gl__title' => [
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => true
        ],

        '.b-high-slider__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],
        '.b-high-slider__subtitle' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],
        '.b-high-slider__background' => array(
            'name' => 'Фон',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 1560, 'maxHeight' => 500),
        ),
    ),
    'style' => array(
        'block' => [
            'type' => [],
        ],
        'nodes' => [
            '.b-high-slider__title' => [
                'name' => 'Белый текст',
                'type' => ['mod-white']
            ],
            '.b-high-slider__subtitle' => [
                'name' => 'Белый текст',
                'type' => ['mod-white']
            ]
        ],
    ),
);