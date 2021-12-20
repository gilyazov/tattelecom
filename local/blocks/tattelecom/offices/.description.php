<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Офисы продаж',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => array(),
	'nodes' => array(
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.checkbox__text' => array(
            'name' => 'Подпись чекбокса',
            'type' => 'text',
        ),
        '.sales-offices-map__not-found' => array(
            'name' => 'Сообщение, если ничего не найдено',
            'type' => 'text',
        )
	),
    'groups' => array(

    ),
    'assets' => [
        'css' => [],
        'js' => [
            BUILD_PATH . 'js/sales-offices-page.js'
        ]
    ]
);