<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Проверка услуги безопасный двор',
        'section' => ['Tattelecom', 'forms'],
        'dynamic' => false,
    ),
    'cards' => array(

    ),
    'nodes' => array(
        "tattelecom:check.camera" => array(
            'type' => 'component',
            'extra' => array(
                'editable' => array(
                    'TITLE' => array()
                )
            )
        )
    ),
    'style' => array(

    ),
);