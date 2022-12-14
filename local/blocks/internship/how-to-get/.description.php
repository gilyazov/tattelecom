<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Как попасть на стажировку?',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [
        '.how-to-get__list-item' => [
            'name' => 'Шаги',
            'label' => [
                '.how-to-get__card-title'
            ]
        ]
    ],
	'nodes' => array(
        '.how-to-get__heading' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),

        '.how-to-get__card-title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => true
        ),
        '.how-to-get__card-text' => array(
            'name' => 'Описание',
            'type' => 'text',
            'textOnly' => true
        ),
	),
    'groups' => array(

    ),
);