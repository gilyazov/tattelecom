<?php
//include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/wsrubi.smtp/classes/general/wsrubismtp.php");

//define ("BUILD_PATH", '/local/js/template/tattelecom/');
define ("BUILD_PATH", '/local/js/tattelecom/build/');

define ("BUILD_PATH_2", '/front/'); //todo избавиться от этого
define ("DEFAULT_PATH", $_SERVER['DOCUMENT_ROOT'] . '/local/templates/.default/');
//define ("LANDING_DEVELOPER_MODE", true);

Bitrix\Main\Loader::IncludeModule('tattelecom.core');
require_once('functions.php');