<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/classes/general/xml.php');
$xml = new CDataXML();
$id = $arResult["PROPERTIES"]["PROGRAM"]["VALUE"];
$date = date('Y-m-d', strtotime('last sunday +1 day', time()));
$broadcast = "http://xmldata.epgservice.ru/EPGService/hs/xmldata/tattelecom/file/".$id."?week=".$date;
$content = file_get_contents($broadcast);
$xml->LoadString($content);

if ($node = $xml->SelectNodes('/tv')) {
    foreach ($node->children() as $child){
        if ($child->name == "programme"){
            $start = $child->getAttribute('start');
            $stop = $child->getAttribute('stop');
            $startTimestamp = strtotime($start);
            $stopTimestamp = strtotime($stop);
            $currentTime = time();

            if (($startTimestamp <= $currentTime) && ($currentTime < $stopTimestamp)){
                $currentNode = $child->children();
                foreach ($currentNode as $programNode){
                    if ($programNode->name == "title" || $programNode->name == "desc"){
                        $arResult["BROADCAST_CAPTION"][] = $programNode->textContent();
                    }
                    $arResult["BROADCAST_START"] = $startTimestamp;
                    $arResult["BROADCAST_END"] = $stopTimestamp;
                }
            }

            /*echo $child->getAttribute('name') . PHP_EOL;
            echo '<pre>';print_r($child);echo'</pre>';*/
        }
    }
}