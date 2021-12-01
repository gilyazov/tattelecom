<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Функции домофона',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [
        '.intercom-functions__item' => [
            'name' => 'Функция',
            'label' => [
                '.intercom-functions__item-text'
            ]
        ]
    ],
	'nodes' => array(

        '.intercom-functions__item-text' => array(
            'name' => 'Функция',
            'type' => 'text',
        ),

        '.why-iteko__card' => array(
            'name' => 'Ссылка',
            'type' => 'link',
            'skipContent' => true,
        ),
	)
);