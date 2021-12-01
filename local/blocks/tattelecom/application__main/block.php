<section class="application" id="application-host">
    <img src="/local/js/template/tattelecom-1/img/main-page/application/background.svg" alt="" class="application__background">
    <div class="gl__page-content">
        <div class="application__content">
            <h2 class="gl__title application__title">Оставьте заявку</h2>
            <div class="application__subtitle">Заполните данные и наши специалисты свяжутся с вами.</div>
            <form class="application__form mod-leave-request" data-need-validation data-parsley-validate data-parsley-focus="none">
                <label class="gl-input__wrapper js-input-text">
                    <input type="text" class="gl-input__input" placeholder="Ваше имя" name="application-name" data-parsley-required="">
                </label>
                <label class="gl-input__wrapper js-input-tel">
                    <input type="tel" class="gl-input__input js-phone-mask" placeholder="+7 (___) ___-__-__" name="application-tel" data-parsley-required="">
                </label>
                <div class="application__btn-wrapper">
                    <button type="submit" class="gl__main-btn application__btn">Жду звонка</button>
                </div>
            </form>
        </div>
    </div>
</section>