<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
?>
<form class="has-questions__form js-form-validation form" action="">
    <div class="has-questions__form-fields">
        <div class="has-questions__form-field">
            <div class="has-questions__form-input-wrapper">
                <input type="text" class="has-questions__form-input" placeholder="Как к Вам обращаться?"
                       name="firstname" required="">
            </div>
        </div>
        <div class="has-questions__form-field">
            <div class="has-questions__form-input-wrapper">
                <input type="tel" class="has-questions__form-input" placeholder="+7(___)___-__-__"
                       name="phone" required="">
            </div>
        </div>
    </div>
    <div class="has-questions__form-policy">
        <label class="has-questions__form-policy-checkbox">
            <input type="checkbox" name="your-policy" class="has-questions__form-policy-checkbox-input"
                   value="Y" required="">
            <span class="has-questions__form-policy-checkbox-mark">

              </span>
            <span class="has-questions__form-policy-checkbox-text">
                  Отправляя заявку, я соглашаюсь на <a href="/app/personaldata/" target="_blank">обработку своих персональных данных</a>
              </span>
        </label>
    </div>
    <button class="has-questions__form-submit" type="submit">
        Отправить заявку
    </button>

    <input type="hidden" name="param_referer" value="<?=$APPLICATION->GetTitle()?>">
    <input type="hidden" name="recaptcha_response" value="">
</form>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallbackRecap&render=<?=GoogleReCaptcha::PUBLIC_KEY?>" async defer></script>
<script>
    var onloadCallbackRecap = function() {
        grecaptcha.ready(function () {
            grecaptcha.execute('<?=GoogleReCaptcha::PUBLIC_KEY?>', { action: 'contact_callback' }).then(function (token) {
                /*var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.dataset.value = token;*/

                document.querySelector('input[name=recaptcha_response]').value = token;

            });
        });
    };
</script>
<!--<div id="recaptchaResponse" data-value=""></div>-->