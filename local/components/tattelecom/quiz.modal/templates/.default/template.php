<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var string $componentPath */
/** @var array $arResult */
//\Bitrix\Main\UI\Extension::load("ui.inputmask");
if (!$USER->IsAdmin()){
    return false;
}
?>
<?foreach ($arResult["QUESTION"] as $key => $arItem):?>
    <div class="quiz-modal__question<?=($key != 0 ? " hidden" : "")?>">
        <form action="" method="post" class="quiz-modal__form">
            <input type="hidden" name="index" value="<?=($key+1)?>">
            <input type="hidden" name="question" value="<?=$arItem["ID"]?>">
            <div class="quiz-modal__steps">
                Этап <?=($key + 1)?> из <?=count($arResult["QUESTION"])?>
            </div>
            <h3 class="quiz-modal__greeting-secondary-heading">
                <?=$arItem["TITLE"]?>
            </h3>
            <div class="quiz-modal__radios">
                <?foreach ($arItem["ANSWER"] as $arAnswer):?>
                    <label class="quiz-modal__radio">
                        <input type="radio" name="question-<?=$arItem["ID"]?>" class="quiz-modal__radio-input" value="<?=$arAnswer["ID"]?>" required>
                        <span class="quiz-modal__radio-mark">

                        </span>
                        <span class="quiz-modal__radio-text">
                            <?=$arAnswer["NAME"]?>
                        </span>
                    </label>
                <?endforeach;?>
            </div>
            <div class="quiz-modal__bullets">
                <?foreach ($arResult["QUESTION"] as $keyBullet => $arItem):?>
                    <a href="#" class="quiz-modal__bullet<?if($key == $keyBullet):?> active<?endif;?>">

                    </a>
                <?endforeach;?>
            </div>
            <div class="quiz-modal__bottom">
                <div class="quiz-modal__time">
                    00:10
                </div>
                <button class="quiz-modal__submit" type="submit">
                    Ответить
                </button>
            </div>
        </form>
    </div>
<?endforeach;?>