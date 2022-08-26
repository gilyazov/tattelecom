<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Роуминг',
        'section' => ['Tattelecom', 'page'],
	),
    'cards' => [
        '.international-calls__faq-list .faq__item' => [
            'name' => 'Условия',
            'label' => [
                '.faq__item-title'
            ]
        ]
    ],
	'nodes' => [
        '.faq__item-title' => [
            'name' => 'Вопрос',
            'type' => 'text',
            'textOnly' => true
        ],
        '.international-calls__faq-list .faq__item-content-wrapper .gl__text' => [
            'name' => 'Ответ',
            'type' => 'text'
        ],

        '[data-menu="world"] .instructions__subtitle' => [
            'name' => 'Подпись для инструкции',
            'type' => 'text',
            'textOnly' => true
        ]
    ],
    'assets' => [
        'js' => [
            BUILD_PATH . 'js/roaming-page.js'
        ]
    ]
);