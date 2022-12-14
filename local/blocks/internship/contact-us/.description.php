<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Подать заявку',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(
        '.contact-us__heading' => array(
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => true
        ),
	),
    'groups' => array(

    ),
);