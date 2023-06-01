<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Третьи лица',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [
        '.numbered-list__item' => [
            'name' => 'Организация',
            'label' => [
                '.numbered-list__item_type_name'
            ]
        ]
    ],
	'nodes' => array(
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.numbered-list__header_type_name' => array(
            'name' => 'Заголовок второга столбца',
            'type' => 'text',
        ),
        '.numbered-list__header_type_address' => array(
            'name' => 'Заголовок третьего столбца',
            'type' => 'text',
        ),
        '.numbered-list__item_type_name' => array(
            'name' => 'Наименование организации',
            'type' => 'text',
        ),
        '.numbered-list__item_type_address' => array(
            'name' => 'Адрес',
            'type' => 'text',
            'skipContent' => true,
        )
	),
    'groups' => array(

    ),
);