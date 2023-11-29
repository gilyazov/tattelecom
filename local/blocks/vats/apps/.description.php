<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Скачайте приложение',
        'section' => ['Tattelecom', 'content'],
	),
    'cards' => [

    ],
	'nodes' => array(
        '.apps__img' => array(
            'name' => 'QR',
            'type' => 'img'
        ),
    ),
    'groups' => array()
);