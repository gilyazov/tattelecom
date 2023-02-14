<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
$this->addExternalJS($componentPath . '/script.js');
?>
<form class="application__form mod-no-answer js-potok-form" data-need-validation data-parsley-validate data-parsley-focus="none">

    <div class="application__form-item mod-no-answer">
        <label class="gl-input__wrapper js-input-text">
            <input type="text" class="gl-input__input" placeholder="Ваше имя" name="firstname" data-parsley-required="">
        </label>
    </div>
    <div class="application__form-item mod-no-answer">
        <label class="gl-input__wrapper js-input-tel">
            <input type="tel" class="gl-input__input js-phone-mask" placeholder="+7 (___) ___-__-__" name="phone" data-parsley-required="">
        </label>
    </div>
    <div class="application__form-item mod-no-answer">
        <label>
            <textarea class="gl-input__input mod-textarea" placeholder="Ваш вопрос" name="param_comment" data-parsley-required="" data-parsley-minlength="2"></textarea>
        </label>
    </div>
    <label class="checkbox__wrapper">
        <input type="checkbox" class="checkbox" name="modal-callback-agree" data-parsley-required="" data-parsley-multiple="modal-callback-agree">
        <span class="checkbox__content mod-modal">
                <svg width="16" height="16" aria-hidden="true" class="checkbox__content-icon">
                    <use xlink:href="#checkbox-checked"></use>
                </svg>
            </span>
        <span class="checkbox__text">Я согласен на <a href="/app/personaldata/" target="_blank">обработку своих персональных данных</a></span>
    </label>
    <div class="application__btn-wrapper mod-no-answer">
        <button type="submit" class="gl__main-btn application__btn">Отправить</button>

        <input type="hidden" name="param_referer" value="<?=$APPLICATION->GetTitle()?>">
    </div>

    <span class="checkbox__text">Нажимая кнопку «Отправить», вы принимаете <b>условия пользовательского соглашения</b> и <a href="/policy.php"><b>политику конфиденциальности</b></a>.</span>
</form>