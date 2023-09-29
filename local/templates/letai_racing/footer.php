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


<footer class="page-footer">
    <div class="page-footer__inner">
        <div class="page-footer__top-row">
            <a href="<?=SITE_DIR?>" class="page-footer__letai-racing">
                <img src="/local/js/letai-racing/dist/images/letai-racing-white.webp" alt="" class="page-footer__letai-racing-image">
            </a>
            <a href="/" class="page-footer__letai">
                <img src="/local/js/letai-racing/dist/images/letai-white.svg" alt="" class="page-footer__letai-image">
            </a>
            <a href="https://kazandigitalweek.com/ru/site" target="_blank" class="page-footer__digital-week">
                <img src="/local/js/letai-racing/dist/images/digital-week-white.svg" alt="" class="page-footer__digital-week-image">
            </a>
        </div>
        <div class="page-footer__bottom-row">
            <nav class="page-footer__nav">
                <ul>
                    <li>
                        <a href="#about">
                            О мероприятии
                        </a>
                    </li>
                    <li>
                        <a href="#competitions">
                            Соревновательные направления
                        </a>
                    </li>
                    <li>
                        <a href="#competence">
                            Для кого
                        </a>
                    </li>
                    <li>
                        <a href="#prizes">
                            Призовой фонд
                        </a>
                    </li>
                    <li>
                        <a href="#why">
                            Почему ии
                        </a>
                    </li>
                    <li>
                        <a href="#location">
                            Локация
                        </a>
                    </li>
                </ul>
            </nav>
            <a href="/policy.php" class="page-footer__policy">
                Политика Конфиденциальности
            </a>
            <a href="#application" class="page-footer__register">
                Регистрация
            </a>
        </div>
    </div>
</footer>
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
