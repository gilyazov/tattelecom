<section class="application-consultation" id="application-consultation-host">
    <div class="gl__page-content">
        <div class="application-consultation__content">
            <img src="/local/js/template/tattelecom-1/img/promo-gpon-page/application-background.svg" alt="" class="application-consultation__background">
            <div class="application-consultation__title">Оставьте заявку на консультацию</div>
            <div class="application-consultation__subtitle">Наши специалисты перезвонят Вам и помогут подобрать лучшее решение</div>
            <?$APPLICATION->IncludeComponent(
                "tattelecom:form",
                "application__consultation",
                [],
                false
            );?>
        </div>
    </div>
</section>