<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Отзывы',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [
        '.swiper-slide' => [
            'name' => 'Отзыв',
            'label' => [
                '.review span'
            ]
        ]
    ],
	'nodes' => array(
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),

        '.review p' => array(
            'name' => 'Отзыв',
            'type' => 'text',
        ),
        '.review span' => array(
            'name' => 'Фио',
            'type' => 'text',
        ),
        'blockquote img' => array(
            'name' => 'Аватарка',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 500, 'maxHeight' => 500)
        ),
	),
    'assets' => array(
        'js' => [
            BUILD_PATH . 'js/main-page.js'
        ]
    ),
);