<?php
$years = [];
$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "PROPERTY_TYPE");
$arFilter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array("DATE_ACTIVE_FROM"=>'DESC'), $arFilter, false, Array("nPageSize"=>50), $arSelect);
while($ob = $res->GetNextElement()) {
    $arFields = $ob->GetFields();
    $arProperties = $ob->GetProperties();
//    echo "<pre>";
//    var_dump($arProperties["TYPE"]["VALUE"]);
//    echo "</pre>";
    if($arProperties["TYPE"]["VALUE"] && $arProperties["TYPE"]["VALUE_XML_ID"]):
        if(!in_array($arProperties["TYPE"]["VALUE"], $types)):
        $types[] = array(
            "VALUE" => $arProperties["TYPE"]["VALUE"],
            "XML" => $arProperties["TYPE"]["VALUE_XML_ID"],
        );
        endif;
    endif;
    if ($arDateFrom = ParseDateTime($arFields['DATE_ACTIVE_FROM'], "DD.MM.YYYY HH:MI:SS")) {
        $years[] = $arDateFrom["YYYY"];
    }
}
$years = array_unique($years);
$types = array_unique($types, SORT_REGULAR);

$months = array('01' => "Январь", '02' => "Февраль", '03'=> 'Март' , '04'=> 'Апрель' , '05'=> 'Май', '06'=> 'Июнь' , '07'=> 'Июль', '08' => 'Август' , '09' => 'Сентябрь' , 10 => 'Октябрь' , 11 => 'Ноябрь' , 12 => 'Декабрь' );

$arResult["YEARS"] = $years;
$arResult["TYPES"] = $types;
$arResult["MONTHS"] = $months;