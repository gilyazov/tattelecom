<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Международный роуминг',
        'section' => ['Tattelecom', 'page'],
        'dynamic' => false,
    ),
    'cards' => array(
        '.swiper-slide' => [
            'name' => 'Слайд',
            'label' => [
                '.b-promotion__title'
            ]
        ],
        '.b-steps__item' => [
            'name' => 'Шаг',
            'label' => [
                '.b-steps__item-num'
            ]
        ]
    ),
    'nodes' => array(
        '.b-roaming-international-intro__block-title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],

        '.b-promotion__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],
        '.b-promotion__description' => [
            'name' => 'Описание',
            'type' => 'text'
        ],

        '.b-steps__item-num' => [
            'name' => 'Шаг',
            'type' => 'text',
            'textOnly' => true
        ],
        '.b-steps__item-description' => [
            'name' => 'Описание',
            'type' => 'text',
            'textOnly' => true
        ],
    ),
    'style' => array(

    ),
    'assets' => [
        'js' => [
            BUILD_PATH . 'js/b-mobile-communication.js'
        ]
    ]
);