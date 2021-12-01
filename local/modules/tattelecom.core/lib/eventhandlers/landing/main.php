<?php


namespace Tattelecom\Core\EventHandlers\Landing;

class Main
{
    public function OnBeforePrologAddHandler()
    {
        global $USER, $APPLICATION;

        if ($USER->IsAdmin() && $_SERVER["SCRIPT_NAME"] == '/bitrix/admin/landing_view.php') {
            $class = 'is-admin';
            $APPLICATION->SetPageProperty("BodyClass", $class);
        }
    }
}