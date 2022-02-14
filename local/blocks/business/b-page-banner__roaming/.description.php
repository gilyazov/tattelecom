<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Заголовок + переключалка страниц',
        'section' => ['Tattelecom', 'banner'],
        'dynamic' => false,
    ),
    'cards' => [
        '.b-page-banner__tab' => [
            'name' => 'Переключатель',
            'label' => [
                '.b-page-banner__tab-link'
            ]
        ]
    ],
    'nodes' => array(
        '.gl__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],

        '.b-page-banner__tab-link' => [
            'name' => 'Кнопка',
            'type' => 'link'
        ],

        '.b-page-banner__mobile-title' => [
            'name' => 'Заголовок мобильной версии',
            'type' => 'text'
        ],
        '.b-page-banner__desktop-title' => [
            'name' => 'Заголовок в десктопе',
            'type' => 'text'
        ],
        '.b-page-banner__subtitle' => [
            'name' => 'Описание',
            'type' => 'text'
        ],
        '.b-page-banner__image' => array(
            'name' => 'Фон',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 1560, 'maxHeight' => 500),
        ),
    ),
    'style' => [
        'block' => [
            'type' => [],
        ],
        'nodes' => [
            '.b-page-banner__content' => [
                'name' => 'Скрыть банер',
                'type' => ['display-bx']
            ],
        ],
    ]
);