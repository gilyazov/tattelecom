<?php
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */

$arSelect = Array("ID", "NAME", "IBLOCK_SECTION_ID", "TIMESTAMP_X");
$arFilter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();

    $arProps = getProps($arParams["IBLOCK_ID"], $arFields["ID"], [], ["FILE"]);

    $arFile = CFile::GetById($arProps["FILE"]["VALUE"]);
    $fileSize = 0;
    $filePath = "";
    $fileExtension = "";
    if($ar_res = $arFile->GetNext()) {
        $fileSize = GetStrFileSize($ar_res["FILE_SIZE"], 0);
        $filePath = CFile::GetPath($arProps["FILE"]["VALUE"]);
        $fileExtension = \Bitrix\Main\IO\Path::getExtension($filePath);
    }

    $arFields["FILE_ID"] = $arProps["FILE"]["VALUE"];
    $arFields["FILE_SIZE"] = $fileSize;
    $arFields["FILE_PATH"] = $filePath;
    $arFields["FILE_EXTENSION"] = strtoupper($fileExtension);
    $arSec[$arFields["IBLOCK_SECTION_ID"]][] = $arFields;
}

foreach ($arResult['SECTIONS'] as $key => $arSection){
    if (!$arSection["IBLOCK_SECTION_ID"]) {
        $arResult['SECTIONS'][$key]["ITEMS"] = $arSec[$arSection["ID"]];
    } else {
        foreach ($arResult['SECTIONS'] as $key1 => $arSection1){
            if ($arSection1["ID"] == $arSection["IBLOCK_SECTION_ID"] && $arSec[$arSection["ID"]]) {
                $arResult['SECTIONS'][$key1]["ITEMS"] = array_merge($arResult['SECTIONS'][$key1]["ITEMS"], $arSec[$arSection["ID"]]);
            }
        }
    }
}