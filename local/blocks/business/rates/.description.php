<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

return array(
    'block' => array(
        'name' => "Тарифы",
        'section' => array('Бизнесу'),
        'version' => '1.0.1',
    ),
    'cards' => [

    ],
    'nodes' => array(
        '.gl__title' => array(
            'name' => "Заголовок",
            'type' => 'text',
        ),
        'bitrix:news.list' => array(
            'type' => 'component',
            'extra' => array(
                'editable' => array(
                    'IBLOCK_ID' => array(),
                    'PARENT_SECTION' => array()
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