<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

return array(
    'block' => array(
        'name' => "Преимущества и возможности",
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
        '.b-advantages-opportunities__slide-img' => array(
            'name' => "Иконка",
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
    'assets' => array(
        'js' => array(
            BUILD_PATH . 'js/b-single-business-page.js',
        ),
    ),
);