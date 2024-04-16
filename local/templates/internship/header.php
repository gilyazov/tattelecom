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
    <link rel="icon" href="/local/templates/.default/include/favicon/favicon.svg" type="image/svg+xml">
    <link rel="shortcut icon" href="/local/templates/.default/include/favicon/favicon.png" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="/local/templates/.default/include/favicon/favicon.png">
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
<div class="sprite" aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><symbol id="checkmark" viewBox="0 0 11.64 11.64" xmlns="http://www.w3.org/2000/svg"><defs><style>.acls-1{fill-rule:evenodd}</style></defs><path class="acls-1" d="M11 .24c.67.45.85 1.35.4 2.02L5.58 11c-.24.36-.63.6-1.07.64s-.86-.11-1.17-.42L.43 8.31c-.57-.57-.57-1.49 0-2.06.57-.57 1.49-.57 2.06 0l1.66 1.66L8.98.65c.45-.67 1.35-.85 2.02-.4z"/></symbol><symbol viewBox="0 0 25 25" id="cross" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 12.41l5.04-5.04c.25-.25.25-.66 0-.92a.658.658 0 00-.92 0l-5.04 5.04-5.03-5.03c-.25-.25-.66-.25-.92 0s-.25.66 0 .92l5.04 5.04-5.04 5.04c-.25.25-.25.66 0 .92s.66.25.92 0l5.04-5.04 5.04 5.04c.25.25.66.25.92 0 .25-.25.25-.66 0-.92l-5.04-5.04z"/></symbol><symbol id="hz" viewBox="0 0 31 31" xmlns="http://www.w3.org/2000/svg"><defs><clipPath id="cclippath"><path class="ccls-1" d="M4.8 4.38h22v22h-22z"/></clipPath><style>.ccls-1{fill:none}.cls-2{clip-path:url(#cclippath)}</style></defs><path d="M17.92 17.5c-1.73 1.78-1.85 4.01-2 8.88 4.54 0 7.68-.02 9.29-1.59 1.57-1.62 1.59-4.9 1.59-9.3-4.87.16-7.09.27-8.88 2zm-13.12-2c0 4.39.02 7.68 1.59 9.3 1.62 1.57 4.75 1.59 9.3 1.59-.16-4.87-.28-7.09-2-8.88-1.78-1.73-4.01-1.85-8.88-2zM15.68 4.38c-4.53 0-7.68.02-9.3 1.59-1.57 1.62-1.59 4.9-1.59 9.3 4.87-.16 7.1-.28 8.88-2 1.73-1.78 1.85-4.01 2-8.88zm2.24 8.88c-1.73-1.78-1.85-4.01-2-8.88 4.54 0 7.68.02 9.29 1.59 1.57 1.62 1.59 4.9 1.59 9.3-4.87-.16-7.09-.28-8.88-2z"/></symbol><symbol viewBox="0 0 24 24" id="ok" xmlns="http://www.w3.org/2000/svg"><path d="M12.4.88c-2.79 0-5.09 2.3-5.09 5.17s2.26 5.17 5.09 5.17 5.09-2.3 5.09-5.17S15.19.88 12.4.88zm0 6.9c-.94 0-1.7-.77-1.7-1.72s.75-1.72 1.7-1.72 1.7.77 1.7 1.72-.75 1.72-1.7 1.72zM18.66 14.71c-1.28.73-2.68 1.23-4.07 1.46l3.96 4.94c.45.57.57 1.38.15 1.99-.64 1-2 1.03-2.68.15l-3.66-4.56-3.62 4.56c-.34.42-.79.61-1.28.61s-.98-.23-1.32-.69c-.41-.57-.38-1.53.08-2.11l3.92-4.98c-1.39-.27-2.79-.73-4.03-1.46-.79-.46-1.06-1.46-.6-2.3.45-.8 1.47-1.07 2.26-.61 2.86 1.65 6.44 1.65 9.35.04.79-.46 1.81-.15 2.22.65.41.84.11 1.84-.68 2.3z"/></symbol><symbol viewBox="0 0 53 53" id="plus" xmlns="http://www.w3.org/2000/svg"><path d="M52.9 24.39H28.6V.09h-4.05v24.3H.25v4.05h24.3v24.3h4.05v-24.3h24.3v-4.05z"/></symbol><symbol viewBox="0 0 31 31" id="telegram" xmlns="http://www.w3.org/2000/svg"><path d="M5.78 13.59c6.52-2.92 10.87-4.85 13.04-5.78 6.21-2.66 7.5-3.12 8.34-3.14.18 0 .6.04.87.27.23.19.29.44.32.62.03.18.07.59.04.91-.34 3.64-1.79 12.47-2.53 16.55-.31 1.72-.93 2.3-1.53 2.36-1.3.12-2.28-.88-3.54-1.73-1.97-1.33-3.08-2.15-4.99-3.45-2.21-1.5-.78-2.32.48-3.67.33-.35 6.05-5.71 6.16-6.19.01-.06.03-.29-.1-.41s-.32-.08-.46-.05c-.2.05-3.34 2.19-9.43 6.42-.89.63-1.7.94-2.43.92-.8-.02-2.33-.46-3.48-.85-1.4-.47-2.51-.72-2.42-1.51.05-.41.61-.84 1.66-1.27z"/></symbol><symbol viewBox="0 0 31 31" id="vk" xmlns="http://www.w3.org/2000/svg"><path d="M16.93 23.95c-9.27 0-14.56-6.43-14.78-17.14h4.64c.15 7.86 3.58 11.19 6.29 11.87V6.81h4.37v6.78c2.68-.29 5.49-3.38 6.44-6.78h4.37c-.73 4.19-3.78 7.28-5.95 8.55 2.17 1.03 5.65 3.72 6.97 8.6h-4.81c-1.03-3.26-3.61-5.78-7.02-6.13v6.13h-.53z"/></symbol><symbol viewBox="0 0 31 31" id="youtube" xmlns="http://www.w3.org/2000/svg"><path d="M30.27 8.51c-.17-.6-.51-1.15-.97-1.6-.46-.44-1.04-.76-1.68-.92-2.34-.6-11.72-.6-11.72-.6s-9.39 0-11.72.6c-.63.16-1.21.48-1.68.92-.46.44-.8.99-.97 1.6-.44 2.27-.65 4.57-.63 6.88-.02 2.31.2 4.61.63 6.88.17.6.5 1.15.97 1.6.46.44 1.04.76 1.68.92 2.34.6 11.72.6 11.72.6s9.39 0 11.72-.6c.63-.16 1.21-.48 1.68-.92.46-.44.8-.99.97-1.6.44-2.27.65-4.57.63-6.88.02-2.31-.2-4.61-.63-6.88zM12.9 19.67V11.1l7.79 4.29-7.79 4.29z"/></symbol></svg>        </div>
<?$APPLICATION->ShowProperty('Noscript');?>
<?$APPLICATION->ShowProperty('AfterBodyOpen');?>
<div class="page-content">