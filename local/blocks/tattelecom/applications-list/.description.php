<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Приложения Таттелеком',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [
        '.applications-list__item' => [
            'name' => ' Приложение',
            'label' => [
                '.applications-list__item-title'
            ]
        ]
    ],
	'nodes' => array(
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),

        '.applications-list__item-title' => array(
            'name' => 'Название',
            'type' => 'text',
        ),
        '.applications-list__item-subtitle' => array(
            'name' => 'Описание',
            'type' => 'text',
        ),
        '.link-google' => array(
            'name' => 'Ссылка Google Play',
            'type' => 'link',
            'skipContent' => true,
        ),
        '.link-apple' => array(
            'name' => 'Ссылка App Store',
            'type' => 'link',
            'skipContent' => true,
        ),
	),
    'groups' => array(

    ),
);