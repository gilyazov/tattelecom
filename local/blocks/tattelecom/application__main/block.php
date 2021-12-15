<section class="application" id="application-host">
    <img src="/local/js/template/tattelecom-1/img/main-page/application/background.svg" alt="" class="application__background">
    <div class="gl__page-content">
        <div class="application__content">
            <h2 class="gl__title application__title">Оставьте заявку</h2>
            <div class="application__subtitle">Заполните данные и наши специалисты свяжутся с вами.</div>
            <?$APPLICATION->IncludeComponent(
                "tattelecom:form",
                "application__form-main",
                [],
                false
            );?>
        </div>
    </div>
</section>