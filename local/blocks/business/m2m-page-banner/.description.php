<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Баннер М2М',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
    ),
    'cards' => array(

    ),
    'nodes' => array(
        '.gl__title' => [
            'name' => 'Заголовок блока',
            'type' => 'text'
        ],

        '.b-page-banner__m2m-title' => [
            'name' => 'Заголовок баннера',
            'type' => 'text'
        ],
        '.b-page-banner__m2m-subtitle' => [
            'name' => 'Подзаголовок баннера',
            'type' => 'text'
        ],
        '.b-page-banner__m2m-price-caption' => [
            'name' => 'Подпись перед ценой',
            'type' => 'text'
        ],
        '.b-page-banner__cost' => [
            'name' => 'Цена',
            'type' => 'text'
        ],
        '.b-page-banner__cost-label' => [
            'name' => 'Валюта/мес',
            'type' => 'text'
        ],
        '.b-page-banner__right-image' => [
            'name' => 'Картинка',
            'type' => 'img'
        ],
    ),
    'style' => array(

    ),
);