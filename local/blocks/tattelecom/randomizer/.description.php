<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Рандомайзер конкурсов',
        'section' => ['Tattelecom', 'page'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(
        '.application-consultation__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.application-consultation__subtitle' => array(
            'name' => 'Описание',
            'type' => 'text',
        ),
	),
    'style' => array(
        'block' => array(
            'bg',
        ),
        'nodes' => array(
            '.application-consultation__content' => array(
                'name' => "Фоновый цвет",
                'type' => array('background-color'),
            ),
        ),
    ),
);