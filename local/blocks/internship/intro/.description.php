<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Стажировка в Летай',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(
        '.intro__heading' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.intro__text' => array(
            'name' => 'Описание',
            'type' => 'text',
            'textOnly' => true
        ),

        '.intro__link' => array(
            'name' => 'Ссылка',
            'type' => 'link',
            'skipContent' => true,
        )
	),
    'groups' => array(

    ),
);