<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Карта GPON',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [
//        '.rates-preview__gpon-advantages-item' => [
//            'name' => ' Преимущества',
//            'label' => [
//                '.rates-preview__gpon-advantages-item-caption'
//            ]
//        ]
    ],
	'nodes' => array(
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        'bitrix:landing.blocks.html' => array(
            'type' => 'component',
            'waf_ignore' => true,
            'extra' => array(
                'editable' => array(
                    'HTML_CODE' => array(
                        'type' => 'html'
                    ),
                    'SKIP_MOVING_FALSE' => array()
                )
            )
        )
	),
    'style' => array(

    ),
    'attrs' => array(
//        '.rates-preview__gpon-btn' => array(
//            'name' => 'Названия тарифа для передачи в форму',
//            'type' => 'text',
//            'attribute' => 'data-tariff-name'
//        ),
    ),
);