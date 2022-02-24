<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Также вы получаете Конвергент',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [
        '.convergent-you-get__advantage-item-left' => [
            'name' => ' Карточки слева',
            'label' => [
                '.caption-left'
            ]
        ],
        '.convergent-you-get__advantage-item-right' => [
            'name' => ' Карточки справа',
            'label' => [
                '.caption-right'
            ]
        ]
    ],
	'nodes' => array(
        '.convergent-you-get__price-old' => array(
            'name' => 'Старая цена',
            'type' => 'text',
        ),
        '.number' => array(
            'name' => 'Текущая цена',
            'type' => 'text',
        ),
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.img-left' => array(
            'name' => 'Иконка слева',
            'type' => 'img',
        ),
        '.head-left' => array(
            'name' => 'Иконка слева',
            'type' => 'img',
        ),
        '.caption-left' => array(
            'name' => 'Описание карточки слева',
            'type' => 'text',
        ),
        '.caption-right' => array(
            'name' => 'Описание карточки справа',
            'type' => 'text',
        ),
	),
    'style' => array(

    ),
//    'attrs' => array(
//        '.rates-preview__gpon-btn' => array(
//            'name' => 'Названия тарифа для передачи в форму',
//            'type' => 'text',
//            'attribute' => 'data-tariff-name'
//        ),
//    ),
);