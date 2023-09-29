<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use Bitrix\Landing\Assets;
use Bitrix\Main\Loader;
use Bitrix\Main\UI\Extension;

/** @var \CMain $APPLICATION */

if (!Loader::includeModule('landing'))
{
	return;
}

$assets = Assets\Manager::getInstance();
$assets->addAsset('landing_auto_font_scale');

$APPLICATION->ShowProperty('FooterJS');
?>


</div>
<div class="modal">
    <div class="modal__container modal--tariffs" data-target="modal-tariff">
        <div class="modal__content">
            <button class="button-reset modal__close-btn modal-close" type="button"><span></span><span></span>
            </button>
            <div class="modal__legend">ВАТС 6</div>
            <div class="modal__price">990 ₽</div>
            <ul class="modal__list">
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
            </ul>
            <button class="modal__button button">Попробовать</button>
        </div>
    </div>
    <div class="modal__container modal--application" data-target="modal-application">
        <div class="modal__content">
            <button class="button-reset modal__close-btn modal-close" type="button"><span></span><span></span>
            </button>
            <div class="modal__title">Оставьте заявку</div>
            <form class="modal__form form" action="" data-need-validation>
                <div class="input js-validation-wrapper">
                    <input class="input__control" type="text" placeholder="Как к Вам обращаться?" required>
                </div>
                <div class="input js-validation-wrapper">
                    <input class="input__control js-phone-mask" type="text" placeholder="+7(___)___-__-__" required>
                </div>
                <div class="cheackbox">
                    <input class="visually-hidden" type="checkbox" id="checkbox-2" required>
                    <label class="checkbox__container" for="checkbox-2"><span class="checkbox__control">Отправляя заявку, я соглашаюсь на обработку персональных данных</span>
                    </label>
                </div>
                <button class="form__button button" type="submit">Отправить заявку</button>
            </form>
        </div>
    </div>
    <div class="modal__container modal--success" data-target="modal-success">
        <div class="modal__content">
            <button class="button-reset modal__close-btn modal-close" type="button"><span></span><span></span>
            </button>
            <div class="modal__title">Ваша заявка успешно отправлена!<br>Мы перезвоним Вам в течение получаса</div>
        </div>
    </div>
    <div class="modal__container modal--error" data-target="modal-error">
        <div class="modal__content">
            <button class="button-reset modal__close-btn modal-close" type="button"><span></span><span></span>
            </button>
            <div class="modal__title">Ваша заявка успешно отправлена!<br>Мы перезвоним Вам в течение получаса</div>
        </div>
    </div>
</div>
<?php $APPLICATION->ShowProperty('BeforeBodyClose');?>

<?php if (\Bitrix\Landing\Connector\Mobile::isMobileHit()):
	Extension::load(['mobile_tools']);
	?>
<script type="text/javascript">

	if (typeof BXMPage !== 'undefined')
	{
		BXMPage.TopBar.title.setText('<?= $APPLICATION->getTitle();?>');
		BXMPage.TopBar.title.show();
	}

	document.addEventListener('DOMContentLoaded', function ()
	{
		BX.bindDelegate(document.body, 'click', {tagName: 'A'}, function (event)
		{
			if (this.hostname === document.location.hostname)
			{
				let func = BX.MobileTools.resolveOpenFunction(this.href);

				if (func)
				{
					func();
					return BX.PreventDefault(event);
				}
			}
		});
	}, false);
</script>
<?php endif?>

</body>
</html>
