<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>

<div class="phone-list__filter-container">
    <div class="phone-list__filter-wrapper">
        <?foreach ($arResult['TYPES'] as $key => $arType):?>
            <label class="phone-list__filter-item-wrapper">
                <input
                        type="radio" value="<?=$arType['id']?>"
                        <?=(!$_REQUEST['type'] && $key == 0 ? 'checked' : '')?>
                        class="phone-list__input" name="phone-list-type">
                <span class="phone-list__filter-item-content"><?=$arType['name']?></span>
            </label>
        <?endforeach;?>
    </div>
</div>