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

// Деталка на сайтах 24 для страницы "Структурные подразделения" (3-й раздел)
// https://youtu.be/ZLtxNSKkBKI?t=1914
//\Bitrix\Landing\Landing::update(165, ['RULE' => '([\d]+)', "DATE_MODIFY" => false]);

if (\Bitrix\Main\Loader::includeModule('intranet')) {
    \Bitrix\Landing\Connector\Mobile::prologMobileHit();
}

$language= \Bitrix\Landing\Manager::getLangISO();
?><!DOCTYPE html>
<html xml:lang="<?= $language;?>" lang="<?= $language;?>" class="<?$APPLICATION->ShowProperty('HtmlClass');?>">
<head>
    <?$APPLICATION->ShowProperty('AfterHeadOpen');?>
    <meta name="google-site-verification" content="q_4yEnnXsP770LmNk9KkEI_pMEvmcm0XHA2R_qeg_xo" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">

    <link rel="icon" href="/local/templates/.default/include/favicon/favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="/local/templates/.default/include/favicon/favicon.png" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="/local/templates/.default/include/favicon/favicon.png">
    <title><?$APPLICATION->ShowTitle();?></title>
    <?
    $APPLICATION->ShowHead();
    $APPLICATION->ShowProperty('MetaOG');
    $APPLICATION->ShowProperty('BeforeHeadClose');
    \Bitrix\Main\UI\Extension::load('tattelecom.build');
    ?>
    <meta name="apple-itunes-app" content="app-id=1574494891">
    <!-- Google Tag Manager -->
    <script data-skip-moving="true">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KLBQ3ZM');</script>
    <!-- End Google Tag Manager -->

    <style>
        .tattelekom-pages .gl__layout-content {
            margin-top: calc(4rem + var(--header-height-tatt));
        }
        @media screen and (max-width: 767px) {
            .tattelekom-pages .gl__layout-content {
                margin-top: var(--header-height-tatt);
            }
        }

        .tatt-achievements__link {
            display: block;
            margin-top: 4rem;
        }

        .tatt-achievements__link:first-of-type {
            margin-top: 0;
        }

        @media screen and (max-width: 559px) {
            .tatt-achievements__link {
                margin-top: 3rem;
            }
        }

        main > section.bread-crumbs__container {
            max-width: 1450px;
            padding-left: var(--page-content-padding);
            padding-right: var(--page-content-padding);
            max-width: 1450px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body class="no-touch js-tattelekom-pages tattelekom-pages<?$APPLICATION->ShowProperty('BodyClass');?>">

<script>
    if (location.pathname == "/contacts/") {
        location.href = "/contacts/kontaktnaya-informatsiya/";
    }
    if (location.pathname == "/press-center/") {
        location.href = "/press-center/news/";
    }
</script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KLBQ3ZM"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?//$APPLICATION->ShowPanel();?>
<div class="sprite" aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;">
    <? include_once (DEFAULT_PATH .'include/sprite.xml'); ?></div>

<div class="gl__layout-wrapper">