<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
?>
<form class="application__form form" action="" data-need-validation="data-need-validation">
    <div class="input js-validation-wrapper">
        <input class="input__control" type="text" name="firstname" placeholder="Как к Вам обращаться?" required="required"/>
    </div>
    <div class="input js-validation-wrapper">
        <input class="input__control js-phone-mask" type="text" name="phone" placeholder="+7(___)___-__-__" required="required"/>
    </div>
    <div class="cheackbox">
        <input class="visually-hidden" type="checkbox" id="checkbox-1" required="required"/>
        <label class="checkbox__container" for="checkbox-1">
            <span class="checkbox__control">Я согласен на <a href="/app/personaldata/" target="_blank">обработку своих персональных данных</a></span>
        </label>
    </div>
    <button class="form__button button" type="submit">Отправить заявку</button>
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