<section class="application" id="application-host">
    <img src="/local/js/template/tattelecom-1/img/main-page/application/background.svg" alt="" class="application__background">
    <div class="gl__page-content">
        <div class="application__content">
            <h2 class="gl__title application__title">Не нашли ответа на свой вопрос?</h2>
            <div class="application__subtitle mod-no-answer">Напишите нам или позвоните по телефону</div>
            <a href="tel:+78432222222" class="application__tel">(843) 222-22-22</a>

            <?$APPLICATION->IncludeComponent(
                "tattelecom:form",
                "application__form",
                [],
                false
            );?>
        </div>
    </div>
</section>