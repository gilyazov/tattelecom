<section class="services" id="services-host">
    <div class="gl__page-content">
        <ul class="services__list js-menu-tabs-container">
            <li class="services__item-wrapper gl__white-container">
                <div>
                    <h3 class="services__item-info-title">Быстрое пополнение счета</h3>
                    <div class="menu-tabs__radio-btns-container">
                        <label class="menu-tabs__radio-wrapper">
                            <input type="radio" class="menu-tabs__radio js-menu-tab" name="services-adding-funds-account" checked="checked" value="mobile">
                            <span class="menu-tabs__radio-content">Мобильная связь</span>
                        </label>
                        <label class="menu-tabs__radio-wrapper">
                            <input type="radio" class="menu-tabs__radio js-menu-tab" name="services-adding-funds-account" value="internet">
                            <span class="menu-tabs__radio-content">Интернет</span>
                        </label>
                        <label class="menu-tabs__radio-wrapper">
                            <input type="radio" class="menu-tabs__radio js-menu-tab" name="services-adding-funds-account" value="tv">
                            <span class="menu-tabs__radio-content">Телевидение</span>
                        </label>
                    </div>
                    <form class="services__form-wrapper gl__menu-tab-content js-menu-tab-content" data-menu="mobile" data-need-validation data-parsley-validate data-parsley-focus="none">
                        <div class="services__form-inputs-wrapper">
                            <label class="gl-input__wrapper js-input-tel">
                                <span class="gl-input__title">Введите номер</span>
                                <input type="tel" class="gl-input__input js-phone-mask" placeholder="+7 (___) ___-__-__" name="services-tel" data-parsley-required="">
                            </label>
                            <label class="gl-input__wrapper js-input-number">
                                <span class="gl-input__title">От 10 до 30 000 Р</span>
                                <input type="number" class="gl-input__input" placeholder="Сумма" name="services-summ" min="10" max="30000" data-parsley-required="">
                            </label>
                            <div class="services__btn-submit-wrapper">
                                <button type="submit" class="gl__main-btn services__btn-submit">Продолжить</button>
                            </div>
                        </div>
                    </form>
                    <form class="services__form-wrapper gl__menu-tab-content js-menu-tab-content" data-menu="internet" data-need-validation data-parsley-validate data-parsley-focus="none">Интернет</form>
                    <form class="services__form-wrapper gl__menu-tab-content js-menu-tab-content" data-menu="tv" data-need-validation data-parsley-validate data-parsley-focus="none">Телевидение</form>
                </div>
                <div class="services__form-hint">Нажимая кнопку «Продолжить», вы принимаете условия пользовательского соглашения.</div>
            </li>
            <li class="services__item-wrapper gl__white-container">
                <h3 class="services__item-info-title">Личный кабинет</h3>
                <div class="services__item-info-container">
                    <div class="services__item-info-content">
                        <div class="services__item-info-text">Максимум возможностей для управления счётом и услугами</div>
                        <button type="button" class="services__item-info-btn">
                            <span class="services__item-info-btn-text">Войти</span>
                            <svg width="40" height="40" aria-hidden="true" class="services__item-info-btn-icon">
                                <use xlink:href="#arrow-line-right"></use>
                            </svg>
                        </button>
                    </div>
                    <img src="/local/js/template/tattelecom-1/img/main-page/services/ellipse-image-1.svg" alt="" class="services__item-info-image">
                </div>
            </li>
            <li class="services__item-wrapper gl__white-container">
                <h3 class="services__item-info-title">Красивые номера</h3>
                <div class="services__item-info-container">
                    <div class="services__item-info-content">
                        <div class="services__item-info-text">Выберите номер с любимыми цифрами</div>
                        <button type="button" class="services__item-info-btn">
                            <span class="services__item-info-btn-text">Подобрать</span>
                            <svg width="40" height="40" aria-hidden="true" class="services__item-info-btn-icon">
                                <use xlink:href="#arrow-line-right"></use>
                            </svg>
                        </button>
                    </div>
                    <img src="/local/js/template/tattelecom-1/img/main-page/services/ellipse-image-2.svg" alt="" class="services__item-info-image">
                </div>
            </li>
            <li class="services__item-wrapper gl__white-container mod-painted">
                <h3 class="services__item-info-title">
                    <img src="/local/js/template/tattelecom-1/img/common/sign-logo-fly.svg" alt="" class="services__item-info-title-icon"> Переходите на «Летай» со своим номером
                </h3>
                <form class="services__form-wrapper" data-need-validation data-parsley-validate data-parsley-focus="none">
                    <div class="services__form-inputs-wrapper">
                        <label class="gl-input__wrapper js-input-tel">
                            <span class="gl-input__title">Введите номер переноса</span>
                            <input type="tel" class="gl-input__input js-phone-mask" placeholder="+7 (___) ___-__-__" name="services-tel-transfer" data-parsley-required="">
                        </label>
                        <div class="services__btn-submit-wrapper">
                            <button type="submit" class="gl__main-btn mod-transparent services__btn-submit">Начать перенос</button>
                        </div>
                    </div>
                    <div class="services__checkbox">
                        <label class="checkbox__wrapper">
                            <input type="checkbox" class="checkbox" name="services-approval" data-parsley-required="">
                            <span class="checkbox__content mod-main">
												<svg width="16" height="16" aria-hidden="true" class="checkbox__content-icon">
													<use xlink:href="#checkbox-checked"></use>
												</svg>
											</span>
                            <span class="checkbox__text mod-main">Я соглашаюсь на получение консультации по переносу номера</span>
                        </label>
                    </div>
                </form>
            </li>
        </ul>
    </div>
</section>