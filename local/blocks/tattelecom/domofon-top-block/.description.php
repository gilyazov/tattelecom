<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Шапка Домофон',
        'section' => ['Tattelecom', 'banner'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(
        '.rates-preview__content-caption' => array(
            'name' => 'Надзаголовок',
            'type' => 'text',
        ),
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),

        '.fly-top-block__subtitle-1' => array(
            'name' => 'Текст 1',
            'type' => 'text',
        ),
        '.fly-top-block__subtitle-2' => array(
            'name' => 'Текст 2',
            'type' => 'text',
        ),

        '.gl__md-hide' => array(
            'name' => 'Картинка',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 1920, 'maxHeight' => 1080)
        ),
        '.gl__md-show' => array(
            'name' => 'Картинка для мобильных устройств',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 1920, 'maxHeight' => 1080)
        ),
	),
    'assets' => [
        'js' => [
            BUILD_PATH . 'js/main-page.js'
        ]
    ]
);