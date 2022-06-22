<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Международный роуминг - опции',
        'section' => ['Tattelecom', 'page'],
        'dynamic' => false,
    ),
    'cards' => array(
        '.b-roaming-international-options__slide' => [
            'name' => 'Опция',
            'label' => [
                '.b-roaming-international-options__slide-title'
            ],
            'additional' => [
                'attrs' => [
                    [
                        'name' => 'Заголовок попапа',
                        'type' => 'text',
                        'attribute' => 'data-heading'
                    ],
                    [
                        'name' => 'Контент попапа',
                        'type' => 'html',
                        'attribute' => 'data-content'
                    ]
                ]
            ]
        ]
    ),
    'nodes' => array(
        '.b-roaming-international-options__slide-title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],
        '.b-roaming-international-options__slide-cost' => [
            'name' => 'Цена',
            'type' => 'text'
        ],
        '.b-roaming-international-options__slide-cost-label' => [
            'name' => 'Тарификация',
            'type' => 'text'
        ],
    ),
    'style' => array(

    ),
    'assets' => [
        'js' => [
            BUILD_PATH . 'js/b-roaming-international.js'
        ]
    ]
);