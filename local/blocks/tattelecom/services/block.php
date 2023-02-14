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
                            <span class="menu-tabs__radio-content">По Номеру лицевого счета</span>
                        </label>
                    </div>
                    <?$APPLICATION->IncludeComponent(
                        "tattelecom:pay",
                        "mobile-tab",
                        [],
                        false
                    );?>
                    <?$APPLICATION->IncludeComponent(
                        "tattelecom:pay",
                        "internet-tab",
                        [],
                        false
                    );?>
                </div>
                <div class="services__form-hint">Нажимая кнопку «Продолжить», вы принимаете <b>условия пользовательского соглашения</b> и
                    <a href="/policy.php"><b>политику конфиденциальности</b></a>.</div>
            </li>
            <li class="services__item-wrapper gl__white-container">
                <h3 class="services__item-info-title">Личный кабинет</h3>
                <div class="services__item-info-container">
                    <div class="services__item-info-content">
                        <div class="services__item-info-text">Максимум возможностей для управления счётом и услугами</div>
                        <a href="https://lk.letai.ru/template.LOGIN/" target="_blank" class="services__item-info-btn">
                            <span class="services__item-info-btn-text">Войти</span>
                            <svg width="40" height="40" aria-hidden="true" class="services__item-info-btn-icon">
                                <use xlink:href="#arrow-line-right"></use>
                            </svg>
                        </a>
                    </div>
                    <img src="/local/js/template/tattelecom-1/img/main-page/services/ellipse-image-1.svg" alt="" class="services__item-info-image">
                </div>
            </li>
            <li class="services__item-wrapper gl__white-container">
                <h3 class="services__item-info-title">Красивые номера</h3>
                <div class="services__item-info-container">
                    <div class="services__item-info-content">
                        <div class="services__item-info-text">Выберите номер с любимыми цифрами</div>
                        <a href="/mobile/beautiful-numbers/" class="services__item-info-btn">
                            <span class="services__item-info-btn-text">Подобрать</span>
                            <svg width="40" height="40" aria-hidden="true" class="services__item-info-btn-icon">
                                <use xlink:href="#arrow-line-right"></use>
                            </svg>
                        </a>
                    </div>
                    <img src="/local/js/template/tattelecom-1/img/main-page/services/ellipse-image-2.svg" alt="" class="services__item-info-image">
                </div>
            </li>
            <li class="services__item-wrapper gl__white-container mod-painted">
                <?$APPLICATION->IncludeComponent(
                    "tattelecom:form",
                    "transfer",
                    [],
                    false
                );?>
            </li>
        </ul>
    </div>
</section>