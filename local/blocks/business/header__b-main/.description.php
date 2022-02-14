<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => 'Раскрытая шапка',
        'section' => ['Tattelecom', 'template'],
		'dynamic' => false,
	),
	'cards' => array(

	),
	'nodes' => array(

	),
    'style' => array(

    ),
    'assets' => [
        'js' => [
            BUILD_PATH . 'js/b-main-page.js'
        ]
    ]
);