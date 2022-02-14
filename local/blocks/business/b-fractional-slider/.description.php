<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Слайдер услуг',
        'section' => ['Tattelecom', 'dynamic'],
        'dynamic' => false,
    ),
    'cards' => array(

    ),
    'nodes' => array(
        '.gl__title' => [
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => true
        ],
        'bitrix:news.list' => array(
            'type' => 'component',
            'extra' => array(
                'editable' => array(
                    'PARENT_SECTION' => array()
                )
            )
        )
    ),
    'style' => array(

    ),
);