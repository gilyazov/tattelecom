<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Полезная информация',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [
        '.useful-information__slide-wrapper' => [
            'name' => 'Карточки',
            'label' => [
                '.useful-information__slide-content-text'
            ]
        ]
    ],
	'nodes' => array(
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),

        '.useful-information__slide-content-text' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.useful-information__slide-image' => array(
            'name' => 'Фон',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 500, 'maxHeight' => 340)
        ),
        '.useful-information__slide' => array(
            'name' => 'Ссылка',
            'type' => 'link',
            'skipContent' => true,
        ),
	),
    'groups' => array(

    ),
);