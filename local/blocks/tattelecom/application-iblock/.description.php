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
        '.application__background' => array(
            'name' => 'Линии',
            'type' => 'img'
        ),
        '.application__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.application__subtitle' => array(
            'name' => 'Подзаголовок',
            'type' => 'text',
        ),
        'tattelecom:iblock.event.add.form' => array(
            'type' => 'component',
            'extra' => array(
                'editable' => array(
                    'EVENT' => array(),
                    'IBLOCK_ID' => array(),
                    'PROPERTY_CODES' => array(),
                    'PROPERTY_CODES_REQUIRED' => array(),
                    'SUCCESS_MSG' => array(),
                )
            )
        ),
        'bitrix:news.list' => array(
            'type' => 'component',
            'extra' => array(
                'editable' => array(
                    'PARENT_SECTION' => array()
                )
            )
        )
	),
    'style' => [
        'block' => [
            'type' => [],
        ],
        'nodes' => [
            '.tatt-about-company-support' => [
                'name' => 'Скрыть блок',
                'type' => ['display-bx']
            ],
            '.b-support__contacts-tel' => [
                'name' => 'Скрыть телефон',
                'type' => ['display-bx']
            ],
        ],
    ]
);