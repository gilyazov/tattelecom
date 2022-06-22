<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Context;

class PromocodeBlock extends \Bitrix\Landing\LandingBlock
{
    public function init(array $params = [])
    {
        $request = Context::getCurrent()->getRequest();
        if ($promo = $request->get("promo")) {
            $this->params['PROMO'] = $promo;
        }
    }
}