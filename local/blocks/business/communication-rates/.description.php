<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

return array(
    'block' => array(
        'name' => "Междугородняя связь. Тарифы",
        'section' => ['Tattelecom', 'content']
    ),
    'nodes' => [
        'bitrix:news.list' => array(
            'type' => 'component',
            'extra' => array(
                'editable' => array(
                    'IBLOCK_ID' => array(),
                    'PARENT_SECTION' => array()
                )
            )
        )
    ],
    'assets' => [
        'js' => [
            BUILD_PATH . 'js/b-communication-page.js'
        ]
    ]
);