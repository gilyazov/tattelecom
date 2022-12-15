<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => 'Подвал',
        'section' => ['Tattelecom', 'template'],
		'dynamic' => false,
	),
	'cards' => array(
        '.page-footer__info-list-item' => [
            'name' => 'Контакты',
            'label' => [
                '.page-footer__info-card-title'
            ]
        ]
	),
	'nodes' => array(
        '.page-footer__info-card-title' => [
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => true
        ],
        '.page-footer__info-card-link' => [
            'name' => 'Ссылка',
            'type' => 'link'
        ]
	),
    'style' => array(

    ),
);