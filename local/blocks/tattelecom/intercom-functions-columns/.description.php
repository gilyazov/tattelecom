<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => '2 колонки преимуществ',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [
        '.landing-node-red' => [
            'name' => 'Первая колонка',
            'label' => [
                '.landing-node-red .intercom-functions__item-text'
            ]
        ],
        '.landing-node-black' => [
            'name' => 'Вторая колонка',
            'label' => [
                '.landing-node-black .intercom-functions__item-text'
            ]
        ],
    ],
	'nodes' => array(
        '.landing-node-red .intercom-functions__item-text' => array(
            'name' => 'Преимущество',
            'type' => 'text',
        ),
        '.landing-node-black .intercom-functions__item-text' => array(
            'name' => 'Преимущество',
            'type' => 'text',
        ),

        '.landing-node-first-title' => array(
            'name' => 'Заголовок слева',
            'type' => 'text',
        ),
        '.landing-node-second-title' => array(
            'name' => 'Заголовок справа',
            'type' => 'text',
        ),
	)
);