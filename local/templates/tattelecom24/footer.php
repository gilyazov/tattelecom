

<div class="modal" id="modal-callback-host">
    <div class="modal__container mod-small js-modal-container">
        <div class="modal__content js-modal-content">
            <div class="modal__head">
                <div class="modal__title">
                    Оставьте свой номер, мы перезвоним Вам в течение 15 минут.
                </div>
                <button type="button" class="modal__btn-close js-close-callback-modal">
                    <svg width="32" height="32" aria-hidden="true" class="modal__close-icon">
                        <use xlink:href="#close"></use>
                    </svg>
                </button>
            </div>

            <form class="js-form-modal callback__form">
                <!--
                  ___Обязательные поля___
                  type - html-тип инута
                  name - обязательно префикс - род.компонент (н-р services-tel)
                  placeholder
                
                  ___Необязательные поля___
                  required (true/false) - обязательно для заполнения
                  inputTitle - заголовок НАД инпутом
                  phoneMask (true/false) - маска для телефона
                  rubMask (true/false) - маска для ₽ в конце
                  minLength - деф-2
                  maxLength - деф-none
                  minNumber - минимальное число
                  maxNumber - максимальное число
                  id - обычный id, например для первого пароля
                  parsleyEqualto - для повторного пароля, проверяет совпадение с предыдущим (у которого указали id)
                  parsleyType - для валидации (н-р email)
                  isSimpleDesign - упрощенный дизайн
                  numberNoArrows - (true / false) - убрать стрелочки с number
                -->

                <label class="gl-input__wrapper js-input-tel">
                    <input type="tel"
                           class="gl-input__input
                     js-phone-mask
                     
                     
                     "
                           placeholder="+7 (___) ___-__-__"
                           name="modal-callback-tel"


                           data-parsley-required=""





                    >
                </label>

                <div class="callback__content-checkbox-wrapper">
                    <!--
                      ___Обязательные поля___
                      name - обязательно префикс - род.компонент (н-р services-tel)
                    
                      ___Необязательные поля___
                      required (true/false) - обязательно для заполнения
                      caption - пояснение чекбокса справа
                      isChecked - нужен ли checked изначально
                      isModal - чекбокс для модалки
                      captionGreyDark - цвет подписи #A6A6A6 (--main-grey-color)
                    -->

                    <label class="checkbox__wrapper">
                        <input type="checkbox"
                               class="checkbox" name="modal-callback-agree"
                               data-parsley-required=""
                        >
                        <span class="checkbox__content
                  mod-modal
            ">
            
                <svg width="16" height="16" aria-hidden="true" class="checkbox__content-icon">
                  <use xlink:href="#checkbox-checked"></use>
                </svg>
              </span>
                        <span class="checkbox__text
                  mod-modal
            ">
                Я согласен на обработку своих персональных данных
              </span>
                    </label>
                </div>

                <button type="button" class="gl__main-btn modal__btn-submit js-btn-submit">
                    Жду звонка
                </button>
            </form>
        </div>
    </div>
