<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Частным клиентам',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [
        '.tatt-main-section__item' => [
            'name' => 'Карточки',
            'label' => [
                '.tatt-main-section__item-name'
            ]
        ]
    ],
    'nodes' => array(
        '.tatt-main-section__heading' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.tatt-main-section__heading-logo' => array(
            'name' => 'Лого',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 900, 'maxHeight' => 900)
        ),

        '.tatt-main-section__item-link' => array(
            'name' => 'Ссылка',
            'type' => 'link',
            'skipContent' => true
        ),
        '.tatt-main-section__item-name' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.tatt-main-section__item-icon' => array(
            'name' => 'Иконка',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 900, 'maxHeight' => 900)
        ),
    ),
    'groups' => array(

    ),
);