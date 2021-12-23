<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'USSD-запросы',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.ussd-faq__subtitle' => array(
            'name' => 'Описание',
            'type' => 'text',
        ),
	),
);