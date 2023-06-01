<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Тарифы мобильной связи',
        'section' => ['Tattelecom', 'dynamic'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.rates-preview__content-caption' => array(
            'name' => 'Описание',
            'type' => 'text',
        ),

        'tattelecom:rates.list' => array(
            'type' => 'component',
            'extra' => array(
                'editable' => array(
                    'PARENT_SECTION' => array(),
                    'IBLOCK_ID' => array(),
                    'RATES' => array(),
                )
            )
        ),
	),
    'groups' => array(

    ),
    'assets' => [
        'css' => [],
        'js' => [
            BUILD_PATH . 'js/mobile-communication-page.js'
        ]
    ]
);