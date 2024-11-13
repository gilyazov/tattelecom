<?php
/** @var array $arResult */

foreach ($arResult["ITEMS"] as $key => $arItem) {
    if ($fileId = $arItem["PROPERTIES"]["FILE"]["VALUE"]){
        $arResult["ITEMS"][$key]["DETAIL_PAGE_URL"] = CFile::GetPath($fileId);
    }
}