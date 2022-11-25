<?php
use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

class Randomizer extends \CBitrixComponent
{
    public function __construct($component = null)
    {
        parent::__construct($component);
    }

    protected function getGifts(): array
    {
        Loader::includeModule("highloadblock");
        $hlbl = 1; // Указываем ID нашего highloadblock блока к которому будет делать запросы.
        $hlblock = HL\HighloadBlockTable::getById($hlbl)->fetch();

        $entity = HL\HighloadBlockTable::compileEntity($hlblock);
        $entity_data_class = $entity->getDataClass();

        $rsData = $entity_data_class::getList(array(
            "select" => array("*"),
            "order" => array("ID" => "ASC"),
            "filter" => array()  // Задаем параметры фильтра выборки
        ));

        while($arData = $rsData->Fetch()){
            $arGifts[$arData["UF_XML_ID"]] = $arData["UF_NAME"];
        }

        return $arGifts;
    }

    protected function raffle(){
        $count = $this->request->getPost('count');
        $gift = $this->request->getPost('gift');
        $contest = $this->arParams["EVENT_ID"];

        $arFilter = [
            "IBLOCK_ID"=>57,
            "PROPERTY_GIFT"=>false,
            "PROPERTY_EVENT"=>$contest,
            "ACTIVE"=>"Y"
        ];
        $res = \CIBlockElement::GetList(
            Array('rand' => 'asc'),
            $arFilter,
            false,
            Array("nTopCount"=>$count),
            ["ID"]
        );
        while($ob = $res->GetNextElement())
        {
            $arFields = $ob->GetFields();
            \CIBlockElement::SetPropertyValuesEx($arFields["ID"], false, array("GIFT" => $gift));
        }
    }

    public function executeComponent()
    {
        global $USER;
        if (!$USER->IsAdmin()){
            return false;
        }

        if ($this->request->isPost()){
            $this->raffle();
        }

        $this->arResult["GIFTS"] = $this->getGifts();
        $this->includeComponentTemplate();
    }
}