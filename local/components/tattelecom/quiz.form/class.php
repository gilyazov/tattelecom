<?php
use Bitrix\Main\Loader;
use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Entity;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

class QuizeForm extends \CBitrixComponent implements Controllerable
{
    public function __construct($component = null)
    {
        parent::__construct($component);
    }

    public function configureActions() : array
    {
        return [
            'start' => [ // Ajax-метод
                'prefilters' => [],
            ],
        ];
    }

    /**
     * @throws Exception
     */
    public function startAction($unit, $email)
    {
        if ($this->checkEmailUniqueness($email)){
            throw new Exception("Вы уже принимали участие в викторине");
        }

        $el = new \CIBlockElement;
        $PROP = array();
        $PROP[324] = $unit;
        $PROP[329] = 300;
        $PROP[330] = 0;
        $arLoadProductArray = Array(
            "IBLOCK_ID"      => 74,
            "PROPERTY_VALUES"=> $PROP,
            "NAME"           => $email
        );
        $result = $el->Add($arLoadProductArray);

        if(!$result){
            throw new Exception($el->LAST_ERROR);
        }

        return $result;
    }

    protected function checkEmailUniqueness($email): bool
    {
        $arFilter = Array("IBLOCK_ID"=>74, "NAME" => $email);
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