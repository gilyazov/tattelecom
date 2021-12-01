<?
define ("BUILD_PATH", '/local/js/template/tattelecom-1/');
define ("DEFAULT_PATH", $_SERVER['DOCUMENT_ROOT'] . '/local/templates/.default/');
define ("LANDING_DEVELOPER_MODE", true);

Bitrix\Main\Loader::IncludeModule('tattelecom.core');
require_once('functions.php');