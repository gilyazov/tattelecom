<header class="header mod-business js-business-main" id="header-host">
    <div class="header__content" style="background-image: url('<?=BUILD_PATH?>img/header/buliness-background.jpg')">
        <div class="header__main-content">
            <div class="header__top-block">
                <div class="gl__page-content">
                    <div class="header__top-block-content">
                        <ul class="header__top-menu-items-list gl__md-hide">
                            <li class="header__top-menu-items">
                                <a href="" class="header__top-menu-items-link">Таттелеком</a>
                            </li>
                            <li class="header__top-menu-items">
                                <a href="" class="header__top-menu-items-link">Частным клиентам</a>
                            </li>
                            <li class="header__top-menu-items">
                                <a href="" class="header__top-menu-items-link">Бизнесу</a>
                            </li>
                            <li class="header__top-menu-items">
                                <a href="" class="header__top-menu-items-link">Акции</a>
                            </li>
                            <li class="header__top-menu-items mod-more">
                                <button type="button" class="header__top-menu-items-link">Ещё</button>
                            </li>
                        </ul>
                        <div class="gl__md-show header__top-menu-mobile-nav">
                            <button type="button" class="header__top-menu-items-link">Частным клиентам</button>
                            <div class="header__top-menu-items-link header__top-menu-hover-nav mod-b-top-menu-hover">Ещё<div class="header__top-menu-hover-container">
                                    <div class="header__top-menu-hover-content">
                                        <a href="" class="header__top-menu-items-link">Бизнесу</a>
                                        <a href="" class="header__top-menu-items-link">Таттелеком</a>
                                        <a href="" class="header__top-menu-items-link">Частным клиента</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header__top-block-right">
                            <ul class="header__top-menu-items-list gl__bg-hide">
                                <li class="header__top-menu-items">
                                    <a href="" class="header__top-menu-items-link">Поддержка</a>
                                </li>
                            </ul>
                            <div class="header__contacts-wrapper">
                                <a href="" class="header__top-menu-items-link mod-with-icons js-show-location-popup" data-hover-value="location">
                                    <svg width="20" height="20" aria-hidden="true" class="header__top-menu-items-link-icon">
                                        <use xlink:href="#geolocation"></use>
                                    </svg>Казань
                                </a>
                                <a href="" class="header__top-menu-items-link mod-with-icons">
                                    <svg width="20" height="20" aria-hidden="true" class="header__top-menu-items-link-icon">
                                        <use xlink:href="#lk"></use>
                                    </svg>Войти
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__b-bottom-block">
                <div class="gl__page-content header__bottom-block-content">
                    <div class="header__logo-wrapper">
                        <a href="<?=SITE_DIR?>" class="header__logo-link">
                            <img src="<?=BUILD_PATH?>img/header/logo-business.svg" alt="" class="header__logo mod-business">
                        </a>
                    </div>
                    <div class="header__bottom-block-right mod-business gl__bg-hide js-b-menu-header header__hide-when-search js-hide-when-search">
                        <ul class="header__bottom-menu-list">
                            <li class="header__bottom-menu-item">
                                <a href="" class="header__bottom-menu-link mod-business" data-hover-value="business-solutions">Комплексные решения для бизнеса</a>
                            </li>
                            <li class="header__bottom-menu-item">
                                <a href="" class="header__bottom-menu-link mod-business" data-hover-value="connection">Связь</a>
                            </li>
                            <li class="header__bottom-menu-item">
                                <a href="" class="header__bottom-menu-link mod-business" data-hover-value="digital-services">Цифровые сервисы</a>
                            </li>
                            <li class="header__bottom-menu-item">
                                <a href="" class="header__bottom-menu-link mod-business" data-hover-value="promotion">Продвижение</a>
                            </li>
                        </ul>
                    </div>
                    <form class="header__input-search-form js-show-when-search mod-business">
                        <label class="header__input-search-wrapper">
                            <svg width="24" height="24" aria-hidden="true" class="header__input-search-icon">
                                <use xlink:href="#search"></use>
                            </svg>
                            <input type="text" class="header__input-search js-input-search" placeholder="Поиск">
                            <button type="button" class="header__search-btn-close js-close-search-btn">
                                <svg width="30" height="30" aria-hidden="true" class="header__search-btn-close-icon">
                                    <use xlink:href="#close"></use>
                                </svg>
                            </button>
                        </label>
                    </form>
                    <div class="header__bottom-block-right header__hide-when-search js-hide-when-search">
                        <div class="header__btns-container">
                            <button type="button" class="header__bottom-btn header__btn-search js-open-search-btn gl__lg-hide">
                                <svg width="30" height="30" aria-hidden="true" class="header__btn-search-icon mod-business">
                                    <use xlink:href="#search"></use>
                                </svg>
                            </button>
                            <button type="button" class="header__b-main-page-menu-btn gl__mx-hide">Подобрать решение</button>
                            <button type="button" class="header__bottom-btn header__btn-burger gl__bg-show mod-business js-open-side-bar"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__popup-container mod-business js-header-popup-container">
            <div class="header__popup-wrapper mod-business js-header-popup-wrapper" style="background-image: url('img/header/buliness-background.jpg')">
                <div class="gl__page-content">
                    <div class="header__b-popup-content js-header-popup js-b-popup-margin" data-alignment="0" data-hover-value="business-solutions">
                        <ul>
                            <li>
                                <a href="" class="header__b-menu-item-control">
                                    <img src="<?=BUILD_PATH?>img/header/business-menu/squares.svg" alt="" class="header__b-menu-item-control-icon"> Комплекс услуг связи (Единый бизнес)
                                </a>
                            </li>
                            <li>
                                <a href="" class="header__b-menu-item-control">
                                    <img src="<?=BUILD_PATH?>img/header/business-menu/tree.svg" alt="" class="header__b-menu-item-control-icon"> Виртуальная АТС
                                </a>
                            </li>
                            <li>
                                <a href="" class="header__b-menu-item-control">
                                    <img src="<?=BUILD_PATH?>img/header/business-menu/files.svg" alt="" class="header__b-menu-item-control-icon"> Таттелеком Коннект (ЭДокс)
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__b-popup-content js-header-popup js-b-popup-margin" data-alignment="0" data-hover-value="connection">
                        <div class="header__b-popup-content-item">
                            <div class="header__b-popup-caption-list">
                                <img src="<?=BUILD_PATH?>img/header/business-menu/tel.svg" alt="" class="header__b-menu-item-control-icon"> Мобильная связь
                            </div>
                            <ul class="header__b-popup-list">
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Тарифы Мобильной связи</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Тарифы Мобильного интернета</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Роуминг</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">«Красивый» номер</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header__b-popup-content-item">
                            <div class="header__b-popup-caption-list">
                                <img src="<?=BUILD_PATH?>img/header/business-menu/internet.svg" alt="" class="header__b-menu-item-control-icon"> Интернет
                            </div>
                            <ul class="header__b-popup-list">
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Интернет для офиса</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Интернет Wi-Fi</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Интернет по Радиоканалу</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Виртуальные сети IP VPN</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header__b-popup-content-item">
                            <div class="header__b-popup-caption-list">
                                <img src="<?=BUILD_PATH?>img/header/business-menu/telephony.svg" alt="" class="header__b-menu-item-control-icon"> Телефония
                            </div>
                            <ul class="header__b-popup-list">
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Междугородная и международная связь</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Виртуальная АТС</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Цифровая Телефония</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Сервисы и услуги</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header__b-popup-content js-header-popup js-b-popup-margin" data-hover-value="digital-services">
                        <div class="header__b-popup-content-item">
                            <div class="header__b-popup-caption-list">
                                <img src="<?=BUILD_PATH?>img/header/business-menu/internet-things.svg" alt="" class="header__b-menu-item-control-icon"> Интернет вещей
                            </div>
                            <ul class="header__b-popup-list">
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">LoRaWAN</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">М2М решения для бизнеса</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header__b-popup-content-item">
                            <div class="header__b-popup-caption-list">
                                <img src="<?=BUILD_PATH?>img/header/business-menu/data-processing.svg" alt="" class="header__b-menu-item-control-icon"> Обработка и хранение данных
                            </div>
                            <ul class="header__b-popup-list">
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Colocation</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Виртуальный сервер</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Web–хостинг</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Регистрация доменов</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header__b-popup-content-item">
                            <div class="header__b-popup-caption-list">
                                <img src="<?=BUILD_PATH?>img/header/business-menu/control.svg" alt="" class="header__b-menu-item-control-icon"> Контроль и видеонаблюдение
                            </div>
                            <ul class="header__b-popup-list">
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Облачное видеонаблюдение</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">М2М Контроль</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Видеоаналитика</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Домофония</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header__b-popup-content-item">
                            <div class="header__b-popup-caption-list">
                                <img src="<?=BUILD_PATH?>img/header/business-menu/safety.svg" alt="" class="header__b-menu-item-control-icon"> Безопасность
                            </div>
                            <ul class="header__b-popup-list">
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">DDoS защита</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header__b-popup-content-item">
                            <div class="header__b-popup-caption-list">
                                <img src="<?=BUILD_PATH?>img/header/business-menu/solutions.svg" alt="" class="header__b-menu-item-control-icon"> Решения для бизнеса
                            </div>
                            <ul class="header__b-popup-list">
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Видеоконференцсвязь</a>
                                </li>
                                <li class="header__b-popup-item">
                                    <a href="" class="header__b-popup-item-link">Услуги Ак Барс Банк</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header__b-popup-content js-header-popup js-b-popup-margin" data-alignment="3" data-hover-value="promotion">
                        <ul>
                            <li>
                                <a href="" class="header__b-menu-item-control">
                                    <img src="<?=BUILD_PATH?>img/header/business-menu/sms.svg" alt="" class="header__b-menu-item-control-icon"> SMS рассылка
                                </a>
                            </li>
                            <li>
                                <a href="" class="header__b-menu-item-control">
                                    <img src="<?=BUILD_PATH?>img/header/business-menu/call-center.svg" alt="" class="header__b-menu-item-control-icon"> Услуги Call–центра
                                </a>
                            </li>
                            <li>
                                <a href="" class="header__b-menu-item-control">
                                    <img src="<?=BUILD_PATH?>img/header/business-menu/smart-wifi.svg" alt="" class="header__b-menu-item-control-icon"> SMART Wi-Fi
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__b-popup-content js-header-popup js-b-popup-margin location-popup-content mod-b-popup-content" data-hover-value="location">
                        <div class="header__popup-item-wrapper">
                            <span class="location-popup-content__heading">Республика Татарстан</span>
                            <ul class="header__popup-item-list">
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Казань</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Альметьевск</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Агрыз</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Бугульма</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Елабуга</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Набережные Челны</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Нижнекамск</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Чистополь</a>
                                </li>
                            </ul>
                            <ul class="header__popup-item-list mod-not-main">
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Азнакаево</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Актюбинский</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Боровое Матюшино</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Бавлы</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Высокая Гора</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Джалиль</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Заинск</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Зеленодольск</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Камские поляны</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Куркачи</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Лениногорск</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Менделеевск</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Нурлат</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Осиново</a>
                                </li>
                                <li>
                                    <a href="" class="header__popup-item-link gl__no-default-hover">Усады</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header__popup-item-wrapper">
                            <button class="location-popup-content__close-btn">
                                <svg width="30" height="30" aria-hidden="true" class="header__search-btn-close-icon">
                                    <use xlink:href="#close"></use>
                                </svg>
                            </button>
                            <form action="/" class="location-popup-content__form" data-need-validation data-parsley-validate>
                                <span class="location-popup-content__legend">Другой населённый пункт</span>
                                <div class="select">
                                    <div class="select__container mod-small-choices-list mod-simple-design mod-b-select">
                                        <label class="select__wrapper">
                                            <select class="gl__select js-custom-select" name="region" data-parsley-required="" data-parsley-trigger="change">
                                                <option placeholder value="">Район</option>
                                                <option value="Район">Район</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <div class="select">
                                    <div class="select__container mod-small-choices-list mod-simple-design mod-b-select">
                                        <label class="select__wrapper">
                                            <select class="gl__select js-custom-select" name="city" data-parsley-required="" data-parsley-trigger="change">
                                                <option placeholder value="">Населённый пункт</option>
                                                <option value="Район">Населённый пункт</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <button class="location-popup-content__button header__b-main-page-menu-btn">Выбрать город</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>