<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Как работает',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(
        '.gl__title' => [
            'name' => 'Заголовок',
            'type' => 'text',
        ],
        '.how-works__text' => [
            'name' => 'Описание',
            'type' => 'text',
        ],
        '.how-works__scheme-image' => [
            'name' => 'Ссылка',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 1920, 'maxHeight' => 1080)
        ],
	),
    'groups' => array(

    ),
);