<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Политика конфиденциальности при использовании мобильных приложений ПАО «Таттелеком»");
$APPLICATION->SetPageProperty("title", "Политика конфиденциальности при использовании мобильных приложений | Оператор Летай в Татарстане");
$APPLICATION->SetPageProperty("description", "Общие положения и перечень информации политики конфиденциальности при использовании мобильных приложений оператора Летай в Татарстане. Узнать подробнее об услугах компании и тарифах связи можно на сайте или по телефону +7 (843) 222-22-22.");
?>
<section class="news-page news-page-detail">
    <div class="gl__page-content">

        <div class="news-page-detail__heading">
<!--            <span class="news-page-detail__date">--><?//=$arResult["DISPLAY_ACTIVE_FROM"]?><!--</span>-->
            <h1 class="news-page-detail__title gl__title"><?$APPLICATION->ShowTitle(false)?></h1>
<!--            <span class="news-page-detail__legend">--><?//=$arResult["PROPERTIES"]["TYPE"]["VALUE"]?><!--</span>-->
        </div>
        <div class="news-page-detail__content">
            <?php
            $APPLICATION->IncludeComponent("bitrix:main.include", "", Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/include/policy.php"
                )
            );
            ?>
            </div>
    </div>
</section>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
<!--<p style="text-align: center;"><span style="font-size: x-large;"><strong>Политика конфиденциальности<br>при использовании мобильных приложений ПАО «Таттелеком»</strong></span></p>-->
