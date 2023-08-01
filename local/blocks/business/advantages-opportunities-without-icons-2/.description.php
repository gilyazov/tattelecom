<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

return array(
    'block' => array(
        'name' => "Преимущества и возможности без иконок 2",
        'section' => array('Бизнесу'),
        'version' => '1.0.1',
    ),
    'cards' => [
        '.swiper-slide' => [
            'name' => 'Преимущества и возможности',
            'label' => [
                '.b-advantages-opportunities__slide-title'
            ],
        ],
    ],
    'nodes' => array(
        '.gl__title' => array(
            'name' => "Заголовок страницы",
            'type' => 'text',
        ),
        '.b-advantages-opportunities__slide-title' => array(
            'name' => "Заголовок карточки",
            'type' => 'text',
        ),
        '.b-advantages-opportunities__slide-content' => array(
            'name' => "Текст карточки",
            'type' => 'text',
        ),
    ),
    'attrs' => [
        '.js-swiper' => [
            'name' => 'Количество слайдов на экране',
            'type' => 'text',
            'attribute' => 'data-swiper-slides-preview',
            'value' => '2.6'
        ]
    ],
//    'style' => array(
//        'block' => array(
//            'type' => 'block-default'
//        ),
//    ),
    'assets' => array(
        'js' => array(
            BUILD_PATH . 'js/b-single-business-page.js',
        ),
    ),
);