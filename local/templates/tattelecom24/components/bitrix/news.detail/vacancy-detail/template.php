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
if($image = $arResult["PREVIEW_PICTURE"]["ID"]){
    $preview = \Tattelecom\Core\Tools::resizeImage($image, 2655, 2258, true);
}
?>
<section class="first-banner gl__section">
    <div class="gl__page-content">
        <div class="first-banner__content">
            <div class="first-banner__left">
                <img class="first-banner__logo" src="/local/js/tattelecom/build/img/vacancy/first-banner/logo-letai.svg" alt="Летай">
                <h1 class="first-banner__title"><?=$arResult["NAME"]?></h1>
                <ul class="first-banner__features">
                    <?foreach ($arResult["PROPERTIES"]["FEATURE"]["VALUE"] as $feature):?>
                        <li class="first-banner__feature"><?=$feature?></li>
                    <?endforeach;?>
                </ul>
                <a class="first-banner__btn gl__main-btn mod-white" href="#form">
                    Откликнуться<span class="first-banner__btn-arrow" aria-hidden="true">↘</span>
                </a>
            </div>
            <div class="first-banner__right">
                <img class="first-banner__background" src="/local/js/tattelecom/build/img/vacancy/first-banner/background.png" alt="">
                <img class="first-banner__person" src="<?=$preview?>" alt="<?=$arResult["NAME"]?>">
            </div>
        </div>
    </div>
</section>
<section class="vacancy-info-cards gl__section">
    <div class="gl__page-content">
        <div class="vacancy-info-cards__list">
            <article class="vacancy-info-cards__card">
                <?if($title = $arResult["PROPERTIES"]["CARD_TITLE_1"]["VALUE"]):?>
                    <h2 class="vacancy-info-cards__title"><?=$title?></h2>
                <?endif;?>

                <?if($arDesc = $arResult["PROPERTIES"]["CARD_DESC_1"]["~VALUE"]):?>
                    <ul class="vacancy-info-cards__items">
                        <?foreach ($arDesc as $desc):?>
                            <li class="vacancy-info-cards__item">
                                <?=$desc["TEXT"]?>
                            </li>
                        <?endforeach;?>
                    </ul>
                <?endif;?>
            </article>
            <article class="vacancy-info-cards__card">
                <?if($title = $arResult["PROPERTIES"]["CARD_TITLE_2"]["VALUE"]):?>
                    <h2 class="vacancy-info-cards__title"><?=$title?></h2>
                <?endif;?>

                <?if($arDesc = $arResult["PROPERTIES"]["CARD_DESC_2"]["VALUE"]):?>
                    <ul class="vacancy-info-cards__items">
                        <?foreach ($arDesc as $desc):?>
                            <li class="vacancy-info-cards__item">
                                <?=$desc["TEXT"]?>
                            </li>
                        <?endforeach;?>
                    </ul>
                <?endif;?>
            </article>
        </div>
    </div>
</section>