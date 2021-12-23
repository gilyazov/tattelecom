<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Баннер + форма (переход со старым номером)',
        'section' => ['Tattelecom', 'banner'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.fly-top-block__subtitle-1' => array(
            'name' => 'Текст',
            'type' => 'text',
        ),
        '.fly-top-block__subtitle-2' => array(
            'name' => 'Текст',
            'type' => 'text',
        ),
	),
    'groups' => array(

    ),
);