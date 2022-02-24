<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

return array(
    'block' => array(
        'name' => "Форма запроса на подключение",
        'section' => ['Tattelecom', 'forms'],
        'dynamic' => false
    ),
    'cards' => [
        '.b-socials__item' => [
            'name' => 'Соц-сети',
            'label' => [
                '.b-socials__item'
            ],
            'presets' => [
                'whatsapp' => [
                    'name' => 'WhatsApp',
                    'html' => '<li class="b-socials__item" data-card-preset="whatsapp" >
                                    <a class="b-socials__link" title="Написать в Whatsapp" href="#">
                                        <span class="b-socials__link-content whatsapp">
                                            <svg width="22" height="22" aria-hidden="true"
                                                 class="b-socials__link-icon">
                                                <use xlink:href="#soc-whatsapp"></use>
                                            </svg>
                                        </span>
                                    </a>
                            </li> ',
                    'values' => [
                        '.b-socials__link' => [
                            'type' => 'link',
                            'skipContent' => true,
                        ]
                    ],
                    'disallow' => [
                        '.b-socials__link-icon',
                    ]
                ],
                'telegram' => [
                    'name' => 'Telegram',
                    'html' => '<li class="b-socials__item" data-card-preset="telegram" ><a class="b-socials__link" title="Написать в Telegram" href="#">
                                <span class="b-socials__link-content telegram">
                                    <svg width="22" height="20" aria-hidden="true"
                                         class="b-socials__link-icon">
                                        <use xlink:href="#soc-telegram"></use>
                                    </svg>
                                </span>
                            </a></li>',
                    'values' => [
                        '.b-socials__link' => [
                            'type' => 'link',
                            'skipContent' => true,
                        ]
                    ],
                    'disallow' => [
                        '.b-socials__link-icon',
                    ]
                ],
                'vk' => [
                    'name' => 'Вконтакте',
                    'html' => '<li class="b-socials__item" data-card-preset="vk" ><a class="b-socials__link" title="Написать в VK" href="#">
                                <span class="b-socials__link-content vk">
                                    <svg width="26" height="16" aria-hidden="true"
                                         class="b-socials__link-icon">
                                        <use xlink:href="#soc-vk"></use>
                                    </svg>
                                </span>
                            </a></li>',
                    'values' => [
                        '.b-socials__link' => [
                            'type' => 'link',
                            'skipContent' => true,
                        ]
                    ],
                    'disallow' => [
                        '.b-socials__link-icon',
                    ]
                ],
                'facebook' => [
                    'name' => 'Facebook',
                    'html' => '<li class="b-socials__item" data-card-preset="facebook" ><a class="b-socials__link" title="Написать в Facebook" href="#">
                                <span class="b-socials__link-content facebook">
                                    <svg width="10" height="22" aria-hidden="true" class="b-socials__link-icon">
                                        <use xlink:href="#soc-facebook"></use>
                                    </svg>
                                </span>
                            </a></li>',
                    'values' => [
                        '.b-socials__link' => [
                            'type' => 'link',
                            'skipContent' => true,
                        ]
                    ],
                    'disallow' => [
                        '.b-socials__link-icon',
                    ]
                ],
            ],
        ],
    ],
    'nodes' => array(
        '.b-support__form-title' => array(
            'name' => "Заголовок",
            'type' => 'text',
        ),
        '.b-support__form-label' => array(
            'name' => "Текст под заголовком",
            'type' => 'text',
        ),
        '.b-support__contacts-title' => array(
            'name' => "Заголовок формы",
            'type' => 'text',
        ),
        '.b-support__contacts-label' => array(
            'name' => "Текст под заголовком формы",
            'type' => 'text',
        ),
        '.b-support__contacts-tel' => array(
            'name' => "Телефон",
            'type' => 'link',
        ),
        '.b-socials__link' => array(
            'name' => "Ссылка на соц. сеть",
            'type' => 'link',
            'skipContent' => true,
        ),

    ),
//    'attrs' => array(
//        '.b-socials__link' => array(
//            'name' => "Ссылка",
//            'type' => 'link',
//            'skipContent' => true,
//        ),
//        'attribute' => 'href',
//    ),
//    'style' => array(
//        'block' => array(
//            'type' => 'block-default'
//        ),
//    ),
);