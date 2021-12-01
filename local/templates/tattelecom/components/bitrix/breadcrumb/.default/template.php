<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

$strReturn .= '<section class="bread-crumbs__container gl__sm-hide" id="bread-crumbs-host"><div class="gl__page-content"><ul class="bread-crumbs__list" itemprop="http://schema.org/breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index >= 0? '<svg width="16" height="16" aria-hidden="true" class="bread-crumbs__link-icon">
                                <use xlink:href="#arrow-right"></use>
                            </svg>' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<li class="bread-crumbs__item" id="bx_breadcrumb_'.$index.'" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item" class="bread-crumbs__link">
					<span itemprop="name">'.$title.'</span>
					'.$arrow.'
				</a>
				<meta itemprop="position" content="'.($index + 1).'" />
			</li>';
	}
	else
	{
		$strReturn .= '
			<li class="bread-crumbs__item">
				<span class="bread-crumbs__link">'.$title.'</span>
			</li>';
	}
}

$strReturn .= '</ul></div></section>';

return $strReturn;
