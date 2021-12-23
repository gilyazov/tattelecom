<?php

foreach ($arResult["ITEMS"] as &$arItem){
    if ($arItem['TYPE'] === 'SELECT'){

        foreach ($arItem['LIST'] as $id => $name){
            $name = ($id ? $name : 'Выберите страну');
            $options .= '
                <option 
                    value="'.$id.'"
                    '.(!$id ? 'placeholder' : '').'
                    '.($arItem['INPUT_VALUE'] == $id ? ' selected=""' : '').'>
                    '.$name.'
                </option>
            ';
        }

        $arItem['INPUT'] = '
            <div class="roaming-without-worries__selects-wrapper">
                <div class="select">
                    <div class="select__container mod-simple-design mod-padding-left" id="country-select">
                        <svg width="16" height="16" aria-hidden="true" class="select__search-icon mod-left">
                            <use xlink:href="#search"></use>
                        </svg>
                        <label class="select__wrapper">
                            <select id="'.$arItem['INPUT_NAME'].'" name="'.$arItem['INPUT_NAME'].'" class="gl__select js-custom-select" data-parsley-class-handler="#country-select" data-parsley-required="">
                                '.$options.'
                            </select>
                        </label>
                    </div>
                </div>
            </div>
        ';
    }

    if ($arItem['TYPE'] === 'RADIO'){
        foreach ($arItem['LIST'] as $id => $name){
            if (!$id){
                continue;
            }

            $checkbox .= '
                <div class="roaming-without-worries__checkbox">
                    <label class="checkbox__wrapper">
                        <input 
                            value="'.$id.'"
                            '.($arItem['INPUT_VALUE'] == $id ? ' checked=""' : '').'
                            type="radio" class="checkbox" 
                            name="'.$arItem['INPUT_NAME'].'" data-parsley-required="">
                        <span class="checkbox__content mod-main">
                            <svg width="16" height="16" aria-hidden="true" class="checkbox__content-icon">
                                <use xlink:href="#checkbox-checked"></use>
                            </svg>
                        </span>
                        <span class="checkbox__text mod-main">'.$name.'</span>
                    </label>
                </div>
            ';
        }

        $arItem['INPUT'] = '
            <div class="roaming-without-worries__checkbox-wrapper">
                '.$checkbox.'
            </div>
        ';
    }
}