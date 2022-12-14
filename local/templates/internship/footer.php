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
    <div class="modal js-modal" id="callback-success">
        <div class="modal__inner">
            <button class="modal__close js-close-modal">
                <svg width="14" height="14" aria-hidden="true" class="icon-cross">
                    <use xlink:href="#cross"></use>
                </svg>
            </button>
            <h3 class="modal__heading">
                Спасибо!
            </h3>
            <img src="/local/js/internship/letai/build/img/heart.svg" alt="" class="modal__icon">
            <div class="modal__text">
                Ваша завка принята в обработку, Мы свяжемся с вами в ближайшее время
            </div>
        </div>
    </div>
    <style>
        .ie-placeholder {
            z-index: 4000;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #202020;
            color: white;
            display: flex;
            flex-direction: column;
            text-align: center;

        }
        .ie-placeholder__message {
            font-size: 2rem;
            line-height: 1.2;
            font-weight: 500;
            margin: auto;
        }
        @supports (display: grid) {
            .ie-placeholder {
                display: none;
            }
        }
    </style>
    <div class="ie-placeholder">
        <div class="ie-placeholder__message">
            Извините, ваш браузер не поддерживается
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
