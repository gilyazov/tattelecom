<section class="application" id="application-host">
    <img src="/local/js/template/tattelecom-1/img/main-page/application/background.svg" alt="" class="application__background">
    <div class="gl__page-content">
        <div class="application__content">
            <h2 class="gl__title application__title">Не нашли ответа на свой вопрос?</h2>
            <div class="application__subtitle mod-no-answer">Напишите нам или позвоните по телефону</div>
            <a href="tel:+78432222222" class="application__tel">(843) 222-22-22</a>
            <form class="application__form mod-no-answer" data-need-validation data-parsley-validate data-parsley-focus="none">
                <div class="application__form-item mod-no-answer">
                    <label class="gl-input__wrapper js-input-text">
                        <input type="text" class="gl-input__input" placeholder="Ваше имя" name="application-name" data-parsley-required="">
                    </label>
                </div>
                <div class="application__form-item mod-no-answer">
                    <label class="gl-input__wrapper js-input-tel">
                        <input type="tel" class="gl-input__input js-phone-mask" placeholder="+7 (___) ___-__-__" name="application-tel" data-parsley-required="">
                    </label>
                </div>
                <div class="application__form-item mod-no-answer">
                    <label>
                        <textarea class="gl-input__input mod-textarea" placeholder="Ваш вопрос" name="application-question" data-parsley-required="" data-parsley-minlength="2"></textarea>
                    </label>
                </div>
                <div class="application__btn-wrapper mod-no-answer">
                    <button type="submit" class="gl__main-btn application__btn">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</section>