<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Мобильная связь - карточки',
        'section' => ['Tattelecom', 'content'],
        'dynamic' => false,
    ),
    'cards' => [
        '.intro-cards-container__item' => [
            'name' => 'Карточки',
            'label' => [
                '.service-card-with-photo__title'
            ],
            'presets' => [
                'red' => [
                    'name' => 'Red',
                    'html' => '<li class="intro-cards-container__item service-card-with-photo red" data-card-preset="red">
                        <svg aria-hidden="true" class="service-card-with-photo__icon">
                            <use xlink:href="#service-card-with-photo-background"></use>
                        </svg>
                        <div class="service-card-with-photo__content">
                            <div class="service-card-with-photo__description">
                                <h3 class="service-card-with-photo__title">Мобильная связь</h3>
                                <p class="service-card-with-photo__subtitle">Выгодные тарифы на корпоративную связь
                                    <br>
                                    <br>Самое обширное покрытие сети по Республике Татарстан
                                </p>
                            </div>
                            <div class="service-card-with-photo__footer">
                                <div class="service-card-with-photo__cost-block">
                                    <span class="service-card-with-photo__cost-label">от</span>
                                    <span class="service-card-with-photo__cost-value">333</span>
                                    <span class="service-card-with-photo__cost-label">₽/мес</span>
                                </div>
                                <div class="service-card-with-photo__btns">
                                    <a href="#" class="service-card-with-photo__btn mod-simple service-card-with-photo__details gl__no-default-hover">Подробнее</a>
                                    <a href="#" class="service-card-with-photo__btn gl__main-btn mod-transparent-2 service-card-with-photo__connect-btn gl__no-default-hover js-open-callback-modal">Подключить</a>
                                </div>
                            </div>
                        </div>
                    </li>',
                    'values' => [

                    ],
                    'disallow' => [

                    ]
                ],
                'gradient-1' => [
                    'name' => 'gradient-1',
                    'html' => '<li class="intro-cards-container__item service-card-with-photo" data-card-preset="gradient-1">
                        <img class="service-card-with-photo__image" src="/local/js/template/tattelecom-1/img/b-mobile-communication/service-1.jpg" alt="Фото услуги">
                        <div class="service-card-with-photo__image-overlay gradient-1"></div>
                        <div class="service-card-with-photo__content">
                            <div class="service-card-with-photo__description">
                                <h3 class="service-card-with-photo__title">Роуминг</h3>
                                <p class="service-card-with-photo__subtitle">Входящие и исходящие звонки в поездках по России и миру</p>
                            </div>
                            <div class="service-card-with-photo__footer">
                                <div class="service-card-with-photo__cost-block">
                                    <span class="service-card-with-photo__cost-label">от</span>
                                    <span class="service-card-with-photo__cost-value">0</span>
                                    <span class="service-card-with-photo__cost-label">₽/мес</span>
                                </div>
                                <div class="service-card-with-photo__btns">
                                    <a href="#" class="service-card-with-photo__btn mod-simple service-card-with-photo__details gl__no-default-hover">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </li>',
                    'values' => [

                    ],
                    'disallow' => [

                    ]
                ],
                'gradient-2' => [
                    'name' => 'gradient-2',
                    'html' => '<li class="intro-cards-container__item service-card-with-photo" data-card-preset="gradient-2">
                        <img class="service-card-with-photo__image" src="/local/js/template/tattelecom-1/img/b-mobile-communication/service-2.jpg" alt="Фото услуги">
                        <div class="service-card-with-photo__image-overlay gradient-2"></div>
                        <div class="service-card-with-photo__content">
                            <div class="service-card-with-photo__description">
                                <h3 class="service-card-with-photo__title">Красивый номер</h3>
                                <p class="service-card-with-photo__subtitle">Номер для бизнеса, который легко запомнить клиентам</p>
                            </div>
                            <div class="service-card-with-photo__footer">
                                <div class="service-card-with-photo__cost-block">
                                    <span class="service-card-with-photo__cost-label">от</span>
                                    <span class="service-card-with-photo__cost-value">0</span>
                                    <span class="service-card-with-photo__cost-label">₽/мес</span>
                                </div>
                                <div class="service-card-with-photo__btns">
                                    <a href="#" class="service-card-with-photo__btn mod-simple service-card-with-photo__details gl__no-default-hover">Подробнее</a>
                                    <a href="" class="service-card-with-photo__btn gl__main-btn mod-transparent-2 service-card-with-photo__connect-btn gl__no-default-hover js-open-callback-modal">Выбрать номер</a>
                                </div>
                            </div>
                        </div>
                    </li>',
                    'values' => [

                    ],
                    'disallow' => [

                    ]
                ],
                'gradient-3' => [
                    'name' => 'gradient-3',
                    'html' => '<li class="intro-cards-container__item service-card-with-photo" data-card-preset="gradient-3">
									<img class="service-card-with-photo__image" src="/local/js/template/tattelecom-1/img/b-internet-page/service-1.jpg" alt="Фото услуги">
									<div class="service-card-with-photo__image-overlay gradient-3"></div>
									<div class="service-card-with-photo__content">
										<div class="service-card-with-photo__description">
											<h3 class="service-card-with-photo__title">Интернет для офиса</h3>
											<p class="service-card-with-photo__subtitle">Скоростной интернет для любой задачи</p>
										</div>
										<div class="service-card-with-photo__footer">
											<div class="service-card-with-photo__cost-block">
												<span class="service-card-with-photo__cost-label">от</span>
												<span class="service-card-with-photo__cost-value">333</span>
												<span class="service-card-with-photo__cost-label">₽/мес</span>
											</div>
											<div class="service-card-with-photo__btns">
												<a href="#" class="service-card-with-photo__btn mod-simple service-card-with-photo__details gl__no-default-hover">Подробнее</a>
												<a href="#" class="service-card-with-photo__btn gl__main-btn mod-transparent-2 service-card-with-photo__connect-btn gl__no-default-hover js-open-callback-modal">Подключить</a>
											</div>
										</div>
									</div>
								</li>',
                    'values' => [

                    ],
                    'disallow' => [

                    ]
                ],
                'blue' => [
                    'name' => 'blue',
                    'html' => '<li class="intro-cards-container__item service-card-with-photo blue" data-card-preset="blue">
									<svg aria-hidden="true" class="service-card-with-photo__icon">
										<use xlink:href="#service-card-with-photo-background"></use>
									</svg>
									<div class="service-card-with-photo__content">
										<div class="service-card-with-photo__description">
											<h3 class="service-card-with-photo__title">Интернет WI-FI</h3>
											<p class="service-card-with-photo__subtitle">Беспроводной интернет для сотрудников и гостей</p>
										</div>
										<div class="service-card-with-photo__footer">
											<div class="service-card-with-photo__cost-block">
												<span class="service-card-with-photo__cost-label">от</span>
												<span class="service-card-with-photo__cost-value">333</span>
												<span class="service-card-with-photo__cost-label">₽/мес</span>
											</div>
											<div class="service-card-with-photo__btns">
												<a href="#" class="service-card-with-photo__btn mod-simple service-card-with-photo__details gl__no-default-hover">Подробнее</a>
												<a href="#" class="service-card-with-photo__btn gl__main-btn mod-transparent-2 service-card-with-photo__connect-btn gl__no-default-hover js-open-callback-modal">Подключить</a>
											</div>
										</div>
									</div>
								</li>',
                    'values' => [

                    ],
                    'disallow' => [

                    ]
                ],
                'gradient-4' => [
                    'name' => 'gradient-4',
                    'html' => '<li class="intro-cards-container__item service-card-with-photo" data-card-preset="gradient-4">
									<img class="service-card-with-photo__image" src="/local/js/template/tattelecom-1/img/b-internet-page/service-2.jpg" alt="Фото услуги">
									<div class="service-card-with-photo__image-overlay gradient-4"></div>
									<div class="service-card-with-photo__content">
										<div class="service-card-with-photo__description">
											<h3 class="service-card-with-photo__title">Виртуальные сети IP VPN</h3>
											<p class="service-card-with-photo__subtitle">Объединение территориально разнесенных офисов в единую защищённую сеть</p>
										</div>
										<div class="service-card-with-photo__footer">
											<div class="service-card-with-photo__cost-block">
												<span class="service-card-with-photo__cost-label">от</span>
												<span class="service-card-with-photo__cost-value">444</span>
												<span class="service-card-with-photo__cost-label">₽/мес</span>
											</div>
											<div class="service-card-with-photo__btns">
												<a href="#" class="service-card-with-photo__btn mod-simple service-card-with-photo__details gl__no-default-hover">Подробнее</a>
												<a href="#" class="service-card-with-photo__btn gl__main-btn mod-transparent-2 service-card-with-photo__connect-btn gl__no-default-hover js-open-callback-modal">Подключить</a>
											</div>
										</div>
									</div>
								</li>',
                    'values' => [

                    ],
                    'disallow' => [

                    ]
                ],
            ],
        ],
    ],
    'nodes' => array(
        '.gl__title' => [
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => true
        ],

        '.service-card-with-photo__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],
        '.service-card-with-photo__subtitle' => [
            'name' => 'Описание',
            'type' => 'text'
        ],
        '.service-card-with-photo__cost-value' => [
            'name' => 'Цена',
            'type' => 'text'
        ],
        '.service-card-with-photo__details' => [
            'name' => 'Ссылка',
            'type' => 'link'
        ],
        '.service-card-with-photo__image' => array(
            'name' => 'Фон',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 1560, 'maxHeight' => 500),
        ),
    ),
    'style' => array(

    ),
);