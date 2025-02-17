<?php
use \Bitrix\Landing\Manager;
use \Bitrix\Landing\Assets;
use \Bitrix\Main\Loader;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

if (!Loader::includeModule('landing'))
{
    return;
}

$assets = Assets\Manager::getInstance();
$assets->addAsset('landing_auto_font_scale');

$APPLICATION->ShowProperty('FooterJS');
?>
<? include_once(DEFAULT_PATH . 'include/'.(SITE_ID == 's2' ? 'business/' : '').'modal.php');?>

<?
$page = $APPLICATION->GetCurPage(); // результат - /ru/index.php
if ($page == "/domofon/"):
?>
    <!-- Виджет для просмотра видео -->
    <div class="video__widget-container">
        <button type="button" class="video__widget-close" onclick="this.parentElement.style.display='none'">
            <svg width="32" height="32" aria-hidden="true" class="modal__close-icon">
                <use xlink:href="#close"></use>
            </svg>
        </button>
        <div class="video__widget-content">
            <video autoplay muted controls>
                <source src="/local/js/tattelecom/build/assets/videos/domofon.mp4" type="video/mp4">
                Ваш браузер не поддерживает видео.
            </video>
        </div>
    </div>

    <style>
        .video__widget-container {
            position: fixed;
            z-index: 9999999;
            right: 5rem; /* отступ справа */
            bottom: 5rem; /* отступ снизу */
            max-width: 20rem; /* максимальная ширина виджета */
        }
        .video__widget-content{
            transition: border-radius 0.3s ease-out, box-shadow 0.2s ease-out, background-color 0.3s ease, border-color 0.3s ease;
            border-radius: 10px;
            z-index: 100;
            box-sizing: border-box;
            background: rgba(0, 0, 0, 0.3);
            border: 3px solid rgba(255, 255, 255, 1);
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        }
        .video__widget-content video{
            width: 100%;
            border-radius: 10px;
        }
        .video__widget-close {
            position: absolute;
            top: -1.5rem;
            right: -1.5rem;
            background: white;
        }
    </style>
<?endif;?>

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
<?$APPLICATION->IncludeComponent(
    "tattelecom:cookienotice",
    "",
    Array(
        "NOTICE_BUTTON" => "Принять",
        "NOTICE_TEXT" => "Продолжая использовать наш сайт вы соглашаетесь на сбор персональных данных, осуществляемой согласно <a href=\"/upload/iblock/192/q8uziupqd1cnr3xuu75gl33do7hyjqpz/Politika.docx\">политике ПАО «Таттелеком» в отношении обработки персональных данных»</a>."
    )
);?>

<script src="https://api-maps.yandex.ru/2.1/?apikey=978d9dde-738d-4b87-8d8a-1de67b511402&lang=ru_RU"
        type="text/javascript"></script>
</div>

<?$APPLICATION->ShowProperty('BeforeBodyClose');?>
</body>
</html>