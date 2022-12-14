<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Что мы предлагаем',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [
        '.we-offer__list-item' => [
            'name' => 'Преимущества',
            'label' => [
                '.we-offer__card-title'
            ]
        ]
    ],
	'nodes' => array(
        '.we-offer__heading' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.we-offer__card-title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => true
        ),
        '.we-offer__card-text' => array(
            'name' => 'Описание',
            'type' => 'text',
            'textOnly' => true
        ),
	),
    'groups' => array(

    ),
);