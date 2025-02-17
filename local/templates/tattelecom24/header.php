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
    <link rel="manifest" href="/manifest.json">
    <? if(SITE_ID == "s2"):?>
        <link rel="apple-touch-icon" sizes="152x152" href="/local/templates/buisness/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/local/templates/buisness/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/local/templates/buisness/favicon-16x16.png">
        <link rel="mask-icon" href="/local/templates/buisness/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/local/templates/buisness/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/local/templates/buisness/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
    <?else:?>
        <link rel="icon" href="/local/templates/.default/include/favicon/favicon.svg" type="image/svg+xml">
        <!--<link rel="icon" href="/local/templates/.default/include/favicon/favicon.png" type="image/x-icon"/>-->
        <link rel="shortcut icon" href="/local/templates/.default/include/favicon/favicon.png" type="image/x-icon"/>
        <link rel="apple-touch-icon" href="/local/templates/.default/include/favicon/favicon.png">
    <?endif;?>

    <title><?$APPLICATION->ShowTitle();?></title>
    <?
    $APPLICATION->ShowHead();
    $APPLICATION->ShowProperty('MetaOG');
    $APPLICATION->ShowProperty('BeforeHeadClose');
    \Bitrix\Main\UI\Extension::load('tattelecom.build');
    //\Bitrix\Main\UI\Extension::load('template.banner');
    ?>

    <meta name="apple-itunes-app" content="app-id=1574494891">
</head>
<body class="no-touch<?$APPLICATION->ShowProperty('BodyClass');?>">

<?if(!$_GET["template"]):?>
    <?$APPLICATION->ShowPanel();?>
<?endif?>
<div class="sprite" aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;">
    <? include_once (DEFAULT_PATH .'include/sprite.xml'); ?></div>

<div class="gl__layout-wrapper<?=(SITE_ID == 's2' ? ' mod-business' : '')?>">