</div>
<div class="modal" id="modal-thanks">
    <div class="modal-thanks__container modal__container mod-small" id="modal-thanks-container">
        <div class="modal__content js-modal-content">
            <img src="<?=BUILD_PATH?>img/modals/background.svg" alt="" class="modal-thanks__background">

            <div class="modal-thanks__head">
                <button type="button" class="modal__btn-close mod-modal-thanks" id="close-thanks-modal">
                    <svg width="32" height="32" aria-hidden="true" class="modal__close-icon mod-white">
                        <use xlink:href="#close"></use>
                    </svg>
                </button>
            </div>

            <div class="modal-thanks__title">
                Спасибо!
            </div>

            <div class="modal-thanks__image-wrapper">
                <img src="<?=BUILD_PATH?>img/modals/thanks.svg" alt="" class="modal-thanks__image">
            </div>

            <div class="modal-thanks__text">
                <div>Ваша заявка принята в обработку.</div>
                <div>Мы свяжемся с вами в ближайшее время.</div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal-send-request-host">
    <div class="modal__container mod-middle js-modal-container">
        <div class="modal__content js-modal-content">
            <div class="modal__head">
                <div class="modal__title">
                    Тариф «Много интернета»
                </div>
                <button type="button" class="modal__btn-close js-close-send-request-modal">
                    <svg width="32" height="32" aria-hidden="true" class="modal__close-icon">
                        <use xlink:href="#close"></use>
                    </svg>
                </button>
            </div>

            <div class="send-request__content">
                <div class="send-request__info">
                    <div class="send-request__price">
                        <span class="number">240</span>₽/мес
                    </div>
                    <div class="send-request__info-hint">
                        <div>Укажите имя и контактный номер телефона.</div>
                        <div>Мы перезвоним Вам в течение 15 минут.</div>
                        <div>Клиентская служба работает с 08-00 до 20-00.</div>
                    </div>
                </div>

                <div class="send-request__product-wrapper">
                    <div>
                        <div class="send-request__product-caption">тип</div>
                        <div class="send-request__product-value">модель</div>
                        <div class="send-request__product-price-wrapper">
                            <span class="send-request__product-price">0</span>₽
                        </div>
                    </div>
                </div>

                <form class="js-form-modal">
                    <div class="send-request__form-inputs">
                        <!--
                          ___Обязательные поля___
                          type - html-тип инута
                          name - обязательно префикс - род.компонент (н-р services-tel)
                          placeholder
                        
                          ___Необязательные поля___
                          required (true/false) - обязательно для заполнения
                          inputTitle - заголовок НАД инпутом
                          phoneMask (true/false) - маска для телефона
                          rubMask (true/false) - маска для ₽ в конце
                          minLength - деф-2
                          maxLength - деф-none
                          minNumber - минимальное число
                          maxNumber - максимальное число
                          id - обычный id, например для первого пароля
                          parsleyEqualto - для повторного пароля, проверяет совпадение с предыдущим (у которого указали id)
                          parsleyType - для валидации (н-р email)
                          isSimpleDesign - упрощенный дизайн
                          numberNoArrows - (true / false) - убрать стрелочки с number
                        -->

                        <label class="gl-input__wrapper js-input-text">
                            <input type="text"
                                   class="gl-input__input
                         
                         
                         
                         "
                                   placeholder="Ваше имя"
                                   name="modal-send-request-name"


                                   data-parsley-required=""





                            >
                        </label>
                        <!--
                          ___Обязательные поля___
                          type - html-тип инута
                          name - обязательно префикс - род.компонент (н-р services-tel)
                          placeholder
                        
                          ___Необязательные поля___
                          required (true/false) - обязательно для заполнения
                          inputTitle - заголовок НАД инпутом
                          phoneMask (true/false) - маска для телефона
                          rubMask (true/false) - маска для ₽ в конце
                          minLength - деф-2
                          maxLength - деф-none
                          minNumber - минимальное число
                          maxNumber - максимальное число
                          id - обычный id, например для первого пароля
                          parsleyEqualto - для повторного пароля, проверяет совпадение с предыдущим (у которого указали id)
                          parsleyType - для валидации (н-р email)
                          isSimpleDesign - упрощенный дизайн
                          numberNoArrows - (true / false) - убрать стрелочки с number
                        -->

                        <label class="gl-input__wrapper js-input-tel">
                            <input type="tel"
                                   class="gl-input__input
                         js-phone-mask
                         
                         
                         "
                                   placeholder="+7 (___) ___-__-__"
                                   name="modal-send-request-tel"


                                   data-parsley-required=""





                            >
                        </label>
                    </div>

                    <div class="send-request__form-select-wrapper">
                        <!--
                          __Обязательные поля__
                          name - input name
                          options - опции
                        
                          __Необязательные поля__
                          selectTitle - заголовок
                          required - обязательно для заполнения
                          placeholder
                          isSearch - дизайн с лупой
                          isSimpleDesign - упрощенный дизайн
                          isBorderBottom - упрощенный дизайн
                          isPayOther - селект для "Оплата Другое"
                          isSmallChoicesList - укороченный список options
                        
                          iconSearchRight (true/false)
                          iconSearchLeft (true/false)
                          iconSimLeft (true/false)
                        -->
                    </div>

                    <div class="send-request__content-checkbox-wrapper">
                        <!--
                          ___Обязательные поля___
                          name - обязательно префикс - род.компонент (н-р services-tel)
                        
                          ___Необязательные поля___
                          required (true/false) - обязательно для заполнения
                          caption - пояснение чекбокса справа
                          isChecked - нужен ли checked изначально
                          isModal - чекбокс для модалки
                          captionGreyDark - цвет подписи #A6A6A6 (--main-grey-color)
                        -->

                        <label class="checkbox__wrapper">
                            <input type="checkbox"
                                   class="checkbox" name="modal-send-request-agree"
                                   data-parsley-required=""
                            >
                            <span class="checkbox__content
                    mod-modal
              ">
              
                  <svg width="16" height="16" aria-hidden="true" class="checkbox__content-icon">
                    <use xlink:href="#checkbox-checked"></use>
                  </svg>
                </span>
                            <span class="checkbox__text
                    mod-modal
              ">
                  Я согласен на обработку своих персональных данных
                </span>
                        </label>
                    </div>

                    <button type="button" class="gl__main-btn modal__btn-submit js-btn-submit">
                        Отправить заявку
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal-about-tariff-host">
    <div class="modal__container mod-middle js-modal-container">
        <div class="modal__content js-modal-content">
            <div class="modal__head">
                <div class="modal__title">
                    Тариф “Много интернета”
                </div>
                <button type="button" class="modal__btn-close js-close-about-tariff-modal">
                    <svg width="32" height="32" aria-hidden="true" class="modal__close-icon">
                        <use xlink:href="#close"></use>
                    </svg>
                </button>
            </div>

            <ul class="about-tariff__list">
                <li class="about-tariff__item gl__white-container">
                    <a href="" class="about-tariff__item-link">
                        <div class="about-tariff__item-link-content">
                            <div class="about-tariff__item-title">Купить SIM-карту</div>
                            <div class="about-tariff__item-subtitle">Для новых клиентов</div>
                        </div>

                        <span class="about-tariff__item-btn">
              <svg width="42" height="42" aria-hidden="true" class="about-tariff__item-btn-icon">
                <use xlink:href="#arrow-line-right"></use>
              </svg>
            </span>
                    </a>
                </li>
                <li class="about-tariff__item gl__white-container">
                    <a href="" class="about-tariff__item-link">
                        <div class="about-tariff__item-link-content">
                            <div class="about-tariff__item-title">Перейти на “Летай” со своим номером</div>
                            <div class="about-tariff__item-subtitle">Для абонентов других операторов</div>
                        </div>

                        <div class="about-tariff__item-btn">
                            <svg width="42" height="42" aria-hidden="true" class="about-tariff__item-btn-icon">
                                <use xlink:href="#arrow-line-right"></use>
                            </svg>
                        </div>
                    </a>
                </li>

                <li class="about-tariff__item gl__white-container">
                    <a href="" class="about-tariff__item-link">
                        <div class="about-tariff__item-link-content">
                            <div class="about-tariff__item-title">Сменить тариф</div>
                            <div class="about-tariff__item-subtitle">Для абонентов “Летай”</div>
                        </div>

                        <div class="about-tariff__item-btn">
                            <svg width="42" height="42" aria-hidden="true" class="about-tariff__item-btn-icon">
                                <use xlink:href="#arrow-line-right"></use>
                            </svg>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="modal" id="modal-installments-host">
    <div class="modal__container mod-middle js-modal-container">
        <div class="modal__content js-modal-content">
            <div class="modal__head">
                <div class="modal__title">
                    Доступно только абонентам Летай
                </div>
                <button type="button" class="modal__btn-close js-close-installments-modal">
                    <svg width="32" height="32" aria-hidden="true" class="modal__close-icon">
                        <use xlink:href="#close"></use>
                    </svg>
                </button>
            </div>

            <div class="modal-installments__content">
                <p class="modal-installments__content-text">Первоначальный взнос - 2 459 руб.</p>
                <p class="modal-installments__content-text">Ежемесячный платеж - 2 012 руб.</p>
                <p class="modal-installments__content-text">Срок рассрочки - 11 мес.</p>
                <p class="modal-installments__content-text">Общая сумма рассрочки - 24 591 руб.</p>
            </div>
        </div>
    </div>
