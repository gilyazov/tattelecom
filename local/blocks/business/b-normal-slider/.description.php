<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Слайдер - Кейсы (на инфоблоке)',
        'section' => ['Tattelecom', 'dynamic'],
        'dynamic' => false,
    ),
    'nodes' => array(
        '.gl__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ]
    )
);