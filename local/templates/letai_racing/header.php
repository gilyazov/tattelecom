<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

/** @var \CMain $APPLICATION */

if (!\Bitrix\Main\Loader::includeModule('landing'))
{
	return;
}

\Bitrix\Landing\Connector\Mobile::prologMobileHit();
$language= \Bitrix\Landing\Manager::getLangISO();
?><!DOCTYPE html>
<html xml:lang="<?= $language;?>" lang="<?= $language;?>" class="<?$APPLICATION->ShowProperty('HtmlClass');?>">
<head>
	<?$APPLICATION->ShowProperty('AfterHeadOpen');?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="HandheldFriendly" content="true" >
	<meta name="MobileOptimized" content="width">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<title><?$APPLICATION->ShowTitle();?></title>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=52c4e409-b738-4d51-8247-c96bd1ece642&lang=ru_RU" type="text/javascript">
	<?
	$APPLICATION->ShowHead();
	$APPLICATION->ShowProperty('MetaOG');
	$APPLICATION->ShowProperty('BeforeHeadClose');
	?>
</head>
<body class="no-touch <?$APPLICATION->ShowProperty('BodyClass');?>" <?$APPLICATION->ShowProperty('BodyTag');?> ontouchstart="">
<?
/*
This is commented to avoid Project Quality Control warning
$APPLICATION->ShowPanel();
*/
?>
<?$APPLICATION->ShowProperty('Noscript');?>
<?$APPLICATION->ShowProperty('AfterBodyOpen');?>
<header class="page-header">
    <div class="page-header__row">
        <a href="<?=SITE_DIR?>" class="page-header__letai-racing">
            <img src="/local/js/letai-racing/dist/images/letai-racing.webp" alt="" class="page-header__letai-racing-image">
        </a>
        <a href="/" class="page-header__letai">
            <img src="/local/js/letai-racing/dist/images/letai.svg" alt="" class="page-header__letai-image">
        </a>
        <a href="https://kazandigitalweek.com/ru/site" target="_blank" class="page-header__digital-week">
            <img src="/local/js/letai-racing/dist/images/digital-week.svg" alt="" class="page-header__digital-week-image">
        </a>
        <div class="page-header__menu">
            <nav class="page-header__nav">
                <ul>
                    <li>
                        <a href="#about">
                            О мероприятии
                        </a>
                    </li>
                    <li>
                        <a href="#competence">
                            Для кого
                        </a>
                    </li>
                    <li>
                        <a href="https://docs.google.com/document/d/1yJ5hXllcJqLbtUS8Hy3ZLYWD6tC2-FXb0se56mZp0p4/edit?usp=sharing" target="_blank">
                            Регламент
                        </a>
                    </li>
                    <li>
                        <a href="#competitions">
                            Соревновательные направления
                        </a>
                    </li>
                    <li>
                        <a href="#prizes">
                            Призовой фонд
                        </a>
                    </li>
                    <li>
                        <a href="#location">
                            Локация
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <button class="page-header__burger">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>
<main class="page-main">
    <section class="intro">
        <div class="intro__bg">
            <img src="/local/js/letai-racing/dist/images/intro-grid.webp" alt="" class="intro__bg-image">
        </div>
        <div class="intro__content">
            <div class="intro__text-content">
                <h1 class="intro__heading">
                    <em>Letai</em>Racing 2023
                </h1>
                <div class="intro__desc">
                    Соревнования мини-беспилотных автомобилей
                </div>
                <div class="intro__date">
                    20-21 сентября Казань
                </div>
                <a href="#participant" class="intro__link">
                    Список участников
                </a>
                <div class="intro__terms">
                    Прием заявок завершен!
                </div>
            </div>
            <div class="intro__image-wrapper">
                <img src="/local/js/letai-racing/dist/images/intro-image.webp" alt="" class="intro__image">
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="about__content">
            <div class="about__text-block">
                <h3>
                    О мероприятии
                </h3>
                <p>
                    Соревнование LetaiRacing 2023 в категории JetRacer проводится в рамках Международной выставки Kazan
                    Digital Week.
                </p>
                <p>
                    Для всех, кто увлекается Робототехникой и Искусственным Интеллектом.
                </p>
            </div>
            <div class="about__letai-racing">
                <img src="/local/js/letai-racing/dist/images/letai-racing-large.webp" alt="" class="about__letai-racing-image">
            </div>
            <div class="about__letai">
                <img src="/local/js/letai-racing/dist/images/letai.svg" alt="" class="about__letai-image">
            </div>
            <div class="about__text-block">
                <h3>
                    Организатор
                </h3>
                <p>
                    Летай - крупнейший
                    в Республике Татарстан оператор связи.
                </p>
            </div>
        </div>
    </section>
    <section class="competencies" id="competence">
        <div class="competencies__bg">
            <img src="/local/js/letai-racing/dist/images/competencies-bg.webp" alt="" class="competencies__bg-image">
        </div>
        <div class="competencies__content">
            <h2 class="competencies__heading">
                Основные компетенции
            </h2>
            <div class="competencies__text">
                Участники работают с ключевыми технологиями искусственного интеллекта
            </div>
            <ul class="competencies__list">
                <li class="competencies__list-item">
                    <div class="competencies__card">
                        <div class="competencies__card-icon-container">
                            <img src="/local/js/letai-racing/dist/images/competencies/1.svg" alt="" class="competencies__card-icon">
                        </div>
                        <h3 class="competencies__card-title">
                            компьютерное 
                            зрение
                        </h3>
                    </div>
                </li>
                <li class="competencies__list-item">
                    <div class="competencies__card">
                        <div class="competencies__card-icon-container">
                            <img src="/local/js/letai-racing/dist/images/competencies/2.svg" alt="" class="competencies__card-icon">
                        </div>
                        <h3 class="competencies__card-title">
                            нейронные
                            сети
                        </h3>
                    </div>
                </li>
                <li class="competencies__list-item">
                    <div class="competencies__card">
                        <div class="competencies__card-icon-container">
                            <img src="/local/js/letai-racing/dist/images/competencies/3.svg" alt="" class="competencies__card-icon">
                        </div>
                        <h3 class="competencies__card-title">
                            методы
                            машинного обучения
                        </h3>
                    </div>
                </li>
                <li class="competencies__list-item">
                    <div class="competencies__card">
                        <div class="competencies__card-icon-container">
                            <img src="/local/js/letai-racing/dist/images/competencies/4.svg" alt="" class="competencies__card-icon">
                        </div>
                        <h3 class="competencies__card-title">
                            системы
                            принятия решений
                        </h3>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="racing" id="why">
        <div class="racing__bg">
            <img src="/local/js/letai-racing/dist/images/racing-bg.webp" alt="" class="racing__bg-image">
        </div>
        <div class="racing__content">
            <div class="racing__text-block">
                <h2 class="racing__heading">
                    <em>Letai</em>Racing 2023
                </h2>
                <div class="racing__text">
                    Почему ИИ? Применение искусственного интеллекта все глубже проникает в жизнь каждого из нас, но в то же
                    время ИИ все еще остается сложным и непонятным для широкой аудитории.
                </div>
            </div>
            <img src="/local/js/letai-racing/dist/images/racing/1.webp" alt="" class="racing__image">
            <img src="/local/js/letai-racing/dist/images/racing/2.webp" alt="" class="racing__image">
            <div class="racing__text-block">

                <div class="racing__text">
                    Почему беспилотные автомобили? Мы видим, что на рынке есть аппаратные решения для беспилотных
                    автомобилей, но вопрос необходимого ПО до конца не решен, даже не смотря на доступность большого
                    количества библиотек и доступных одноплатных компьютеров.
                </div>
            </div>
            <div class="racing__text-block">
                <div class="racing__text">
                    Почему LetaiRacing? Мы взяли на себя расходы на приобретение 10 roboracer и, в рамках подготовки к
                    мероприятию, проведем серию обучающих вебинаров. Таким образом мы хотим снизить порог вхождения для
                    изучения таких новейших технологий как искусственный интеллект, делая его более доступным.
                </div>
            </div>
            <img src="/local/js/letai-racing/dist/images/racing/3.webp" alt="" class="racing__image">
        </div>
    </section>
    <section class="competitions" id="competitions">
        <div class="competitions__content">
            <h2 class="competitions__heading">
                Соревновательные направления
            </h2>
            <ul class="competitions__list">
                <li class="competitions__list-item">
                    <div class="competitions__card">
                        <div class="competitions__card-icon-container">
                            <img src="/local/js/letai-racing/dist/images/competitions/1.svg" alt="" class="competitions__card-icon">
                        </div>
                        <h4 class="competitions__card-title">
                            Скоростное прохождение
                        </h4>
                    </div>
                </li>
                <li class="competitions__list-item">
                    <div class="competitions__card">
                        <div class="competitions__card-icon-container">
                            <img src="/local/js/letai-racing/dist/images/competitions/2.svg" alt="" class="competitions__card-icon">
                        </div>
                        <h4 class="competitions__card-title">
                            Обгон
                        </h4>
                    </div>
                </li>
                <li class="competitions__list-item">
                    <div class="competitions__card">
                        <div class="competitions__card-icon-container">
                            <img src="/local/js/letai-racing/dist/images/competitions/3.svg" alt="" class="competitions__card-icon">
                        </div>
                        <h4 class="competitions__card-title">
                            Объезд
                            препятствий
                        </h4>
                    </div>
                </li>
            </ul>
            <a href="https://docs.google.com/document/d/1yJ5hXllcJqLbtUS8Hy3ZLYWD6tC2-FXb0se56mZp0p4/edit?usp=sharing" target="_blank" class="competitions__reglament-link">
                РЕГЛАМЕНТ СОРЕВНОВАНИЙ
            </a>
        </div>
    </section>
    <section class="prizes" id="prizes">
        <div class="prizes__bg">
            <img src="/local/js/letai-racing/dist/images/prizes-bg.webp" alt="" class="prizes__bg-image">
        </div>
        <div class="prizes__content">
            <h2 class="prizes__heading">
                Призовой фонд
            </h2>
            <div class="prizes__items">
                <div class="prizes__item">
                    <div class="prizes__item-terms">
                        Обгон
                    </div>
                    400.000₽
                </div>
                <div class="prizes__item">
                    <div class="prizes__item-terms">
                        Скоростное прохождение
                    </div>
                    300.000₽
                </div>
                <div class="prizes__item">
                    <div class="prizes__item-terms">
                        объезд препятствий
                    </div>
                    300.000₽
                </div>
                <div class="prizes__merch">
                    МЕРЧ
                </div>
            </div>
        </div>
    </section>
    <section class="application" id="participant">
        <div class="application__content">
            <h2 class="application__heading">
                Участники соревнований
            </h2>

            <div class="participant_nav">
                <ul>
                    <li>ИВМиИТ КФУ</li>
                    <li>ICL Services</li>
                    <li>Университет Иннополис | МОНОЛИТ ДОТС</li>
                    <li>ИТ парк</li>
                    <li>НЧИ КФУ</li>
                    <li>Университет Иннополис | Летальный car</li>
                    <li>Innostage</li>
                    <li>DECK</li>
                    <li></li>
                    <li>ДПК (Камаз)</li>
                    <li>ФГБОУ ВО "КНИТУ-КАИ"</li>
                </ul>
            </div>
        </div>
    </section>
    <style>
        .participant_nav>ul {
            display: grid;
            grid-gap: 1.2rem;
            grid-template-columns: 1fr 1fr 2fr;
        }
    </style>
    <?/*<section class="application" id="application">
        <div class="application__content">
            <h2 class="application__heading">
                Оставьте заявку
            </h2>
            <?$APPLICATION->IncludeComponent(
                "bitrix:iblock.element.add.form",
                "application__form",
                Array(
                    "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
                    "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
                    "CUSTOM_TITLE_DETAIL_PICTURE" => "",
                    "CUSTOM_TITLE_DETAIL_TEXT" => "",
                    "CUSTOM_TITLE_IBLOCK_SECTION" => "",
                    "CUSTOM_TITLE_NAME" => "ФИО",
                    "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
                    "CUSTOM_TITLE_PREVIEW_TEXT" => "",
                    "CUSTOM_TITLE_TAGS" => "",
                    "DEFAULT_INPUT_SIZE" => "30",
                    "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
                    "ELEMENT_ASSOC" => "CREATED_BY",
                    "GROUPS" => array("2"),
                    "IBLOCK_ID" => "66",
                    "IBLOCK_TYPE" => "forms",
                    "LEVEL_LAST" => "Y",
                    "LIST_URL" => "",
                    "MAX_FILE_SIZE" => "0",
                    "MAX_LEVELS" => "100000",
                    "MAX_USER_ENTRIES" => "100000",
                    "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
                    "PROPERTY_CODES" => ["NAME", "294", "295", "296", "297"],
                    "PROPERTY_CODES_REQUIRED" => ["NAME", "294", "295", "296"],
                    "RESIZE_IMAGES" => "N",
                    "SEF_MODE" => "N",
                    "STATUS" => "ANY",
                    "STATUS_NEW" => "N",
                    "USER_MESSAGE_ADD" => "Заявка успешно отправлена!",
                    "USER_MESSAGE_EDIT" => "",
                    "USE_CAPTCHA" => "N"
                )
            );?>
        </div>
    </section>*/?>
    <section class="location" id="location">
        <div class="location__content">
            <h2 class="location__heading">
                Локация
            </h2>
            <div class="location__row">
                <div class="location__map js-map" data-center="55.611388, 49.298543" data-coords="55.611388, 49.298543"
                     data-zoom="12">
                    <div class="location__map-element js-map-element">

                    </div>

                </div>
                <div class="location__text-content">
                    <img src="/local/js/letai-racing/dist/images/digital-week-white.svg" alt="" class="location__digital-week">
                    <div class="location__name">
                        Казань Экспо
                    </div>
                    <div class="location__date">
                        20-21 сентября Казань<br>Подача заявок на участие до 21 июля 2023
                    </div>
                </div>
            </div>
        </div>
    </section>