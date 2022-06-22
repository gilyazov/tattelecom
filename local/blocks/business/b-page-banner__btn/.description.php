<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Заголовок + баннер + кнопка',
        'section' => ['Tattelecom', 'banner'],
        'dynamic' => false,
    ),
    'cards' => array(

    ),
    'nodes' => array(
        '.gl__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],

        '.b-page-banner__mobile-title' => [
            'name' => 'Заголовок мобильной версии',
            'type' => 'text'
        ],
        '.b-page-banner__accent-title' => [
            'name' => 'Заголовок в десктопе',
            'type' => 'text'
        ],
        '.b-page-banner__btn' => [
            'name' => 'Кнопка',
            'type' => 'link'
        ],
    ),
    'style' => array(

    ),
);