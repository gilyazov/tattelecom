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
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        )
	),
    'groups' => array(

    ),
    'assets' => [
        'css' => [],
        'js' => [
            BUILD_PATH . 'js/common-private-clients.js',
            BUILD_PATH . 'js/questions.js'
        ]
    ]
);