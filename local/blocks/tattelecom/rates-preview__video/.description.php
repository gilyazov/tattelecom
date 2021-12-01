<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Баннер + видео',
        'section' => ['Tattelecom', 'banner'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(
        '.rates-preview__intercom-title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.rates-preview__intercom-subtitle' => array(
            'name' => 'Описание',
            'type' => 'text',
        ),

        '.why-iteko__card' => array(
            'name' => 'Ссылка',
            'type' => 'link',
            'skipContent' => true,
        ),
	),
);