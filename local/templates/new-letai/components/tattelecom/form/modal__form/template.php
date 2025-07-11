<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
?>
<form class="modal__form js-form-validation" action="">
    <div class="modal__form-fields">
        <div class="modal__form-field">
            <div class="modal__form-input-wrapper">
                <input type="text" class="modal__form-input" placeholder="Как к Вам обращаться?"
                       name="firstname" required="">
            </div>
        </div>
        <div class="modal__form-field">
            <div class="modal__form-input-wrapper">
                <input type="tel" class="modal__form-input" placeholder="+7(___)___-__-__"
                       name="phone" required="">
            </div>
        </div>
    </div>
    <div class="modal__form-policy">
        <label class="modal__form-policy-checkbox">
            <input type="checkbox" name="policy" class="modal__form-policy-checkbox-input" value="Y">
            <span class="modal__form-policy-checkbox-mark">

                            </span>
            <span class="modal__form-policy-checkbox-text">
                  Отправляя заявку, я соглашаюсь на <a href="/app/personaldata/" target="_blank">обработку своих персональных данных</a>
              </span>
        </label>
    </div>
    <button class="modal__form-submit" type="submit">
        Отправить заявку
    </button>

    <input type="hidden" name="param_referer" value="<?=$APPLICATION->GetTitle()?>">
    <input type="hidden" name="recaptcha_response" value="">
</form>