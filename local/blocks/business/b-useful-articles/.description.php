<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Слайдер - Статьи',
        'section' => ['Tattelecom', 'dynamic'],
        'dynamic' => false,
    ),
    'cards' => [
        '.swiper-slide' => [
            'name' => 'Слайд',
            'label' => [
                '.b-useful-article__title'
            ]
        ]
    ],
    'nodes' => [
        '.gl__title' => [
            'name' => 'Заголовок блока',
            'type' => 'text'
        ],

        '.b-useful-article' => array(
            'name' => "Ссылка",
            'skipContent' => true,
            'type' => 'link',
        ),
        '.b-useful-article__title' => [
            'name' => 'Заголовок блока',
            'type' => 'text'
        ],
        '.b-useful-article__description' => [
            'name' => 'Заголовок блока',
            'type' => 'text'
        ],
        '.b-useful-article__image' => array(
            'name' => 'Фон',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 1560, 'maxHeight' => 500),
        ),
    ],
    'assets' => array(
        'js' => [
            BUILD_PATH . 'js/b-internet-page.js'
        ]
    ),
);