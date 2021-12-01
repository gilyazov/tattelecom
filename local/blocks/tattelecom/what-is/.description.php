<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Что такое «домашний кэшбэк»?',
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
        '.rates-preview__content-caption' => array(
            'name' => 'Описание',
            'type' => 'text',
        ),

        '.why-iteko__card' => array(
            'name' => 'Ссылка',
            'type' => 'link',
            'skipContent' => true,
        ),

        '.why-iteko__card-text' => array(
            'name' => 'Текст',
            'type' => 'text',
        ),
	),
    'groups' => array(

    ),
);