<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

return array(
    'block' => array(
        'name' => "Интро",
        'section' => array('Бизнесу'),
        'version' => '1.0.1',
    ),
    'cards' => [
        '.swiper-slide' => [//внешнияя карточка
            'name' => 'Тариф',
            'label' => [
                '.b-tariffs-item__name'
            ],
        ],
        '.swiper-slide-2' => [//внутренняя карточка
            'name' => 'Тариф',
            'label' => [
                '.b-tariffs-item__name'
            ],
        ]
    ],
    'nodes' => array(
        '.b-tariffs-item__name' => array(
            'name' => "Название тарифа",
            'type' => 'text',
        ),
        '.b-tariffs-item__caption' => array(
            'name' => "Подпись под заголовком",
            'type' => 'text',
        ),
        '.b-page-banner__accent-title' => array(
            'name' => "Акцентный заголовок баннера",
            'type' => 'text',
        ),
        '.b-page-banner__desktop-title' => array(
            'name' => "Акцентный заголовок баннера",
            'type' => 'text',
        ),
        '.b-page-banner__large-subtitle' => array(
            'name' => "Подзаголовок баннера",
            'type' => 'text',
        ),
        '.b-page-banner__image' => array(
            'name' => "Фоновая картинка баннера",
            'type' => 'img',
        ),
    ),
//    'attrs' => array(
//        '.b-fractional-slider__slide-card' => array(
//            'name' => "Ссылка",
//            'type' => 'link',
//        ), 'attribute' => 'srcset',
//    ),
//    ),
//    'style' => array(
//        'block' => array(
//            'type' => 'block-default'
//        ),
//    ),
);