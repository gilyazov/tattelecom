<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Домофон - преимущества',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [
        '[data-menu = yes] .gl__white-container' => [
            'name' => 'Преимущества "есть"',
            'label' => [
                '[data-menu = yes] .useful-information__slide-content-text'
            ]
        ],
        '[data-menu = no] .gl__white-container' => [
            'name' => 'Преимущества "нет"',
            'label' => [
                '[data-menu = no] .useful-information__slide-content-text'
            ]
        ]
    ],
	'nodes' => array(
        '.services__item-info-title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),

        '[data-menu = yes] .useful-information__slide-content-text' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '[data-menu = yes] .useful-information__slide-image' => array(
            'name' => 'Картинка',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 420, 'maxHeight' => 350)
        ),

        '[data-menu = no] .useful-information__slide-content-text' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '[data-menu = no] .useful-information__slide-image' => array(
            'name' => 'Картинка',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 420, 'maxHeight' => 350)
        ),

	)
);