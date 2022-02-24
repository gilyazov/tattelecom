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

    <link rel="icon" href="/local/templates/.default/include/favicon/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="/local/templates/.default/include/favicon/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="/local/templates/.default/include/favicon/favicon.png">

    <title><?$APPLICATION->ShowTitle();?></title>
    <?
    $APPLICATION->ShowHead();
    $APPLICATION->ShowProperty('MetaOG');
    $APPLICATION->ShowProperty('BeforeHeadClose');
    \Bitrix\Main\UI\Extension::load('template.tattelecom-1');
    ?>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KLBQ3ZM');</script>
    <!-- End Google Tag Manager -->
</head>
<body class="no-touch<?$APPLICATION->ShowProperty('BodyClass');?>">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KLBQ3ZM"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?if(!$_GET["template"]):?>
    <?//$APPLICATION->ShowPanel();?>
<?endif?>
<div class="sprite" aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;">
    <? include_once (DEFAULT_PATH .'include/sprite.xml'); ?></div>

<div class="gl__layout-wrapper<?=(SITE_ID == 's2' ? ' mod-business' : '')?>">
