<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Последние акции',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [
        '.cashback__slide' => [
            'name' => 'Слайд',
            'label' => [
                '.cashback__slide-text'
            ]
        ]
    ],
	'nodes' => array(
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.cashback__subtitle' => array(
            'name' => 'Описание',
            'type' => 'text',
        ),

        '.cashback__slide-text' => array(
            'name' => 'Описание',
            'type' => 'text',
        ),
        '.cashback__slide-link' => array(
            'name' => 'Ссылка',
            'type' => 'link',
        ),
	),
    'assets' => [
        'js' => [
            BUILD_PATH . 'js/mobile-communication-page.js',
        ]
    ]
);