<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Context;

class KdwIntroBlock extends \Bitrix\Landing\LandingBlock
{
    public function init(array $params = [])
    {
        global $APPLICATION;
        $APPLICATION->SetPageProperty("BodyClass", "digital-week-page");
    }
}