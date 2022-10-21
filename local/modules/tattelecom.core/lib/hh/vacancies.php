<?php

namespace Tattelecom\Core\Hh;

use Bitrix\Main\Web\HttpClient;


class Vacancies
{
    protected $employer = 672459;

    protected function buildUrl($page = 0): string
    {
        $base = "https://api.hh.ru/";

        return $base . "vacancies?employer_id=" . $this->employer . "&page=" . $page;
    }

    protected function request($url)
    {
        $httpClient = new HttpClient();
        $value = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36";
        $httpClient->setHeader("User-Agent", $value, true);
        $httpClient->setHeader('Content-Type', 'application/json', true);

        $response = $httpClient->get($url);

        return \Bitrix\Main\Web\Json::decode($response);
    }

    /**
     * Получаем полный список вакансий
     * @return void
     */
    protected function vacancieList()
    {
        $response = $this->request($this->buildUrl());
        $vacancies = $response['items'];
        $pages = $response['pages'];

        for ($i = 1; $i < $pages; $i++) {
            $response = $this->request($this->buildUrl($i));
            $vacancies = array_merge($vacancies, $response['items']);
        }

        return $vacancies;
    }

    protected function vacancieKey()
    {
        $arVacancies = $this->vacancieList();

        foreach ($arVacancies as $vacancy){
            $vacancy['full'] = $this->request($vacancy['url']);
            $arResult[$vacancy['id']] = $vacancy;
        }

        return $arResult;
    }

    protected function getSiteVacancies()
    {
        if (\CModule::IncludeModule("iblock")) {
            $arSelect = ["ID", "NAME", "EXTERNAL_ID", "WF_COMMENTS"];
            $arFilter = ["IBLOCK_ID" => 61];
            $res = \CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
            while ($ob = $res->GetNextElement()) {
                $arFields = $ob->GetFields();
                $arResult[$arFields['EXTERNAL_ID']] = $arFields;
            }
        }
        return $arResult;
    }

    protected function getSiteSections()
    {
        if (\CModule::IncludeModule("iblock")) {
            $arFilter = ["IBLOCK_ID" => 61];
            $res = \CIBlockSection::GetList(array(), $arFilter, false);
            while ($ob = $res->GetNextElement()) {
                $arFields = $ob->GetFields();
                $arResult[$arFields['XML_ID']] = $arFields;
            }
        }
        return $arResult;
    }

    protected function checkSum($item)
    {
        $line = '';
        foreach($item as $i)
        {
            if(is_array($i))
            {
                $line .= implode('',$i);
            }
            else
            {
                $line .= $i;
            }
        }
        $checkSum = crc32($line);
        return $checkSum;
    }

    public function run()
    {
        $arVacancies = $this->vacancieKey();
        $arSiteVacancies = $this->getSiteVacancies();
        $arSiteSections = $this->getSiteSections();

        // удаление неактивных вакансий
        foreach($arSiteVacancies as $id => $vac)
        {
            if(!array_key_exists($id, $arVacancies))
            {
                if(!CIBlockElement::Delete($vac['ID']))
                {
                    \AddMessage2Log('Ошибка удаления спектакля');
                }
                unset($arSiteVacancies[$id]);
            }
        }

        foreach ($arVacancies as $vacancy){
            // поиск директории для сохранения вакансии
            $sectionExternalId = $vacancy['full']['professional_roles'][0]['id'];
            $section = $arSiteSections[$sectionExternalId];
            $sectionId = $section['ID'];
            if (!$section && !$arSections[$sectionExternalId]){
                $bs = new \CIBlockSection;
                $arFields = Array(
                    "IBLOCK_ID" => 61,
                    "NAME" => $vacancy['full']['professional_roles'][0]['name'],
                    "XML_ID" => $sectionExternalId,
                );
                $sectionId = $bs->Add($arFields);
                $arSections[$sectionExternalId] = $sectionId;
            }

            $el = new \CIBlockElement;
            $sum = $this->checkSum($vacancy);
            $PROP['SALARY_FROM']	= $vacancy['salary']['from'];
            $arLoadProductArray = Array(
                "IBLOCK_ID"      	=> 61,
                "NAME"           	=> $vacancy['name'],
                "EXTERNAL_ID"		=> $vacancy['id'],
                "PROPERTY_VALUES"	=> $PROP,
                "IBLOCK_SECTION_ID"	=> $sectionId,
                "DETAIL_TEXT"   	=> $vacancy['full']['description'],
                "DETAIL_TEXT_TYPE"	=> 'html',
            );

            if(!array_key_exists($vacancy['id'], $arSiteVacancies)){
                // создаем
                $arLoadProductArray["WF_COMMENTS"] = $sum;
                if(!$el->Add($arLoadProductArray))
                {
                    \AddMessage2Log('Ошибка добавления вакансии: '.$el->LAST_ERROR);
                }
            }
            else{
                if($sum != $arSiteVacancies[$vacancy['id']]['WF_COMMENTS'])
                {
                    $arLoadProductArray["WF_COMMENTS"] = $sum;
                    $el->Update($arSiteVacancies[$vacancy['id']]['ID'], $arLoadProductArray);
                }
            }
        }

    }
}