<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php /* @var array $arResult */ ?>

<? $this->setFrameMode(true); ?>

<section class="cookie-popup" id="dlay-cookienotice-modal">
    <div class="cookie-popup__wrap">
        <button class="cookie-popup__close js-cookie-close"></button>
        <p class="cookie-popup__subtitle"><?=$arResult["NOTICE_TEXT"]?></p>
        <button class="cookie-popup__button js-cookie-close"><?=$arResult["NOTICE_BUTTON"]?></button>
    </div>
</section>

<!--<section class="cookie-popup" style="display: block;">
    <div class="cookie-popup__wrap">
        <button class="cookie-popup__close icon-ic_close"></button>
        <h2 class="cookie-popup__title">Мы используем файлы cookies</h2>
        <p class="cookie-popup__subtitle">
            Они помогают улучшить работу сайта и сделать его удобнее. Посещая страницы
            сайта, вы соглашаетесь с <a href="" class="cookie-popup__link">условиями использования</a> файлов cookie.        </p>
        <button class="cookie-popup__button">
            Согласен
        </button>
    </div>
</section>-->