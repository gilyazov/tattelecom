<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Хлебные крошки + H1',
        'section' => ['Tattelecom', 'template'],
	),
    'cards' => array(),
	'nodes' => array(
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
    ),
    'groups' => array()
);