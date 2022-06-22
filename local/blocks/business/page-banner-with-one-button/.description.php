<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

return array(
    'block' => array(
        'name' => "Баннер с одной кнопкой (минималистичный)",
        'section' => array('Бизнесу'),
        'version' => '1.0.1',
    ),
    'cards' => [

    ],
    'nodes' => array(
        '.gl__title' => array(
            'name' => "Заголовок блока",
            'type' => 'text',
        ),
        '.b-page-banner__accent-title' => array(
            'name' => "Акцентный заголовок баннера",
            'type' => 'text',
        ),
        '.b-page-banner__image' => array(
            'name' => "Фоновая картинка баннера",
            'type' => 'img',
        ),
        '.b-page-banner__btn-1' => array(
            'name' => "Ссылка на кнопке",
            'type' => 'link',
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