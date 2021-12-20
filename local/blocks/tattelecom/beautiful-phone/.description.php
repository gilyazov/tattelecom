<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Красивые номера',
        'section' => ['Tattelecom', 'page'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.phone-list__subtitle' => array(
            'name' => 'Описание',
            'type' => 'text',
        )
	),
    'assets' => [
        'js' => [
            BUILD_PATH . 'js/beautiful-phone-page.js'
        ]
    ]
);