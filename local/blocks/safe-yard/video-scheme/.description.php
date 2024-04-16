<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Схема организации видеонаблюдения',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(
        '.banner__heading' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.banner__text' => array(
            'name' => 'Описание',
            'type' => 'text',
            'textOnly' => true
        ),

	),
    'groups' => array(

    ),
);