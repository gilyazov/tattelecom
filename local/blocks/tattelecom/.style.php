<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(
	\Bitrix\Landing\Manager::getDocRoot() .
	'/bitrix/modules/landing/blocks/.style.php'
);

return [
	'style' => [
        'display-bx' => [
            'name' => Loc::getMessage('LANDING_BLOCK_STYLE_DEVICE_DISPLAY'),
            'property' => 'display',
            'type' => 'display',
            'items' => [
                ['name' => '<span class="landing-ui-button-desktop"></span>', 'value' => 'gl__visually-hidden']
            ],
        ],
        'modal-show' => [
            'name' => "Модальное окно?",
            'property' => 'display',
            'type' => 'display',
            'items' => [
                ['name' => '<span class="landing-ui-button-desktop"></span>', 'value' => 'js-open-callback-modal']
            ],
        ],
        'set-active' => [
            'name' => 'Активность',
            'property' => 'display',
            'type' => 'display',
            'items' => [
                ['name' => '<span class="landing-ui-button-desktop"></span>', 'value' => 'active']
            ],
        ],
        'mod-white' => [
            'name' => 'Белый текст',
            'property' => 'display',
            'type' => 'display',
            'items' => [
                ['name' => '<span class="landing-ui-button-desktop"></span>', 'value' => 'mod-white']
            ],
        ]
	],
	'group' => [
		// dont forget add new usage 'background' style in \Bitrix\Landing\Node\StyleImg::STYLES_WITH_IMAGE
	],
];