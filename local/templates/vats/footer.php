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
<?if(SITE_ID != "s7"):?>
    <div class="modal">
    <div class="modal__container modal--tariffs" data-target="modal-tariff">
        <div class="modal__content">
            <button class="button-reset modal__close-btn modal-close" type="button"><span></span><span></span>
            </button>
            <div class="modal__legend">ВАТС 6</div>
            <div class="modal__price">990 ₽</div>
            <ul class="modal__list">
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/build/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/build/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/build/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/build/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/build/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/build/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/build/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/build/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/build/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/build/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/build/assets/images/modal/icon-1.svg" alt="">
                    <div class="modal__list-item-text">Перехват, перевод вызовов dfwe fwefwefwe</div>
                </li>
                <li class="modal__list-item">
                    <img class="modal__list-item-img" src="/local/js/vatc/build/assets/images/modal/icon-1.svg" alt="">
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
            <div class="modal__title">Скачать презентацию</div>
            <?$APPLICATION->IncludeComponent(
                "bitrix:iblock.element.add.form",
                "modal__form",
                Array(
                    "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
                    "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
                    "CUSTOM_TITLE_DETAIL_PICTURE" => "",
                    "CUSTOM_TITLE_DETAIL_TEXT" => "",
                    "CUSTOM_TITLE_IBLOCK_SECTION" => "",
                    "CUSTOM_TITLE_NAME" => "Ваше имя",
                    "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
                    "CUSTOM_TITLE_PREVIEW_TEXT" => "",
                    "CUSTOM_TITLE_TAGS" => "",
                    "DEFAULT_INPUT_SIZE" => "30",
                    "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
                    "ELEMENT_ASSOC" => "CREATED_BY",
                    "GROUPS" => array("2"),
                    "IBLOCK_ID" => "67",
                    "IBLOCK_TYPE" => "forms",
                    "LEVEL_LAST" => "Y",
                    "LIST_URL" => "",
                    "MAX_FILE_SIZE" => "0",
                    "MAX_LEVELS" => "100000",
                    "MAX_USER_ENTRIES" => "100000",
                    "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
                    "PROPERTY_CODES" => ["NAME", "299", "300", "310"],
                    "PROPERTY_CODES_REQUIRED" => ["NAME", "299", "300"],
                    "RESIZE_IMAGES" => "N",
                    "SEF_MODE" => "N",
                    "STATUS" => "ANY",
                    "STATUS_NEW" => "N",
                    "USER_MESSAGE_ADD" => "",
                    "USER_MESSAGE_EDIT" => "",
                    "USE_CAPTCHA" => "N"
                )
            );?>
        </div>
    </div>
    <div class="modal__container modal--success" data-target="modal-success">
        <div class="modal__content">
            <button class="button-reset modal__close-btn modal-close" type="button"><span></span><span></span>
            </button>
            <div class="modal__title">Ваша заявка успешно отправлена!<br>Мы перезвоним Вам в ближайшее время</div>
            <?if(SITE_ID == "s6"):?>
                <div class="intro__btns" style="text-align: center;">
                    <a class="intro__btn button" href="/upload/medialibrary/7c6/eo9k23zs8amqj9z6b3l12nlgdzhk3hdy/Prezentatsiya-VATS.pptx.pdf" target="_blank" download="">Скачать презентацию</a>
                </div>
            <?endif;?>
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
<?endif;?>
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
