<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
        'name' => 'Преимущества Промо-интернет ',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
	),
    'cards' => [
        '.promo-internet-info__item' => [
            'name' => ' Карточка',
            'label' => [
                '.promo-internet-info__item-caption'
            ]
        ]
    ],
	'nodes' => array(
        '.gl__title' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.promo-internet-info__item-caption' => array(
            'name' => 'Заголовок',
            'type' => 'text',
        ),
        '.promo-internet-info__item-text' => array(
            'name' => 'Описание',
            'type' => 'text',
        ),
        '.promo-internet-info__item-image' => array(
            'name' => 'Иконка',
            'type' => 'img',
        ),
	),
);