<?php


namespace Tattelecom\Core\EventHandlers\Landing;

class Main
{
    public static function OnBeforePrologAddHandler()
    {
        global $USER, $APPLICATION;

        if ($USER->IsAdmin() && $_SERVER["SCRIPT_NAME"] == '/bitrix/admin/landing_view.php') {
            $class = ' is-admin';
            $APPLICATION->SetPageProperty("BodyClass", $class);
        }

        if (SITE_TEMPLATE_ID == "vats"){
            $bodyClass = "page-home";
            if ($APPLICATION->GetCurPage(false)== '/internet-in-a-cube/') {
                $bodyClass = "page-cube";
            }

            $APPLICATION->SetPageProperty("BodyClass",$bodyClass);
        }

    }
}