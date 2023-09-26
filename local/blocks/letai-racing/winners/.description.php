<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Победители соревнований',
        'section' => ['Tattelecom', 'content'],
	),
    'cards' => [

    ],
	'nodes' => array(
        '.teams__heading' => [
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => true
        ]
    ),
    'groups' => array()
);