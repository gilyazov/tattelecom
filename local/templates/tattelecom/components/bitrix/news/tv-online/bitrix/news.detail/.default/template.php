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
$this->addExternalJS(BUILD_PATH . "assets/js/hls.min.js");
$this->addExternalJS(BUILD_PATH . "assets/js/swfobjects.js");
?>
<div class="tv-online__broadcast-container" data-broadcast="<?=$arResult["PROPERTIES"]["BROADCAST"]["VALUE"]?>">
    <div id="player" class="tv-online__broadcast-iframe">
        <video id="video" src="" class="tv-online__broadcast-video" controls></video>
    </div>
    <div class="tv-online__broadcast-hint-wrapper">
        <img src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" alt="" class="tv-online__broadcast-logo">
        <div class="tv-online__broadcast-mark">Сейчас в эфире</div>


        <div class="tv-online__broadcast-caption"><?=implode("<br>", $arResult["BROADCAST_CAPTION"])?></div>
        <div class="tv-online__broadcast-time"><?=FormatDate('H:i', $arResult["BROADCAST_START"])?>-<?=FormatDate('H:i', $arResult["BROADCAST_END"])?></div>
    </div>
</div>