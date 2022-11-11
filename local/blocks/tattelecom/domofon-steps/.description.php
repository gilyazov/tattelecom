<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Домофон - шаги',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [
        '.instructions__step-item' => [
            'name' => 'Шаг',
            'label' => [
                '.instructions__step-caption'
            ]
        ]
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
        '.domofon-steps' => array(
            'name' => 'Фон',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 1920, 'maxHeight' => 470)
        ),
        '.rates-preview__img' => array(
            'name' => 'Картинка справа',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 750, 'maxHeight' => 550)
        ),

        '.instructions__step-caption' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.instructions__step-text' => array(
            'name' => 'Описание',
            'type' => 'text',
        ),
        '.link-google' => array(
            'name' => 'google',
            'type' => 'link',
            'skipContent' => true
        ),
        '.link-apple' => array(
            'name' => 'apple',
            'type' => 'link',
            'skipContent' => true
        ),
	),
    'style' => [
        'block' => [
            'type' => [],
        ],
        'nodes' => [
            '.instructions__mark' => [
                'name' => 'Скрыть ссылки',
                'type' => ['display-bx']
            ],
        ],
    ]
);