<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Инструкции',
        'section' => ['Tattelecom', 'page'],
        'dynamic' => false,
	),
    'cards' => [
        '.errors-list__list-item' => [
            'name' => 'Ошибка',
            'label' => [
                '.errors-list__error-btn-label'
            ]
        ]
    ],
	'nodes' => array(
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        
        '.errors-list__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.errors-list__error-btn-label' => array(
            'name' => 'Ошибка',
            'type' => 'text',
        ),
        '.errors-list__error-content-text' => array(
            'name' => 'Текст',
            'type' => 'text',
        ),
	),
    'groups' => array(

    ),
);