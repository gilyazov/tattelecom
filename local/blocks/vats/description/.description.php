<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Description',
        'section' => ['Tattelecom', 'content'],
	),
    'cards' => [

    ],
	'nodes' => array(
        '.description__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => false
        ),
        '.description__desc' => array(
            'name' => 'Описание',
            'type' => 'text',
            'textOnly' => false
        ),
    ),
    'groups' => array()
);