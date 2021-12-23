<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Заголовок + хлебные крошки',
        'section' => ['Tattelecom', 'template'],
	),
    'cards' => array(),
	'nodes' => [
        '.top-block__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ]
    ],
    'groups' => array()
);