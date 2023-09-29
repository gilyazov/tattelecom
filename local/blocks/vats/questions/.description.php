<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Часто задаваемые вопросы',
        'section' => ['Tattelecom', 'content'],
	),
    'cards' => [

    ],
	'nodes' => array(
        '.questions__title' => [
            'type' => 'text',
            'name' => 'Заголовок',
            'textOnly' => true
        ]
    ),
    'groups' => array()
);