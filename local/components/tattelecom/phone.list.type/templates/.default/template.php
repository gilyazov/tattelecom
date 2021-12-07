<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>

<div class="phone-list__filter-container">
    <div class="phone-list__filter-wrapper">
        <?foreach ($arResult['TYPES'] as $arType):?>
            <label class="phone-list__filter-item-wrapper">
                <input type="radio" value="<?=$arType['id']?>" class="phone-list__input" name="phone-list-type">
                <span class="phone-list__filter-item-content"><?=$arType['name']?></span>
            </label>
        <?endforeach;?>
    </div>
</div>