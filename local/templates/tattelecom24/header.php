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
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <link type="image/png" href="<?=BUILD_PATH?>img/common/tattelecom-small-logo.png" rel="icon">

    <title><?$APPLICATION->ShowTitle();?></title>
    <?
    $APPLICATION->ShowHead();
    $APPLICATION->ShowProperty('MetaOG');
    $APPLICATION->ShowProperty('BeforeHeadClose');
    \Bitrix\Main\UI\Extension::load('template.tattelecom-1');
    ?>
</head>
<body class="no-touch">
<?//$APPLICATION->ShowPanel();?>
<div class="sprite" aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;">
    <? include_once (DEFAULT_PATH .'include/sprite.xml'); ?></div>

<div class="gl__layout-wrapper">
