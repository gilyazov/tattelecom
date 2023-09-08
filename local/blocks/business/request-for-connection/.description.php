<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

return array(
    'block' => array(
        'name' => "Форма запроса на подключение",
        'section' => ['Tattelecom', 'forms'],
    ),
    'cards' => [

    ],
    'nodes' => array(
        'gl__title' => array(
            'name' => "Заголовок страницы",
            'type' => 'text',
        ),
        'b-request-for-connection__form-title' => array(
            'name' => "Заголовок формы",
            'type' => 'text',
        ),
        'b-request-for-connection__form-label' => array(
            'name' => "Текст под заголовком формы",
            'type' => 'text',
        ),
        'bitrix:iblock.element.add.form' => array(
            'type' => 'component',
            'extra' => array(
                'editable' => array(
                    'IBLOCK_ID' => [],
                    'USE_CAPTCHA' => [],
                )
            )
        )
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