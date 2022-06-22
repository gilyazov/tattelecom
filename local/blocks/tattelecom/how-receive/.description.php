<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Как получать домашний кэшбэк?',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [
        '.how-receive__step-item' => [
            'name' => 'Шаги',
            'label' => [
                '.how-receive__step-item-num mod-orange'
            ]
        ]
    ],
	'nodes' => array(
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),

        '.how-receive__step-item-num mod-orange' => array(
            'name' => 'Шаг',
            'type' => 'text',
        ),
        '.how-receive__step-item-value' => array(
            'name' => 'Описание',
            'type' => 'text',
        ),
        '.how-receive__hint' => array(
            'name' => 'Подсказка',
            'type' => 'text'
        ),
	),
    'groups' => array(

    ),
);