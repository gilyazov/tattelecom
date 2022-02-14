<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

return array(
    'block' => array(
        'name' => "Тарифы (без иконок)",
        'section' => array('Бизнесу'),
        'version' => '1.0.1',
    ),
    'cards' => [

    ],
    'nodes' => array(
        '.gl__title' => array(
            'name' => "Заголовок",
            'type' => 'text',
        ),
        'bitrix:news.list' => array(
            'type' => 'component',
            'extra' => array(
                'editable' => array(
                    'IBLOCK_ID' => array(),
                    'PARENT_SECTION' => array()
                )
            )
        )
    ),
);