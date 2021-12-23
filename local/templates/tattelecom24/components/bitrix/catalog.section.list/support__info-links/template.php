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
$this->setFrameMode(true);

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
		'CONT' => 'bx_catalog_line',
		'TITLE' => 'bx_catalog_line_category_title',
		'LIST' => 'bx_catalog_line_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
	),
	'TEXT' => array(
		'CONT' => 'bx_catalog_text',
		'TITLE' => 'bx_catalog_text_category_title',
		'LIST' => 'bx_catalog_text_ul'
	),
	'TILE' => array(
		'CONT' => 'bx_catalog_tile',
		'TITLE' => 'bx_catalog_tile_category_title',
		'LIST' => 'bx_catalog_tile_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>
<div class="support__info-links-container">
    <?
        $intCurrentDepth = 1;
        $boolFirst = true;
        foreach ($arResult['SECTIONS'] as &$arSection)
        {
            $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
            $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

            if ($intCurrentDepth < $arSection['RELATIVE_DEPTH_LEVEL'])
            {
                if (0 < $intCurrentDepth)
                    echo "\n",str_repeat("\t", $arSection['RELATIVE_DEPTH_LEVEL']),'<ul class="support__info-link-item-list">';
            }
            elseif ($intCurrentDepth == $arSection['RELATIVE_DEPTH_LEVEL'])
            {
                if (!$boolFirst)
                    echo '</li>';
            }
            else
            {
                while ($intCurrentDepth > $arSection['RELATIVE_DEPTH_LEVEL'])
                {
                    echo '</li>',"\n",str_repeat("\t", $intCurrentDepth),'</ul>',"\n",str_repeat("\t", $intCurrentDepth-1);
                    $intCurrentDepth--;
                }
                echo str_repeat("\t", $intCurrentDepth-1),'</div>';
            }

            echo (!$boolFirst ? "\n" : ''),str_repeat("\t", $arSection['RELATIVE_DEPTH_LEVEL']);
            ?>
            <?if($arSection['RELATIVE_DEPTH_LEVEL'] == 1):?>
                <div class="support__info-links-wrapper">
                    <div class="support__info-links-caption"><? echo $arSection["NAME"];?></div>
            <?else:?>
                <li id="<?=$this->GetEditAreaId($arSection['ID']);?>" class="support__info-link-item">
                    <a href="<? echo $arSection["SECTION_PAGE_URL"]; ?>" class="support__info-link"><? echo $arSection["NAME"];?></a>
            <?endif;
            $intCurrentDepth = $arSection['RELATIVE_DEPTH_LEVEL'];
            $boolFirst = false;
        }
        unset($arSection);
        while ($intCurrentDepth > 1)
        {
            echo '</li>',"\n",str_repeat("\t", $intCurrentDepth),'</ul>',"\n",str_repeat("\t", $intCurrentDepth-1);
            $intCurrentDepth--;
        }
        if ($intCurrentDepth > 0)
        {
            echo '</li>',"\n";
        }
    ?>
</div>