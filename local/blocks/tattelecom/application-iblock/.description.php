<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Регистрация в инфоблок',
        'section' => ['Tattelecom', 'forms'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(
        '.application__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.application__subtitle' => array(
            'name' => 'Подзаголовок',
            'type' => 'text',
        ),

	),
    'groups' => array(

    ),
);