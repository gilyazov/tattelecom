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

    <?/*<section class="application" id="participant">
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
    <section class="application" id="application">
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