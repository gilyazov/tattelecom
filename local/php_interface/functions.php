<?php
function pre($arr){
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}

function getNumEnding($number, $endingArray)
{
    $number = $number % 100;
    if ($number>=11 && $number<=19)
    {
        $ending=$endingArray[2];
    } else  {
        $i = $number % 10;
        switch ($i) {
            case (1): $ending = $endingArray[0]; break;
            case (2): case (3): case (4): $ending = $endingArray[1]; break;
            default: $ending=$endingArray[2]; }
    }
    $result = $number. ' '. $ending;
    return $result;
}

/**
 * @param int $iBlockId - ID инфоблока
 * @param int $elementId - ID элемента
 * @param array $arOrder - массив сортировки
 * @param array $arPropsCode - массив пользовательских полей для выборки
 */
function getProps($iBlockId, $elementId, $arOrder, $arPropsCode) {
    if(!CModule::IncludeModule("iblock")) return;

    $result = [];
    foreach ($arPropsCode as $propCode) {
        $result[$propCode] = [];
        $res = CIBlockElement::GetProperty($iBlockId, $elementId, $arOrder, ["CODE" => $propCode]);

        while ($ob = $res->GetNext())
        {
            if ($ob["PROPERTY_TYPE"] == "E") {
                $propElement = [];
                $resElem = CIBlockElement::GetByID($ob['VALUE']);

                if($ar_res = $resElem->GetNext()) {
                    $propElement = $ar_res;
                }

                $result[$propCode][] = $propElement;
            }
            else {
                if ($ob["MULTIPLE"] == "Y") {
                    $result[$propCode][] = $ob;
                }
                else {
                    $result[$propCode] = $ob;
                }
            }
        }
    }

    return $result;
}

// todo переписать используя CFile::FormatSize($size, $precision);
function GetStrFileSize($size, $round=2) {
    $sizes = array('Б', 'КБ', 'МБ', 'ГБ', 'ТБ');
    for ($i=0; $size > 1024 && $i < count($sizes) - 1; $i++) $size /= 1024;
    return round($size,$round)." ".$sizes[$i];
}