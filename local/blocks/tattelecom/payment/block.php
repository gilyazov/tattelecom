<section class="payment-services" id="payment-services-host">
    <div class="gl__page-content">
        <h2 class="gl__title">Оплата услуг</h2>
        <div class="payment-services__content">
            <div class="payment-services__item gl__white-container">
                <div class="payment-services__item-title">С банковской карты, Apple Pay или Google Pay</div>
                <div class="payment-services__item-subtitle">Мгновенное зачисление денег на счёт телефона без комиссий</div>

                <?$APPLICATION->IncludeComponent(
                    "tattelecom:pay",
                    "mobile",
                    [],
                    false
                );?>
            </div>
            <div class="payment-services__item gl__white-container">
                <div class="payment-services__item-title">По Номеру лицевого счета</div>
                <div class="payment-services__item-subtitle">Сумма платежа будет доступна уже сейчас, а пополнить баланс можно будет позже</div>

                <?$APPLICATION->IncludeComponent(
                    "tattelecom:pay",
                    "personal-account",
                    [],
                    false
                );?>
            </div>

            <div class="payment-services__item gl__white-container">
                <div class="payment-services__item-title">Обещанный платеж</div>
                <div class="payment-services__item-subtitle">Если ваш баланс близок к нулю, а возможности пополнить счет в данный момент нет, воспользуйтесь «Обещанным платежом».</div>
                <form data-need-validation data-parsley-validate data-parsley-focus="none" class="payment-services__form js-form-pre-modal-top-up-account">
                    <div class="payment-services__form-inputs-wrapper"></div>
                    <div>
                        <div class="payment-services__form-btn-wrapper">
                            <button type="submit" class="payment-services__form-btn gl__main-btn js-open-top-up-account-modal">Продолжить</button>
                        </div>
                        <div class="payment-services__form-hint-wrapper">
                            <div class="payment-services__form-hint-text">Нажимая кнопку «Продолжить», вы принимаете условия пользовательского соглашения.</div>
                            <button type="button" class="payment-services__form-link">Подробнее об услуге</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="payment-services__item gl__white-container">
                <div class="payment-services__item-title">Подключите автоплатёж</div>
                <div class="payment-services__item-subtitle">Счет будет автоматически пополняться с банковской карты на заданную сумму, при достижении определенного остатка на балансе.</div>
                <form data-need-validation data-parsley-validate data-parsley-focus="none" class="payment-services__form js-form-pre-modal-top-up-account">
                    <div class="payment-services__form-inputs-wrapper"></div>
                    <div>
                        <div class="payment-services__form-btn-wrapper">
                            <button type="submit" class="payment-services__form-btn gl__main-btn js-open-top-up-account-modal">Продолжить</button>
                        </div>
                        <div class="payment-services__form-hint-wrapper">
                            <div class="payment-services__form-hint-text">Нажимая кнопку «Продолжить», вы принимаете условия пользовательского соглашения.</div>
                            <button type="button" class="payment-services__form-link">Подробнее об услуге</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>