<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$variables = \Bitrix\Landing\Landing::getVariables();
$elementCode = $variables['sef'][0] ?? 0;
?>
<section class="tatt-head__section">
    <div class="gl__page-content">
        <?$ElementID = $APPLICATION->IncludeComponent(
            "bitrix:news.detail",
            "tatt-head",
            Array(
                "IBLOCK_TYPE" => "about",
                "IBLOCK_ID" => "49",
                "ELEMENT_CODE" => $elementCode,
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600",
                "SET_TITLE" => "Y",
                "FIELD_CODE" => [
                    "PREVIEW_PICTURE"
                ],
                "PROPERTY_CODE" => [
                    "POSITION"
                ]
            ),
            false
        );?>
    </div>
</section>