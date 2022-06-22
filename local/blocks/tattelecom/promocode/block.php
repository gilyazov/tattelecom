<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}
?>
<section class="application" id="application-host">
    <img src="/local/js/template/tattelecom-1/img/main-page/application/background.svg" alt="" class="application__background">
    <div class="gl__page-content">
        <div class="application__content">
            <h2 class="gl__title application__title">Поздравляем, ваш промокод</h2>
            <div class="application__subtitle mod-no-answer"></div>
            <span class="application__tel"><?=$classBlock->get('PROMO')?></span>
        </div>
    </div>
</section>