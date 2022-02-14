<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

return array(
    'block' => array(
        'name' => "Баннер с ценой и кнопкой",
        'section' => array('Бизнесу'),
        'version' => '1.0.1',
    ),
    'cards' => [

    ],
    'nodes' => array(
        '.gl__title' => array(
            'name' => "Заголовок страницы",
            'type' => 'text',
        ),
        '.b-page-banner__accent-title' => array(
            'name' => "Заголовок баннера",
            'type' => 'text',
        ),
        '.b-page-banner__subtitle' => array(
            'name' => "Подзаголовок баннера",
            'type' => 'text',
        ),
        '.b-page-banner__image' => array(
            'name' => "Фоновая картинка баннера",
            'type' => 'img',
        ),
        '.b-page-banner__cost-label-1' => array(
            'name' => "Текст перед ценой",
            'type' => 'text',
        ),
        '.b-page-banner__cost' => array(
            'name' => "Цена",
            'type' => 'text',
        ),
        '.b-page-banner__cost-label-2' => array(
            'name' => "Текст после цены",
            'type' => 'text',
        ),
    ),
//    'attrs' => array(
//        '.srcset' => array(
//            'name' => "Мобильная картинка",
//            'type' => 'img',
//        ), 'attribute' => 'srcset',
//    ),
//    ),
//    'style' => array(
//        'block' => array(
//            'type' => 'block-default'
//        ),
//    ),
);