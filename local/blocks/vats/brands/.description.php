<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Интеграция с CRM',
        'section' => ['Tattelecom', 'content'],
	),
    'cards' => [
        '.brands__list-item' => [
            'name' => 'Бренд',
            'label' => [
                '.brands__list-item-img'
            ]
        ]
    ],
	'nodes' => array(
        '.brands__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => false
        ),

        '.brands__list-item-img' => array(
            'name' => 'Лого',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 350, 'maxHeight' => 100)
        ),
    ),
    'groups' => array()
);