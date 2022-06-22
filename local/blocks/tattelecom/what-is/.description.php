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
        '.what-is__text' => array(
            'name' => 'Описание',
            'type' => 'text',
        ),

        '.what-is__num' => array(
            'name' => 'Цифра',
            'type' => 'text',
        ),
        '.what-is__caption' => array(
            'name' => 'Описание',
            'type' => 'text',
        ),
        /*'.why-iteko__card' => array(
            'name' => 'Ссылка',
            'type' => 'link',
            'skipContent' => true,
        ),*/
	),
    'groups' => array(

    ),
);