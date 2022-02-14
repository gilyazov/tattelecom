<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Комплексные решения для бизнеса',
        'section' => ['Tattelecom', 'dynamic'],
        'dynamic' => false,
    ),
    'cards' => array(
        '.b-low-slider__slide' => [
            'name' => 'Карточки',
            'label' => [
                '.b-low-slider__title'
            ],
            'presets' => [
                'simple' => [
                    'name' => 'simple',
                    'html' => '<a class="b-low-slider__slide swiper-slide" data-card-preset="simple">
                        <div class="b-low-slider__slide-content">
                            <img src="/local/js/template/tattelecom-1/img/b-main-page/business-solutions/img-1.jpg" alt="" class="b-low-slider__background">
                            <div class="b-low-slider__title">Тарифы
                                <br>мобильной
                                <br>связи
                            </div>
                        </div>
                    </a>'
                ],
                'subtitle' => [
                    'name' => 'subtitle',
                    'html' => '<a class="b-low-slider__slide swiper-slide" data-card-preset="subtitle">
                        <div class="b-low-slider__slide-content">
                            <img src="/local/js/template/tattelecom-1/img/b-main-page/business-solutions/img-2.jpg" alt="" class="b-low-slider__background">
                            <div class="b-low-slider__title mod-white">Красивый номер
                                <br>в подарок
                            </div>
                            <div class="b-low-slider__subtitle mod-white">при подключении
                                <br>мобильной связи
                            </div>
                        </div>
                    </a>'
                ],
            ]
        ]
    ),
    'nodes' => array(
        '.gl__title' => [
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => true
        ],

        '.b-low-slider__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],
        '.b-low-slider__subtitle' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],
        '.b-low-slider__background' => array(
            'name' => 'Фон',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 1560, 'maxHeight' => 500),
        ),
    ),
    'style' => [
        'block' => [
            'type' => [],
        ],
        'nodes' => [
            '.b-low-slider__title' => [
                'name' => 'Белый текст',
                'type' => ['mod-white']
            ],
            '.b-low-slider__subtitle' => [
                'name' => 'Белый текст',
                'type' => ['mod-white']
            ]
        ],
    ],
);