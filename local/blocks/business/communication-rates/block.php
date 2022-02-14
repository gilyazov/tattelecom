<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
    die();
}
?>
<?$APPLICATION->IncludeComponent("bitrix:news.list","communication-rates",Array(
        "IBLOCK_TYPE" => "buisness",
        "IBLOCK_ID" => "41",
        "PARENT_SECTION" => "",
        "NEWS_COUNT" => 9999
    )
);?>