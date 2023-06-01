<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Вопросы и ответы',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [
        '.faq__item' => [
            'name' => 'Вопрос',
            'label' => [
                '.button_text_span'
            ]
        ],
    ],
	'nodes' => array(
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.button_text_span' => array(
            'name' => 'Вопрос',
            'type' => 'text',
        ),
        '.gl__text' => array(
            'name' => 'Текст',
            'type' => 'text',
        ),

        '.faq__link-show-all' => array(
            'name' => 'Ссылка',
            'type' => 'link',
            'skipContent' => true
        ),
	),
    'groups' => array(

    ),
);