<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Остались вопросы?',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(
        '.application__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => true
        ),
	),
    'groups' => array(

    ),
);