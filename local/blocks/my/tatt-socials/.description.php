<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Контакты',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [

    ],
	'nodes' => array(
        '.b-support__contacts-title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.b-support__contacts-label' => array(
            'name' => 'Подзаголовок',
            'type' => 'text',
        ),
        '.b-support__contacts-tel' => array(
            'name' => 'Ссылка',
            'type' => 'link',
        ),
        'bitrix:news.list' => array(
            'type' => 'component',
            'extra' => array(
                'editable' => array(
                    'PARENT_SECTION' => array()
                )
            )
        )
	)
);