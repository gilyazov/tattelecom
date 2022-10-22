<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)
{
    die();
}

/**
 * @global \CMain $APPLICATION
 */

global $APPLICATION;

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$strReturn = '';

// if isset main page - unlink
if (
    !empty($arResult) &&
    $arResult[0]['LINK'] == '/'
)
{
    unset($arResult[0]);
}

// insert custom main page
$arResult = array_merge(array(array(
    'LINK' => '#system_mainpage',
    'TITLE' => Loc::getMessage('LANDING_TPL_CHAIN_TPL_MAIN')
)), (array) $arResult);

$arResult = array_values($arResult);

$strReturn .= '<ul class="bread-crumbs__list">';

$outputItems = 0;
$itemSize = count($arResult);

for($index = 0; $index < $itemSize; $index++)
{
    if (!$arResult[$index]["TITLE"])
    {
        continue;
    }

    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    // $nextRef = ($index < $itemSize-2 && $arResult[$index+1]["LINK"] <> ""? ' itemref="bx_breadcrumb_'.($index+1).'"' : '');
    // $child = ($index > 0? ' itemprop="child"' : '');
    $arrow = ($index > 0? '<i class="landing-breadcrumb-arrow fa g-mx-5"></i>' : '');

    if ($arResult[$index]["LINK"] <> "")// && $index != $itemSize-1
    {
        $outputItems++;
        $strReturn .= '
			<li class="bread-crumbs__item"
				itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				'.$arrow.'
				<a class="bread-crumbs__link"
					href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="url">
					<span class="landing-breadcrumb-name" itemprop="name">'.$title.'</span><svg width="16" height="16" aria-hidden="true" class="bread-crumbs__link-icon">
                            <use xlink:href="#arrow-right"></use>
                        </svg>
				</a>
				<meta itemprop="position" content="'.($index + 1).'" />
			</li>';
    }
}

$strReturn .= '</ul>';

if ($outputItems <= 1)
{
    $strReturn = '';
}

return $strReturn;
