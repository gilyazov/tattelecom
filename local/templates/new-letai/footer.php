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


<div class="win-modal js-modal" id="win-modal">
    <div class="win-modal__inner">
        <button class="win-modal__close js-modal-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M13.4343 15.9346L23.036 25.5362L25.9711 22.601L16.3695 12.9994L25.8329 3.53599L22.8977 0.600813L13.4343 10.0642L3.83361 0.463507L0.898437 3.39868L10.4992 12.9994L1.03504 22.4635L3.97021 25.3987L13.4343 15.9346Z" />
            </svg>
        </button>
        <h3 class="win-modal__heading">
            Ура! Вы выиграли!
        </h3>
        <div class="win-modal__prize">

            <div class="win-modal__prize-icon">
                <svg width="14" height="14" aria-hidden="true" viewBox="0 0 14 14">
                    <use xlink:href="#cup"></use>
                </svg>
            </div>
            <div class="win-modal__prize-name">
                Кружка!
            </div>
        </div>
        <div class="win-modal__text">
            В ближайшее время с Вами свяжутся по электронной почте.
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
