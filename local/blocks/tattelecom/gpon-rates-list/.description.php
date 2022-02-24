<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Тарифы интернет',
        'section' => ['Tattelecom', 'dynamic'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(
        'bitrix:news.list' => array(
            'type' => 'component',
            'extra' => array(
                'editable' => array(
                    'PARENT_SECTION' => array(),
                )
            )
        ),
        '.rates-preview__content-subtitle' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.rates-preview__content-caption' => array(
            'name' => 'Описание',
            'type' => 'text',
        ),

        '.why-iteko__card' => array(
            'name' => 'Ссылка',
            'type' => 'link',
            'skipContent' => true,
        ),

        '.why-iteko__card-text' => array(
            'name' => 'Текст',
            'type' => 'text',
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