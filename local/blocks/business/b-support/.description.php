<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Форма - Служба поддержки',
        'section' => ['Tattelecom', 'forms'],
        'dynamic' => false,
    ),
    'cards' => array(

    ),
    'nodes' => array(
        'bitrix:iblock.element.add.form' => array(
            'type' => 'component',
            'extra' => array(
                'editable' => array(
                    'IBLOCK_ID' => [],
                    'USE_CAPTCHA' => [],
                )
            )
        )
    ),
    'style' => array(

    ),
);