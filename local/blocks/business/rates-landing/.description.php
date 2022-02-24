<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

return array(
    'block' => array(
        'name' => "Тарифы на сайтах24",
        'section' => array('Бизнесу')
    ),
    'cards' => [
        '.swiper-slide' => [
            'name' => 'Услуга',
            'label' => [
                '.b-tariffs-item__name'
            ]
        ]
    ],
    'nodes' => array(
        '.gl__title' => array(
            'name' => "Заголовок",
            'type' => 'text',
        ),

        '.b-tariffs-item' => [
            'name' => 'Ссылка',
            'type' => 'link',
            'skipContent' => true
        ],
        '.b-tariffs-item__name' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],
        '.b-tariffs-item__simple-signature' => [
            'name' => 'Описание',
            'type' => 'text'
        ],
        '.b-tariffs-item__cost-old-price' => [
            'name' => 'Старая цена',
            'type' => 'text'
        ],
        '.b-tariffs-item__cost' => [
            'name' => 'Цена',
            'type' => 'text'
        ],
        '.b-tariffs-item__cost-label' => [
            'name' => 'Тарификация',
            'type' => 'text'
        ],
        '.b-tariffs-item__btn' => [
            'name' => 'Кнопка',
            'type' => 'text'
        ],

        '.gl__b-hint-nds' => [
            'name' => 'Подпись',
            'type' => 'text'
        ]
    ),
    'assets' => [
        'js' => [
            BUILD_PATH . 'js/b-rates-mobile-list.js'
        ]
    ]
);