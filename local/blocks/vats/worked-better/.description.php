<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Работали лучше',
        'section' => ['Tattelecom', 'content'],
	),
    'cards' => [
        '.swiper-slide' => [
            'name' => 'Слайд',
            'label' => [
                '.worked-better__swaper-item-text'
            ]
        ]
    ],
	'nodes' => [
        '.worked-better__swaper-item-text' => array(
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => false
        ),
        '.worked-better__swaper-item-img' => array(
            'name' => 'Слайд',
            'type' => 'img',
//            'dimensions' => array('maxWidth' => 800, 'maxHeight' => 500)
        ),
    ],
    'groups' => array()
);