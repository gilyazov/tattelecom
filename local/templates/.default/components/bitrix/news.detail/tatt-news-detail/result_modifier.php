<?php
/** @var array $arResult */

if ($fileId = $arResult["PROPERTIES"]["FILE"]["VALUE"]){
    LocalRedirect(CFile::GetPath($fileId));;
}