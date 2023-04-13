<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Карточка товара',
        'section' => ['Tattelecom', 'page'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(

	),
    'assets' => [
        'js' => [
            BUILD_PATH . 'js/product-page.js',
        ]
    ]
);