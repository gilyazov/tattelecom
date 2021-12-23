<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Баннер + ссылка',
        'section' => ['Tattelecom', 'banner'],
        'dynamic' => false,
	),
    'cards' => [
        '.swiper-slide' => [
            'name' => 'Слайд',
            'label' => [
                '.rates-preview__content-title'
            ]
        ]
    ],
	'nodes' => array(
        '.rates-preview__content-title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.rates-preview__content-subtitle' => array(
            'name' => 'Подзаголовок',
            'type' => 'text',
        ),
        '.rates-preview__content-caption' => array(
            'name' => 'Описание',
            'type' => 'text',
        ),
        '.rates-preview__btn' => array(
            'name' => 'Подробнее',
            'type' => 'link',
            "skipContent" => true,
        ),
        '.rates-preview' => array(
            'name' => 'Фон',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 1920, 'maxHeight' => 470)
        ),
        '.rates-preview__img' => array(
            'name' => 'Картинка',
            'type' => 'img',
        ),
	),
    'attrs' => [
        '.js-swiper-custom' => [
            'name' => 'Время смены слайдера',
            'type' => 'text',
            'attribute' => 'data-swiper-autoplay',
            'value' => '5000'
        ]
    ],
    'assets' => array(
        'js' => [
            BUILD_PATH . 'js/main-page.js'
        ]
    ),
);