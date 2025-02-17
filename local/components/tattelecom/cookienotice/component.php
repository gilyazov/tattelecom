<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/* @var array $arParams */
/* @var array $arResult */

if($_COOKIE["cookienotice"] != "Y") {
    if ($this->StartResultCache()) {
        $arResult['NOTICE_TEXT']      = $arParams["~NOTICE_TEXT"];
        $arResult['NOTICE_BUTTON']    = $arParams["NOTICE_BUTTON"];
        $arResult['NOTICE_LINK']      = $arParams["NOTICE_LINK"];
        $arResult["NOTICE_LINK_TEXT"] = $arParams["NOTICE_LINK_TEXT"];
    }
    $this->IncludeComponentTemplate();
}

?>