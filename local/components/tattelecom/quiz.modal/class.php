<?php
use Bitrix\Main\Loader;
use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Entity;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

class QuizeModal extends \CBitrixComponent implements Controllerable
{
    public function __construct($component = null)
    {
        parent::__construct($component);
    }

    public function configureActions() : array
    {
        return [
            'answer' => [ // Ajax-метод
                'prefilters' => [],
            ],
        ];
    }

    /**
     * @throws Exception
     */
    public function answerAction($participant, $question, $answer)
    {
        if (!$participant){
            throw new Exception("Не выбран участник");
        }

        $db_props = CIBlockElement::GetProperty(75, $answer, array("sort" => "asc"), Array("CODE"=>"CORRECT"));
        if($ar_props = $db_props->Fetch()){
            if ($ar_props["VALUE"]){
                $currentAnswers = CIBlockElement::GetProperty(74, $participant, array("sort" => "asc"), Array("CODE"=>"CORRECT_ANSWERS"))->Fetch()["VALUE"];
                CIBlockElement::SetPropertyValuesEx($participant, false, array("CORRECT_ANSWERS" => ($currentAnswers+1)));
            }
        }

        // уточнить правильный ли ответ @answer
        // если да, возьмем у $participant количество балов и +1

        $el = new \CIBlockElement;
        $PROP = array();
        $PROP[326] = $participant;
        $PROP[327] = $question;
        $PROP[328] = $answer;

        $arLoadProductArray = Array(
            "IBLOCK_ID"      => 76,
            "PROPERTY_VALUES"=> $PROP,
            "NAME"           => "Участник №$participant"
        );
        $result = $el->Add($arLoadProductArray);
        if(!$result){
            throw new Exception($el->LAST_ERROR);
        }

        return $result;
    }

    protected function getQuestions(): array
    {
        $arFilterElement = Array("IBLOCK_ID"=>75, "ACTIVE"=>"Y");
        $res = CIBlockElement::GetList(Array("RAND"=>"ASC"), $arFilterElement, false, false, ["ID", "NAME", "IBLOCK_SECTION_ID"]);
        while($arr = $res->Fetch())
        {
            $arAnswer[$arr["IBLOCK_SECTION_ID"]][] = $arr;
        }

        // вопросы
        $q = new \Bitrix\Main\Entity\Query(Bitrix\Iblock\SectionTable::getEntity());
        $q
            ->registerRuntimeField(
                'RAND', ['data_type' => 'float', 'expression' => ['RAND()']]
            )
            ->setOrder(['RAND' => 'ASC'])
            ->setSelect([
                'ID',
                'NAME',
            ])
            ->setFilter([
                'ACTIVE' => 'Y',
                'IBLOCK_ID' => 75,
            ])
            ->setLimit(5);

        $rsSection = $q->exec();
        while ($arSection=$rsSection->fetch())
        {
            $arQuestion[] = [
                "ID" => $arSection["ID"],
                "TITLE" => $arSection["NAME"],
                "ANSWER" => $arAnswer[$arSection["ID"]]
            ];
        }
        
        return $arQuestion;
    }

    public function executeComponent()
    {
        $this->arResult["QUESTION"] = $this->getQuestions();
        $this->includeComponentTemplate();
    }
}