<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'У Вас еще не подключены услуги?',
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
        '.order-call__text' => array(
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