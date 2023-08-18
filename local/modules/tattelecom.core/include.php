<?php
/*require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/vendor/autoload.php';*/

$eventManager = \Bitrix\Main\EventManager::getInstance();

$eventManager->addEventHandler('main', 'OnPageStart', ['\Tattelecom\Core\EventHandlers\Main\Page', 'OnPageStartHandler']);
$eventManager->addEventHandler('main', 'OnBeforeProlog', ['\Tattelecom\Core\EventHandlers\Main\Prolog', 'OnBeforePrologAddHandler']);

$eventManager->addEventHandler('landing', 'onDemosGetRepository', ['\Tattelecom\Core\EventHandlers\Landing\Template', 'onDemosGetRepositoryHandler']);
$eventManager->addEventHandler('landing', 'onHookExec', ['\Tattelecom\Core\EventHandlers\Landing\Hook', 'onHookExecHandler']);
$eventManager->addEventHandler('landing', 'onGetThemeColors', ['\Tattelecom\Core\EventHandlers\Landing\Theme', 'onGetThemeColors']);
$eventManager->addEventHandler('main', 'OnBeforeProlog', ['\Tattelecom\Core\EventHandlers\Landing\Main', 'OnBeforePrologAddHandler']);

$eventManager->addEventHandler('iblock', 'OnBeforeIBlockElementAdd', ['\Tattelecom\Core\EventHandlers\Iblock\Element', 'OnBeforeIBlockElementAddHandler']);
$eventManager->addEventHandler('iblock', 'OnAfterIBlockElementAdd', ['\Tattelecom\Core\EventHandlers\Iblock\Element', 'OnAfterIBlockElementAddHandler']);

$arClasses = array(
    "GoogleReCaptcha" => "classes/GoogleReCaptcha.php"
);
CModule::AddAutoloadClasses("tattelecom.core", $arClasses);