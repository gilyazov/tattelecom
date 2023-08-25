<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

return array(
    'block' => array(
        'name' => "Ссылки на услуги",
        'section' => array('Бизнесу'),
        'version' => '1.0.1',
    ),
    'cards' => [
        '.b-services-links__grid-item' => [
            'name' => 'Услуги',
            'label' => [
                '.faq__services-caption'
            ],
        ],
    ],
    'nodes' => array(
        '.b-services-links__grid-link' => array(
            'name' => "Ссылка на услугу",
            'type' => 'link',
            'skipContent' => true,
        ),
        '.b-services-links__grid-link-text' => array(
            'name' => "Текст",
            'type' => 'text',
        ),
    ),
);