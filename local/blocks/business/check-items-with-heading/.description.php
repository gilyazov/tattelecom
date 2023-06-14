<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

return array(
    'block' => array(
        'name' => "Возможности (список с галочками и заголовками)",
        'section' => array('Бизнесу'),
        'version' => '1.0.1',
    ),
    'cards' => [
        '.b-check-items__item' => [
            'name' => 'Шаги',
            'label' => [
                '.b-check-items__item-text'
            ],
        ],
    ],
    'nodes' => array(
        '.gl__title' => array(
            'name' => "Заголовок блока",
            'type' => 'text',
        ),

        '.b-check-items__item-image' => array(
            'name' => "Заголовок карточки",
            'type' => 'img',
            'dimensions' => array('maxWidth' => 100, 'maxHeight' => 100),
        ),
        '.b-check-items__item-title' => array(
            'name' => "Заголовок карточки",
            'type' => 'text',
        ),
        '.b-check-items__item-text' => array(
            'name' => "Текст карточки",
            'type' => 'text',
        ),
    ),
);