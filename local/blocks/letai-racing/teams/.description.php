<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Участники соревнований',
        'section' => ['Tattelecom', 'content'],
	),
    'cards' => [
        'tbody>tr' => [
            'name' => 'Участник',
            'label' => [
                '.teams__table-name'
            ]
        ]
    ],
	'nodes' => array(
        '.teams__table-num' => [
            'name' => 'Номер',
            'type' => 'text',
            'textOnly' => true
        ],
        '.teams__table-name' => [
            'name' => 'Название',
            'type' => 'text',
            'textOnly' => true
        ],
        '.teams__table-count' => [
            'name' => 'Количество',
            'type' => 'text',
            'textOnly' => true
        ],
        '.teams__table-status' => [
            'name' => 'Статус',
            'type' => 'text',
            'textOnly' => true
        ],
    ),
    'groups' => array()
);