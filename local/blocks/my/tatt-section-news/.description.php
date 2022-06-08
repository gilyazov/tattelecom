<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Новости Таттелеком',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(
        '.tatt-poppular__heading' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),

        '.tatt-banner' => array(
            'name' => 'Фон',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 1920, 'maxHeight' => 1080)
        ),
	),
    'assets' => [
        'js' => [
            BUILD_PATH . 'js/tattelekom-main-page.js'
        ]
    ]
);