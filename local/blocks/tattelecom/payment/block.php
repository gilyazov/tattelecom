<section class="payment-services" id="payment-services-host">
    <div class="gl__page-content">
        <h1 class="gl__title">Оплата услуг</h1>
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
                <div class="payment-services__item-subtitle">Введите номер лицевого счёта и корректную сумму платежа для совершения оплаты.</div>

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
                            <a href="https://newlk.letai.ru/" target="_blank" class="payment-services__form-btn gl__main-btn js-open-top-up-account-modal">Продолжить</a>
                        </div>
                        <div class="payment-services__form-hint-wrapper">
                            <div class="payment-services__form-hint-text">Нажимая кнопку «Продолжить», вы принимаете условия пользовательского соглашения.</div>
                            <a href="/upload/medialibrary/30b/2j4p6tkozrcjm9xtddyn12qkmbm6c4lf.pdf" target="_blank" class="payment-services__form-link">Подробнее об услуге</a>
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
                            <a href="https://newlk.letai.ru/" target="_blank" class="payment-services__form-btn gl__main-btn js-open-top-up-account-modal">Продолжить</a>
                        </div>
                        <div class="payment-services__form-hint-wrapper">
                            <div class="payment-services__form-hint-text">Нажимая кнопку «Продолжить», вы принимаете условия пользовательского соглашения.</div>
                            <a href="/upload/medialibrary/f3b/2otfk88ff02axva1uenjx6nldzfwj60o/d01357e2_7d38_4b42_8674_851eecebb62b.pdf" target="_blank" class="payment-services__form-link">Подробнее об услуге</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>