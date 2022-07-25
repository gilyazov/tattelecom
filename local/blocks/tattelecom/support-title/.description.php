<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Служба поддержки',
        'section' => ['Tattelecom', 'page'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.support__subtitle' => array(
            'name' => 'Описание',
            'type' => 'text',
        ),
        '.support__tel' => array(
            'name' => 'Телефон',
            'type' => 'link',
        ),
	),
    'groups' => array(

    ),
);