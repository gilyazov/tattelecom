<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$GLOBALS['BX_MENU_CUSTOM']->AddItem('left', [
        'TEXT' => 'Тарифы',
        'LINK' => '/phone/',
        //'SELECTED' => true
    ]
);

$arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL");
$arFilter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "ACTIVE"=>"Y", "IBLOCK_SECTION_ID" => false);
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();

    $GLOBALS['BX_MENU_CUSTOM']->AddItem('left', [
            'TEXT' => $arFields["NAME"],
            'LINK' => $arFields["DETAIL_PAGE_URL"]
        ]
    );
}
?>