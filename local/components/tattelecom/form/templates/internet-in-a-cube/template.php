<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
?>
<form action="" class="application__form form" data-need-validation="data-need-validation">
    <input type="hidden" name="param_referer" value="<?=$APPLICATION->GetTitle()?>">

    <div class="input js-validation-wrapper">
        <input type="text"
               class="input__control"
               placeholder="Ваше имя"
               name="firstname"
               value=""
               required="">
    </div>

    <div class="input js-validation-wrapper">
        <input type="tel"
               class="input__control js-phone-mask"
               placeholder="+7 (___) ___-__-__"
               name="phone"
               value=""
               required="">
    </div>

    <div class="cheackbox">
        <input class="visually-hidden" type="checkbox" id="checkbox-1" required>
        <label class="checkbox__container" for="checkbox-1">
            <span class="checkbox__control">Отправляя заявку, я соглашаюсь на обработку персональных данных</span>
        </label>
    </div>
    <button class="form__button button" type="submit">Отправить заявку</button>
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