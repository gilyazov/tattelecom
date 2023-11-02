<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Заголовок + баннер',
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
        '.b-page-banner__mobile-label' => [
            'name' => 'Описание мобильной версии',
            'type' => 'text'
        ],

        '.b-page-banner__accent-title' => [
            'name' => 'Заголовок в десктопе',
            'type' => 'text'
        ],
        '.b-page-banner__label' => [
            'name' => 'Подпись',
            'type' => 'text'
        ],
        '.b-page-banner__image' => [
            'name' => 'Картинка',
            'type' => 'img'
        ],
    ),
    'attrs' => array(
        'source' => array(
            'name' => "Картинка в мобиле",
            'type' => 'text',
            'attribute' => 'srcset',
        ),
    ),
);