</div>
<div class="top-up-account modal" id="modal-top-up-account-host">
    <div class="modal__container mod-large js-modal-container">
        <div class="modal__content js-modal-content">
            <div class="modal__head">
                <div class="top-up-account__title modal__title">
                    Пополнить счет
                </div>
                <button type="button" class="modal__btn-close js-close-top-up-account-modal">
                    <svg width="32" height="32" aria-hidden="true" class="modal__close-icon">
                        <use xlink:href="#close"></use>
                    </svg>
                </button>
            </div>

            <div class="js-menu-tabs-container">

                <div class="js-menu-tab-content gl__menu-tab-content" data-menu-mobile>
                    <form data-need-validation data-parsley-validate data-parsley-focus="none"
                          class="top-up-account__form-wrapper">
                        <div class="top-up-account__form-input">
                            <!--
                              ___Обязательные поля___
                              type - html-тип инута
                              name - обязательно префикс - род.компонент (н-р services-tel)
                              placeholder
                            
                              ___Необязательные поля___
                              required (true/false) - обязательно для заполнения
                              inputTitle - заголовок НАД инпутом
                              phoneMask (true/false) - маска для телефона
                              rubMask (true/false) - маска для ₽ в конце
                              minLength - деф-2
                              maxLength - деф-none
                              minNumber - минимальное число
                              maxNumber - максимальное число
                              id - обычный id, например для первого пароля
                              parsleyEqualto - для повторного пароля, проверяет совпадение с предыдущим (у которого указали id)
                              parsleyType - для валидации (н-р email)
                              isSimpleDesign - упрощенный дизайн
                              numberNoArrows - (true / false) - убрать стрелочки с number
                            -->

                            <label class="gl-input__wrapper js-input-tel">
                    <span class="gl-input__title  mod-simple-design">
                      Номер телефона:
                    </span>
                                <input type="tel"
                                       class="gl-input__input
                           js-phone-mask
                           
                           mod-simple-design
                           "
                                       placeholder="+7 (___) ___-__-__"
                                       name="top-up-account-tel-mobile"


                                       data-parsley-required=""





                                >
                            </label>
                        </div>
                        <div class="top-up-account__form-input">
                            <!--
                              ___Обязательные поля___
                              type - html-тип инута
                              name - обязательно префикс - род.компонент (н-р services-tel)
                              placeholder
                            
                              ___Необязательные поля___
                              required (true/false) - обязательно для заполнения
                              inputTitle - заголовок НАД инпутом
                              phoneMask (true/false) - маска для телефона
                              rubMask (true/false) - маска для ₽ в конце
                              minLength - деф-2
                              maxLength - деф-none
                              minNumber - минимальное число
                              maxNumber - максимальное число
                              id - обычный id, например для первого пароля
                              parsleyEqualto - для повторного пароля, проверяет совпадение с предыдущим (у которого указали id)
                              parsleyType - для валидации (н-р email)
                              isSimpleDesign - упрощенный дизайн
                              numberNoArrows - (true / false) - убрать стрелочки с number
                            -->

                            <label class="gl-input__wrapper js-input-text">
                    <span class="gl-input__title  mod-simple-design">
                      Сумма платежа: 
                    </span>
                                <input type="text"
                                       class="gl-input__input
                           
                           js-rub-mask
                           mod-simple-design
                           "
                                       placeholder="500₽"
                                       name="top-up-account-sum-mobile"


                                       data-parsley-required=""





                                >
                            </label>
                        </div>

                        <div class="top-up-account__form-radio-wrapper js-payment-method">
                            <div class="top-up-account__form-radio-caption">
                                Способ оплаты
                            </div>

                            <div class="top-up-account__form-radio-wrapper mod-card-pay">
                                <!--
                                  ___Обязательные поля___
                                  name - обязательно префикс - род.компонент (н-р services-tel)
                                
                                  ___Необязательные поля___
                                  required (true/false) - обязательно для заполнения
                                  caption - пояснение радио справа
                                  isChecked - нужен ли checked изначально
                                -->

                                <label class="radio__wrapper">
                                    <input type="radio"
                                           class="radio" name="top-up-account-radio-personal-account"
                                           value="card"
                                           data-parsley-required=""
                                           checked
                                    >
                                    <span class="radio__content"></span>
                                    <span class="radio__text">
                      Банковская карта
                    </span>
                                </label>

                                <div class="top-up-account__form-card-pay-wrapper">
                                    <div class="card-pay__container">
                                        <label class="card-pay__input-wrapper">
                                            <input type="text" class="card-pay__input js-pay-card-number-mask"
                                                   placeholder="XXXX XXXX XXXX XXXX">
                                        </label>
                                        <label class="card-pay__input-wrapper">
                                            <input type="text" class="card-pay__input js-pay-card-date-mask"
                                                   placeholder="ММ/ГГ">
                                        </label>
                                        <label class="card-pay__input-wrapper">
                                            <input type="text" class="card-pay__input js-pay-card-code-mask"
                                                   placeholder="CVC/CVV">
                                        </label>

                                        <div class="card-pay__payment-systems-wrapper">
                                            <img src="<?=BUILD_PATH?>img/common/pay/mastercard.svg" alt="" class="card-pay__payment-system">
                                            <img src="<?=BUILD_PATH?>img/common/pay/mir.svg" alt="" class="card-pay__payment-system">
                                            <img src="<?=BUILD_PATH?>img/common/pay/visa.svg" alt="" class="card-pay__payment-system">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="top-up-account__form-radio-wrapper">
                                <!--
                                  ___Обязательные поля___
                                  name - обязательно префикс - род.компонент (н-р services-tel)
                                
                                  ___Необязательные поля___
                                  required (true/false) - обязательно для заполнения
                                  caption - пояснение радио справа
                                  isChecked - нужен ли checked изначально
                                -->

                                <label class="radio__wrapper">
                                    <input type="radio"
                                           class="radio" name="top-up-account-radio-personal-account"
                                           value="google-pay"
                                           data-parsley-required=""
                                    >
                                    <span class="radio__content"></span>
                                    <span class="radio__text">
                      Google Pay
                    </span>
                                </label>
                            </div>

                            <div class="top-up-account__form-radio-wrapper mod-with-select">
                                <!--
                                  ___Обязательные поля___
                                  name - обязательно префикс - род.компонент (н-р services-tel)
                                
                                  ___Необязательные поля___
                                  required (true/false) - обязательно для заполнения
                                  caption - пояснение радио справа
                                  isChecked - нужен ли checked изначально
                                -->

                                <label class="radio__wrapper">
                                    <input type="radio"
                                           class="radio" name="top-up-account-radio-personal-account"
                                           value="other"
                                           data-parsley-required=""
                                    >
                                    <span class="radio__content"></span>
                                    <span class="radio__text">
                      
                    </span>
                                </label>

                                <!--
                                  __Обязательные поля__
                                  name - input name
                                  options - опции
                                
                                  __Необязательные поля__
                                  selectTitle - заголовок
                                  required - обязательно для заполнения
                                  placeholder
                                  isSearch - дизайн с лупой
                                  isSimpleDesign - упрощенный дизайн
                                  isBorderBottom - упрощенный дизайн
                                  isPayOther - селект для "Оплата Другое"
                                  isSmallChoicesList - укороченный список options
                                
                                  iconSearchRight (true/false)
                                  iconSearchLeft (true/false)
                                  iconSimLeft (true/false)
                                -->
                            </div>

                            <div class="top-up-account__form-btn-wrapper">
                                <button type="button" class="top-up-account__form-btn gl__main-btn">
                                    Пополнить
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="js-menu-tab-content gl__menu-tab-content" data-menu-personal-account>
                    <form data-need-validation data-parsley-validate data-parsley-focus="none"
                          class="top-up-account__form-wrapper">
                        <div class="top-up-account__form-input">
                            <!--
                              ___Обязательные поля___
                              type - html-тип инута
                              name - обязательно префикс - род.компонент (н-р services-tel)
                              placeholder
                            
                              ___Необязательные поля___
                              required (true/false) - обязательно для заполнения
                              inputTitle - заголовок НАД инпутом
                              phoneMask (true/false) - маска для телефона
                              rubMask (true/false) - маска для ₽ в конце
                              minLength - деф-2
                              maxLength - деф-none
                              minNumber - минимальное число
                              maxNumber - максимальное число
                              id - обычный id, например для первого пароля
                              parsleyEqualto - для повторного пароля, проверяет совпадение с предыдущим (у которого указали id)
                              parsleyType - для валидации (н-р email)
                              isSimpleDesign - упрощенный дизайн
                              numberNoArrows - (true / false) - убрать стрелочки с number
                            -->

                            <label class="gl-input__wrapper js-input-number">
                    <span class="gl-input__title  mod-simple-design">
                      Номер лицевого счёта
                    </span>
                                <input type="number"
                                       class="gl-input__input
                           
                           
                           mod-simple-design
                           mod-no-arrow"
                                       placeholder=""
                                       name="top-up-account-personal-account"


                                       data-parsley-required=""

                                       data-parsley-minlength="20"

                                       data-parsley-maxlength="20"



                                >
                            </label>
                        </div>
                        <div class="top-up-account__form-input">
                            <!--
                              ___Обязательные поля___
                              type - html-тип инута
                              name - обязательно префикс - род.компонент (н-р services-tel)
                              placeholder
                            
                              ___Необязательные поля___
                              required (true/false) - обязательно для заполнения
                              inputTitle - заголовок НАД инпутом
                              phoneMask (true/false) - маска для телефона
                              rubMask (true/false) - маска для ₽ в конце
                              minLength - деф-2
                              maxLength - деф-none
                              minNumber - минимальное число
                              maxNumber - максимальное число
                              id - обычный id, например для первого пароля
                              parsleyEqualto - для повторного пароля, проверяет совпадение с предыдущим (у которого указали id)
                              parsleyType - для валидации (н-р email)
                              isSimpleDesign - упрощенный дизайн
                              numberNoArrows - (true / false) - убрать стрелочки с number
                            -->

                            <label class="gl-input__wrapper js-input-text">
                    <span class="gl-input__title  mod-simple-design">
                      Сумма платежа: 
                    </span>
                                <input type="text"
                                       class="gl-input__input
                           
                           js-rub-mask
                           mod-simple-design
                           "
                                       placeholder="500₽"
                                       name="top-up-account-sum-personal-account"


                                       data-parsley-required=""





                                >
                            </label>
                        </div>
                        <div class="top-up-account__form-input">
                            <!--
                              ___Обязательные поля___
                              type - html-тип инута
                              name - обязательно префикс - род.компонент (н-р services-tel)
                              placeholder
                            
                              ___Необязательные поля___
                              required (true/false) - обязательно для заполнения
                              inputTitle - заголовок НАД инпутом
                              phoneMask (true/false) - маска для телефона
                              rubMask (true/false) - маска для ₽ в конце
                              minLength - деф-2
                              maxLength - деф-none
                              minNumber - минимальное число
                              maxNumber - максимальное число
                              id - обычный id, например для первого пароля
                              parsleyEqualto - для повторного пароля, проверяет совпадение с предыдущим (у которого указали id)
                              parsleyType - для валидации (н-р email)
                              isSimpleDesign - упрощенный дизайн
                              numberNoArrows - (true / false) - убрать стрелочки с number
                            -->

                            <label class="gl-input__wrapper js-input-email">
                    <span class="gl-input__title  mod-simple-design">
                      Ваш email*
                    </span>
                                <input type="email"
                                       class="gl-input__input
                           
                           
                           mod-simple-design
                           "
                                       placeholder="Ваш email"
                                       name="top-up-account-email-personal-account"


                                       data-parsley-required=""





                                >
                            </label>
                        </div>

                        <div class="top-up-account__form-radio-wrapper js-payment-method">
                            <div class="top-up-account__form-radio-caption">
                                Способ оплаты
                            </div>

                            <div class="top-up-account__form-radio-wrapper mod-card-pay">
                                <!--
                                  ___Обязательные поля___
                                  name - обязательно префикс - род.компонент (н-р services-tel)
                                
                                  ___Необязательные поля___
                                  required (true/false) - обязательно для заполнения
                                  caption - пояснение радио справа
                                  isChecked - нужен ли checked изначально
                                -->

                                <label class="radio__wrapper">
                                    <input type="radio"
                                           class="radio" name="top-up-account-radio-personal-account"
                                           value="card"
                                           data-parsley-required=""
                                           checked
                                    >
                                    <span class="radio__content"></span>
                                    <span class="radio__text">
                      Банковская карта
                    </span>
                                </label>

                                <div class="top-up-account__form-card-pay-wrapper">
                                    <div class="card-pay__container">
                                        <label class="card-pay__input-wrapper">
                                            <input type="text" class="card-pay__input js-pay-card-number-mask"
                                                   placeholder="XXXX XXXX XXXX XXXX">
                                        </label>
                                        <label class="card-pay__input-wrapper">
                                            <input type="text" class="card-pay__input js-pay-card-date-mask"
                                                   placeholder="ММ/ГГ">
                                        </label>
                                        <label class="card-pay__input-wrapper">
                                            <input type="text" class="card-pay__input js-pay-card-code-mask"
                                                   placeholder="CVC/CVV">
                                        </label>

                                        <div class="card-pay__payment-systems-wrapper">
                                            <img src="<?=BUILD_PATH?>img/common/pay/mastercard.svg" alt="" class="card-pay__payment-system">
                                            <img src="<?=BUILD_PATH?>img/common/pay/mir.svg" alt="" class="card-pay__payment-system">
                                            <img src="<?=BUILD_PATH?>img/common/pay/visa.svg" alt="" class="card-pay__payment-system">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="top-up-account__form-radio-wrapper">
                                <!--
                                  ___Обязательные поля___
                                  name - обязательно префикс - род.компонент (н-р services-tel)
                                
                                  ___Необязательные поля___
                                  required (true/false) - обязательно для заполнения
                                  caption - пояснение радио справа
                                  isChecked - нужен ли checked изначально
                                -->

                                <label class="radio__wrapper">
                                    <input type="radio"
                                           class="radio" name="top-up-account-radio-personal-account"
                                           value="google-pay"
                                           data-parsley-required=""
                                    >
                                    <span class="radio__content"></span>
                                    <span class="radio__text">
                      Google Pay
                    </span>
                                </label>
                            </div>

                            <div class="top-up-account__form-radio-wrapper mod-with-select">
                                <!--
                                  ___Обязательные поля___
                                  name - обязательно префикс - род.компонент (н-р services-tel)
                                
                                  ___Необязательные поля___
                                  required (true/false) - обязательно для заполнения
                                  caption - пояснение радио справа
                                  isChecked - нужен ли checked изначально
                                -->

                                <label class="radio__wrapper">
                                    <input type="radio"
                                           class="radio" name="top-up-account-radio-personal-account"
                                           value="other"
                                           data-parsley-required=""
                                    >
                                    <span class="radio__content"></span>
                                    <span class="radio__text">
                      
                    </span>
                                </label>

                                <!--
                                  __Обязательные поля__
                                  name - input name
                                  options - опции
                                
                                  __Необязательные поля__
                                  selectTitle - заголовок
                                  required - обязательно для заполнения
                                  placeholder
                                  isSearch - дизайн с лупой
                                  isSimpleDesign - упрощенный дизайн
                                  isBorderBottom - упрощенный дизайн
                                  isPayOther - селект для "Оплата Другое"
                                  isSmallChoicesList - укороченный список options
                                
                                  iconSearchRight (true/false)
                                  iconSearchLeft (true/false)
                                  iconSimLeft (true/false)
                                -->
                            </div>

                            <div class="top-up-account__form-btn-wrapper">
                                <button type="button" class="top-up-account__form-btn gl__main-btn">
                                    Пополнить
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="js-menu-tab-content gl__menu-tab-content" data-menu-landline-phone>
                    <form data-need-validation data-parsley-validate data-parsley-focus="none"
                          class="top-up-account__form-wrapper">
                        <div class="top-up-account__form-input">
                            <!--
                              ___Обязательные поля___
                              type - html-тип инута
                              name - обязательно префикс - род.компонент (н-р services-tel)
                              placeholder
                            
                              ___Необязательные поля___
                              required (true/false) - обязательно для заполнения
                              inputTitle - заголовок НАД инпутом
                              phoneMask (true/false) - маска для телефона
                              rubMask (true/false) - маска для ₽ в конце
                              minLength - деф-2
                              maxLength - деф-none
                              minNumber - минимальное число
                              maxNumber - максимальное число
                              id - обычный id, например для первого пароля
                              parsleyEqualto - для повторного пароля, проверяет совпадение с предыдущим (у которого указали id)
                              parsleyType - для валидации (н-р email)
                              isSimpleDesign - упрощенный дизайн
                              numberNoArrows - (true / false) - убрать стрелочки с number
                            -->

                            <label class="gl-input__wrapper js-input-tel">
                    <span class="gl-input__title  mod-simple-design">
                      Номер стационарного телефона:
                    </span>
                                <input type="tel"
                                       class="gl-input__input
                           js-phone-mask
                           
                           mod-simple-design
                           "
                                       placeholder="+7 (___) ___-__-__"
                                       name="top-up-account-landline-tel-mobile"


                                       data-parsley-required=""





                                >
                            </label>
                        </div>
                        <div class="top-up-account__form-input">
                            <!--
                              ___Обязательные поля___
                              type - html-тип инута
                              name - обязательно префикс - род.компонент (н-р services-tel)
                              placeholder
                            
                              ___Необязательные поля___
                              required (true/false) - обязательно для заполнения
                              inputTitle - заголовок НАД инпутом
                              phoneMask (true/false) - маска для телефона
                              rubMask (true/false) - маска для ₽ в конце
                              minLength - деф-2
                              maxLength - деф-none
                              minNumber - минимальное число
                              maxNumber - максимальное число
                              id - обычный id, например для первого пароля
                              parsleyEqualto - для повторного пароля, проверяет совпадение с предыдущим (у которого указали id)
                              parsleyType - для валидации (н-р email)
                              isSimpleDesign - упрощенный дизайн
                              numberNoArrows - (true / false) - убрать стрелочки с number
                            -->

                            <label class="gl-input__wrapper js-input-text">
                    <span class="gl-input__title  mod-simple-design">
                      Сумма платежа: 
                    </span>
                                <input type="text"
                                       class="gl-input__input
                           
                           js-rub-mask
                           mod-simple-design
                           "
                                       placeholder="500₽"
                                       name="top-up-account-sum-landline-tel"


                                       data-parsley-required=""





                                >
                            </label>
                        </div>
                        <div class="top-up-account__form-input">
                            <!--
                              ___Обязательные поля___
                              type - html-тип инута
                              name - обязательно префикс - род.компонент (н-р services-tel)
                              placeholder
                            
                              ___Необязательные поля___
                              required (true/false) - обязательно для заполнения
                              inputTitle - заголовок НАД инпутом
                              phoneMask (true/false) - маска для телефона
                              rubMask (true/false) - маска для ₽ в конце
                              minLength - деф-2
                              maxLength - деф-none
                              minNumber - минимальное число
                              maxNumber - максимальное число
                              id - обычный id, например для первого пароля
                              parsleyEqualto - для повторного пароля, проверяет совпадение с предыдущим (у которого указали id)
                              parsleyType - для валидации (н-р email)
                              isSimpleDesign - упрощенный дизайн
                              numberNoArrows - (true / false) - убрать стрелочки с number
                            -->

                            <label class="gl-input__wrapper js-input-email">
                    <span class="gl-input__title  mod-simple-design">
                      Ваш email*
                    </span>
                                <input type="email"
                                       class="gl-input__input
                           
                           
                           mod-simple-design
                           "
                                       placeholder="Ваш email"
                                       name="top-up-account-email-landline-tel"


                                       data-parsley-required=""





                                >
                            </label>
                        </div>

                        <div class="top-up-account__form-radio-wrapper js-payment-method">
                            <div class="top-up-account__form-radio-caption">
                                Способ оплаты
                            </div>

                            <div class="top-up-account__form-radio-wrapper mod-card-pay">
                                <!--
                                  ___Обязательные поля___
                                  name - обязательно префикс - род.компонент (н-р services-tel)
                                
                                  ___Необязательные поля___
                                  required (true/false) - обязательно для заполнения
                                  caption - пояснение радио справа
                                  isChecked - нужен ли checked изначально
                                -->

                                <label class="radio__wrapper">
                                    <input type="radio"
                                           class="radio" name="top-up-account-radio-personal-account"
                                           value="card"
                                           data-parsley-required=""
                                           checked
                                    >
                                    <span class="radio__content"></span>
                                    <span class="radio__text">
                      Банковская карта
                    </span>
                                </label>

                                <div class="top-up-account__form-card-pay-wrapper">
                                    <div class="card-pay__container">
                                        <label class="card-pay__input-wrapper">
                                            <input type="text" class="card-pay__input js-pay-card-number-mask"
                                                   placeholder="XXXX XXXX XXXX XXXX">
                                        </label>
                                        <label class="card-pay__input-wrapper">
                                            <input type="text" class="card-pay__input js-pay-card-date-mask"
                                                   placeholder="ММ/ГГ">
                                        </label>
                                        <label class="card-pay__input-wrapper">
                                            <input type="text" class="card-pay__input js-pay-card-code-mask"
                                                   placeholder="CVC/CVV">
                                        </label>

                                        <div class="card-pay__payment-systems-wrapper">
                                            <img src="<?=BUILD_PATH?>img/common/pay/mastercard.svg" alt="" class="card-pay__payment-system">
                                            <img src="<?=BUILD_PATH?>img/common/pay/mir.svg" alt="" class="card-pay__payment-system">
                                            <img src="<?=BUILD_PATH?>img/common/pay/visa.svg" alt="" class="card-pay__payment-system">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="top-up-account__form-radio-wrapper">
                                <!--
                                  ___Обязательные поля___
                                  name - обязательно префикс - род.компонент (н-р services-tel)
                                
                                  ___Необязательные поля___
                                  required (true/false) - обязательно для заполнения
                                  caption - пояснение радио справа
                                  isChecked - нужен ли checked изначально
                                -->

                                <label class="radio__wrapper">
                                    <input type="radio"
                                           class="radio" name="top-up-account-radio-personal-account"
                                           value="google-pay"
                                           data-parsley-required=""
                                    >
                                    <span class="radio__content"></span>
                                    <span class="radio__text">
                      Google Pay
                    </span>
                                </label>
                            </div>

                            <div class="top-up-account__form-radio-wrapper mod-with-select">
                                <!--
                                  ___Обязательные поля___
                                  name - обязательно префикс - род.компонент (н-р services-tel)
                                
                                  ___Необязательные поля___
                                  required (true/false) - обязательно для заполнения
                                  caption - пояснение радио справа
                                  isChecked - нужен ли checked изначально
                                -->

                                <label class="radio__wrapper">
                                    <input type="radio"
                                           class="radio" name="top-up-account-radio-personal-account"
                                           value="other"
                                           data-parsley-required=""
                                    >
                                    <span class="radio__content"></span>
                                    <span class="radio__text">
                      
                    </span>
                                </label>

                                <!--
                                  __Обязательные поля__
                                  name - input name
                                  options - опции
                                
                                  __Необязательные поля__
                                  selectTitle - заголовок
                                  required - обязательно для заполнения
                                  placeholder
                                  isSearch - дизайн с лупой
                                  isSimpleDesign - упрощенный дизайн
                                  isBorderBottom - упрощенный дизайн
                                  isPayOther - селект для "Оплата Другое"
                                  isSmallChoicesList - укороченный список options
                                
                                  iconSearchRight (true/false)
                                  iconSearchLeft (true/false)
                                  iconSimLeft (true/false)
                                -->
                            </div>

                            <div class="top-up-account__form-btn-wrapper">
                                <button type="button" class="top-up-account__form-btn gl__main-btn">
                                    Пополнить
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://api-maps.yandex.ru/2.1/?apikey=978d9dde-738d-4b87-8d8a-1de67b511402&lang=ru_RU"
        type="text/javascript"></script>
</div>
</body>
</html>