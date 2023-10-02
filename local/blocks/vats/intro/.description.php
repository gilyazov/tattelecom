<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Intro',
        'section' => ['Tattelecom', 'content'],
	),
    'cards' => [

    ],
	'nodes' => array(
        '.intro__title' => array(
            'name' => 'Заголовок',
            'type' => 'text'
        ),
        '.intro__desc' => array(
            'name' => 'Описание',
            'type' => 'text',
            'textOnly' => true
        ),
    ),
    'groups' => array()
);