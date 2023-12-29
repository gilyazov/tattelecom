<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
require_once ($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/csv_data.php");
CModule::IncludeModule('iblock');


$csvFile = new CCSVData('R', true);
$csvFile->LoadFile("schedule.csv");
$csvFile->SetDelimiter(';');
$csvFile->SetFirstHeader();

$arDays = [
    2 => 30,
    4 => 31,
    6 => 1,
    8 => 2,
    10 => 3,
    12 => 4,
    14 => 5,
    16 => 6,
    18 => 7,
    20 => 8
];

while ($arRes = $csvFile->Fetch()) {
    if (is_numeric($arRes[0])){

        // строим массив выходных для офиса
        foreach ($arRes as $key => $arItem){
            if ($key % 2 != 0 || $key==0){
                continue;
            }

            if ($arItem == "Выходной"){
                $arWeekend[] = $arDays[$key];
            }
            else{
                $arElement[] = [
                    "SUBPROP_VALUES" =>[
                        "DAY" => $arDays[$key] . " " . (($arDays[$key] > 29) ? "дек." : "янв."),
                        "DAY_TIME" => $arItem
                    ]
                ];
            }
        }
        if (is_array($arWeekend)){
            array_splice($arElement,2,0, [[
                "SUBPROP_VALUES" =>[
                    "DAY" => implode(", ", $arWeekend) . " янв.",
                    "DAY_TIME" => "Выходной"
                ]
            ]]);
        }

        // получаем его актуалные данные
        $res = \CIBlockElement::GetList(Array(), ["ID" => $arRes[0]], false, false, ["ID", "IBLOCK_ID", "NAME"]);
        if($ob = $res->GetNextElement()){
            $arFields = $ob->GetFields();
            $arProps = $ob->GetProperties();

            $arUpdateFields["IBLOCK_ID"] = $arFields["IBLOCK_ID"];
            $arUpdateFields["NAME"] = $arFields["NAME"];
            foreach ($arProps as $arProp){
                if ($arProp["CODE"] == "DAY" || $arProp["CODE"] == "DAY_TIME"){
                    continue;
                }
                $arUpdateFields["PROPERTY_VALUES"][$arProp["CODE"]] = ($arProp["PROPERTY_TYPE"] == "L" ? $arProp["VALUE_ENUM_ID"] : $arProp["VALUE"]);
            }
        }
        $arUpdateFields["PROPERTY_VALUES"]["TIME"] = $arElement;

        // обновляем
        $el = new CIBlockElement;
        /*if(!$el->update($arRes[0], $arUpdateFields))
            echo "Error: ".$el->LAST_ERROR . PHP_EOL;*/

        /*echo "<pre>";
        print_r($arRes[0]);
        print_r($arUpdateFields);
        echo "</pre>";*/

        unset($arWeekend, $arElement, $arUpdateFields);
//        die();
    }
}