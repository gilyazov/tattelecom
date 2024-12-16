<?php
use Bitrix\Main\Loader;
use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Entity;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

class PrizeDraw extends \CBitrixComponent implements Controllerable
{
    public function __construct($component = null)
    {
        parent::__construct($component);
    }

    public function configureActions() : array
    {
        return [
            'raffle' => [ // Ajax-метод
                'prefilters' => [],
            ],
        ];
    }

    /**
     * @throws Exception
     */
    public function raffleAction($attempt, $email)
    {
        if ($this->checkEmailUniqueness($email)){
            throw new Exception("Розыгрыш с этой почтой уже проведен");
        }

        $arWish = $this->getWish();
        $arPrizes = $this->getPrizes();

        if ($attempt == 1){
            $resultArr = $arPrizes;
        }
        else{
            $resultArr = array_merge($arWish, $arPrizes);
        }

        $randKey = array_rand($resultArr);
        $result = $resultArr[$randKey];

        if (is_array($result) && $prize = $result["id"]){
            $el = new \CIBlockElement;
            $PROP = array();
            $PROP[322] = $prize;
            $arLoadProductArray = Array(
                "IBLOCK_ID"      => 73,
                "PROPERTY_VALUES"=> $PROP,
                "NAME"           => $email
            );
            if(!$el->Add($arLoadProductArray)){
                throw new Exception($el->LAST_ERROR);
            }

            // уменьшим количество призов на складе
            \CIBlockElement::SetPropertyValuesEx($prize, false, array(
                "QUANTITY" => ($result["quantity"]-1)
            ));
        }

        return $result;
    }

    protected function getWish():array
    {
        return [
            "Счастья!", "Здоровья!", "Успехов!", "Любви!", "Процветания!", "Радости!", "Благополучия!", "Удачи!", "Гармония!",
            "Мира!", "Достатка!", "Улыбок!", "Уюта!", "Добра!", "Вдохновения!", "Изобилия!", "Чудес!", "Путешествий!", "Открытий!",
            "Энергии!", "Роста!", "Смелости!", "Мудрости!", "Веры!", "Волшебства!"
        ];
    }

    protected function getPrizes(): array
    {
        $arPrizes = [];
        $arSelect = Array("ID", "NAME", "PROPERTY_ICO", "PROPERTY_QUANTITY");
        $arFilter = Array("IBLOCK_ID"=>72, "ACTIVE"=>"Y", ">PROPERTY_QUANTITY" => 0);
        $res = \CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
        while($ob = $res->GetNextElement())
        {
            $arFields = $ob->GetFields();

            $arPrizes[] = [
                'id' => $arFields['ID'],
                'name' => $arFields["NAME"],
                'ico' => $arFields["PROPERTY_ICO_VALUE"],
                'quantity' => $arFields["PROPERTY_QUANTITY_VALUE"],
            ];
        }

        return $arPrizes;
    }

    protected function checkEmailUniqueness($email): bool
    {
        $arFilter = Array("IBLOCK_ID"=>73, "NAME" => $email);
        $res = \CIBlockElement::GetList(Array(), $arFilter, false, false, ["ID"]);
        if($ob = $res->GetNextElement())
        {
            return true;
        }

        return false;
    }

    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
}