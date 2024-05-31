<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(false);
//$this->addExternalJS($templateFolder . "/jquery.form.min.js");

if (!empty($arResult["ERRORS"])):
    global $APPLICATION;
    $APPLICATION->RestartBuffer();
    echo \Bitrix\Main\Web\Json::encode(['errors' => $arResult["ERRORS"]]);
    die();
endif;

if ($arResult["MESSAGE"] <> ''):?>
	<?ShowNote($arResult["MESSAGE"])?>
<?endif?>

<form name="iblock_add"
      class="modal__form form"
      action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data" data-need-validation>

    <input type="hidden" name="PROPERTY[310]" value="286" id="property_286">
    <?if (is_array($arResult["PROPERTY_LIST"]) && !empty($arResult["PROPERTY_LIST"])):?>
        <?foreach ($arResult["PROPERTY_LIST"] as $propertyID):?>
            <?if (intval($propertyID) > 0):?>
                <?$placeholder = $arResult["PROPERTY_LIST_FULL"][$propertyID]["NAME"]?>
            <?else:?>
                <?$placeholder = !empty($arParams["CUSTOM_TITLE_".$propertyID]) ? $arParams["CUSTOM_TITLE_".$propertyID] : GetMessage("IBLOCK_FIELD_".$propertyID)?>
            <?endif?>

            <?
                if (intval($propertyID) > 0)
                {
                    if (
                        $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] == "T"
                        &&
                        $arResult["PROPERTY_LIST_FULL"][$propertyID]["ROW_COUNT"] == "1"
                    )
                        $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] = "S";
                    elseif (
                        (
                            $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] == "S"
                            ||
                            $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] == "N"
                        )
                        &&
                        $arResult["PROPERTY_LIST_FULL"][$propertyID]["ROW_COUNT"] > "1"
                    )
                        $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] = "T";
                }
                elseif (($propertyID == "TAGS") && CModule::IncludeModule('search'))
                    $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] = "TAGS";

                if ($arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE"] == "Y")
                {
                    $inputNum = ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0) ? count($arResult["ELEMENT_PROPERTIES"][$propertyID]) : 0;
                    $inputNum += $arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE_CNT"];
                }
                else
                {
                    $inputNum = 1;
                }

                if($arResult["PROPERTY_LIST_FULL"][$propertyID]["GetPublicEditHTML"])
                    $INPUT_TYPE = "USER_TYPE";
                else
                    $INPUT_TYPE = $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"];

                        switch ($INPUT_TYPE):
                            case "USER_TYPE":
                                for ($i = 0; $i<$inputNum; $i++)
                                {
                                    if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0)
                                    {
                                        $value = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["~VALUE"] : $arResult["ELEMENT"][$propertyID];
                                        $description = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["DESCRIPTION"] : "";
                                    }
                                    elseif ($i == 0)
                                    {
                                        $value = intval($propertyID) <= 0 ? "" : $arResult["PROPERTY_LIST_FULL"][$propertyID]["DEFAULT_VALUE"];
                                        $description = "";
                                    }
                                    else
                                    {
                                        $value = "";
                                        $description = "";
                                    }
                                    echo call_user_func_array($arResult["PROPERTY_LIST_FULL"][$propertyID]["GetPublicEditHTML"],
                                        array(
                                            $arResult["PROPERTY_LIST_FULL"][$propertyID],
                                            array(
                                                "VALUE" => $value,
                                                "DESCRIPTION" => $description,
                                            ),
                                            array(
                                                "VALUE" => "PROPERTY[".$propertyID."][".$i."][VALUE]",
                                                "DESCRIPTION" => "PROPERTY[".$propertyID."][".$i."][DESCRIPTION]",
                                                "FORM_NAME"=>"iblock_add",
                                            ),
                                        ));
                                ?><br /><?
                                }
                            break;
                            case "TAGS":
                                $APPLICATION->IncludeComponent(
                                    "bitrix:search.tags.input",
                                    "",
                                    array(
                                        "VALUE" => $arResult["ELEMENT"][$propertyID],
                                        "NAME" => "PROPERTY[".$propertyID."][0]",
                                        "TEXT" => 'size="'.$arResult["PROPERTY_LIST_FULL"][$propertyID]["COL_COUNT"].'"',
                                    ), null, array("HIDE_ICONS"=>"Y")
                                );
                                break;
                            case "HTML":
                                $LHE = new CHTMLEditor;
                                $LHE->Show(array(
                                    'name' => "PROPERTY[".$propertyID."][0]",
                                    'id' => preg_replace("/[^a-z0-9]/i", '', "PROPERTY[".$propertyID."][0]"),
                                    'inputName' => "PROPERTY[".$propertyID."][0]",
                                    'content' => $arResult["ELEMENT"][$propertyID],
                                    'width' => '100%',
                                    'minBodyWidth' => 350,
                                    'normalBodyWidth' => 555,
                                    'height' => '200',
                                    'bAllowPhp' => false,
                                    'limitPhpAccess' => false,
                                    'autoResize' => true,
                                    'autoResizeOffset' => 40,
                                    'useFileDialogs' => false,
                                    'saveOnBlur' => true,
                                    'showTaskbars' => false,
                                    'showNodeNavi' => false,
                                    'askBeforeUnloadPage' => true,
                                    'bbCode' => false,
                                    'siteId' => SITE_ID,
                                    'controlsMap' => array(
                                        array('id' => 'Bold', 'compact' => true, 'sort' => 80),
                                        array('id' => 'Italic', 'compact' => true, 'sort' => 90),
                                        array('id' => 'Underline', 'compact' => true, 'sort' => 100),
                                        array('id' => 'Strikeout', 'compact' => true, 'sort' => 110),
                                        array('id' => 'RemoveFormat', 'compact' => true, 'sort' => 120),
                                        array('id' => 'Color', 'compact' => true, 'sort' => 130),
                                        array('id' => 'FontSelector', 'compact' => false, 'sort' => 135),
                                        array('id' => 'FontSize', 'compact' => false, 'sort' => 140),
                                        array('separator' => true, 'compact' => false, 'sort' => 145),
                                        array('id' => 'OrderedList', 'compact' => true, 'sort' => 150),
                                        array('id' => 'UnorderedList', 'compact' => true, 'sort' => 160),
                                        array('id' => 'AlignList', 'compact' => false, 'sort' => 190),
                                        array('separator' => true, 'compact' => false, 'sort' => 200),
                                        array('id' => 'InsertLink', 'compact' => true, 'sort' => 210),
                                        array('id' => 'InsertImage', 'compact' => false, 'sort' => 220),
                                        array('id' => 'InsertVideo', 'compact' => true, 'sort' => 230),
                                        array('id' => 'InsertTable', 'compact' => false, 'sort' => 250),
                                        array('separator' => true, 'compact' => false, 'sort' => 290),
                                        array('id' => 'Fullscreen', 'compact' => false, 'sort' => 310),
                                        array('id' => 'More', 'compact' => true, 'sort' => 400)
                                    ),
                                ));
                                break;
                            case "T":
                                for ($i = 0; $i<$inputNum; $i++)
                                {

                                    if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0)
                                    {
                                        $value = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE"] : $arResult["ELEMENT"][$propertyID];
                                    }
                                    elseif ($i == 0)
                                    {
                                        $value = intval($propertyID) > 0 ? "" : $arResult["PROPERTY_LIST_FULL"][$propertyID]["DEFAULT_VALUE"];
                                    }
                                    else
                                    {
                                        $value = "";
                                    }
                                ?>
                                    <textarea cols="<?=$arResult["PROPERTY_LIST_FULL"][$propertyID]["COL_COUNT"]?>" rows="<?=$arResult["PROPERTY_LIST_FULL"][$propertyID]["ROW_COUNT"]?>" name="PROPERTY[<?=$propertyID?>][<?=$i?>]"><?=$value?></textarea>
                                <?
                                }
                            break;

                            case "S":
                            case "N":
                                for ($i = 0; $i<$inputNum; $i++)
                                {
                                    if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0)
                                    {
                                        $value = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE"] : $arResult["ELEMENT"][$propertyID];
                                    }
                                    elseif ($i == 0)
                                    {
                                        $value = intval($propertyID) <= 0 ? "" : $arResult["PROPERTY_LIST_FULL"][$propertyID]["DEFAULT_VALUE"];

                                    }
                                    else
                                    {
                                        $value = "";
                                    }
                                    $code = $arResult["PROPERTY_LIST_FULL"][$propertyID]["CODE"];

                                    $type = "text";
                                    $mask = "";
                                    if ($code == "PHONE"){
                                        $mask = " js-phone-mask";
                                        $type = "tel";
                                    }
                                    if ($code == "EMAIL"){
                                        $type = "email";
                                    }
                                ?>
                                    <div class="input js-validation-wrapper">
                                        <input type="<?=$type?>"
                                               class="input__control<?=$mask?>"
                                               placeholder="<?=$placeholder?>"
                                               name="PROPERTY[<?=$propertyID?>][<?=$i?>]"
                                               size="<?=$arResult["PROPERTY_LIST_FULL"][$propertyID]["COL_COUNT"]; ?>"
                                               value="<?=$value?>"
                                               <?if(in_array($propertyID, $arResult["PROPERTY_REQUIRED"])):?>required=""<?endif?>>
                                    </div>
                                <?
                                if($arResult["PROPERTY_LIST_FULL"][$propertyID]["USER_TYPE"] == "DateTime"):?><?
                                    $APPLICATION->IncludeComponent(
                                        'bitrix:main.calendar',
                                        '',
                                        array(
                                            'FORM_NAME' => 'iblock_add',
                                            'INPUT_NAME' => "PROPERTY[".$propertyID."][".$i."]",
                                            'INPUT_VALUE' => $value,
                                        ),
                                        null,
                                        array('HIDE_ICONS' => 'Y')
                                    );
                                    ?><br /><small><?=GetMessage("IBLOCK_FORM_DATE_FORMAT")?><?=FORMAT_DATETIME?></small><?
                                endif
                                ?><?
                                }
                            break;

                            case "F":
                                for ($i = 0; $i<$inputNum; $i++)
                                {
                                    $value = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE"] : $arResult["ELEMENT"][$propertyID];
                                    ?>

                        <input type="hidden" name="PROPERTY[<?=$propertyID?>][<?=$arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] : $i?>]" value="<?=$value?>" />
                        <input type="file" size="<?=$arResult["PROPERTY_LIST_FULL"][$propertyID]["COL_COUNT"]?>"  name="PROPERTY_FILE_<?=$propertyID?>_<?=$arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] : $i?>" /><br />
                                    <?

                                    if (!empty($value) && is_array($arResult["ELEMENT_FILES"][$value]))
                                    {
                                        ?>
                    <input type="checkbox" name="DELETE_FILE[<?=$propertyID?>][<?=$arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] : $i?>]" id="file_delete_<?=$propertyID?>_<?=$i?>" value="Y" /><label for="file_delete_<?=$propertyID?>_<?=$i?>"><?=GetMessage("IBLOCK_FORM_FILE_DELETE")?></label><br />
                                        <?

                                        if ($arResult["ELEMENT_FILES"][$value]["IS_IMAGE"])
                                        {
                                            ?>
                    <img src="<?=$arResult["ELEMENT_FILES"][$value]["SRC"]?>" height="<?=$arResult["ELEMENT_FILES"][$value]["HEIGHT"]?>" width="<?=$arResult["ELEMENT_FILES"][$value]["WIDTH"]?>" border="0" /><br />
                                            <?
                                        }
                                        else
                                        {
                                            ?>
                    <?=GetMessage("IBLOCK_FORM_FILE_NAME")?>: <?=$arResult["ELEMENT_FILES"][$value]["ORIGINAL_NAME"]?><br />
                    <?=GetMessage("IBLOCK_FORM_FILE_SIZE")?>: <?=$arResult["ELEMENT_FILES"][$value]["FILE_SIZE"]?> b<br />
                    [<a href="<?=$arResult["ELEMENT_FILES"][$value]["SRC"]?>"><?=GetMessage("IBLOCK_FORM_FILE_DOWNLOAD")?></a>]<br />
                                            <?
                                        }
                                    }
                                }

                            break;
                            case "L":
                                continue;
                                if ($arResult["PROPERTY_LIST_FULL"][$propertyID]["LIST_TYPE"] == "C")
                                    $type = $arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE"] == "Y" ? "checkbox" : "radio";
                                else
                                    $type = $arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE"] == "Y" ? "multiselect" : "dropdown";

                                switch ($type):
                                    case "checkbox":
                                    case "radio":
                                        foreach ($arResult["PROPERTY_LIST_FULL"][$propertyID]["ENUM"] as $key => $arEnum)
                                        {
                                            $checked = false;
                                            if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0)
                                            {
                                                if (is_array($arResult["ELEMENT_PROPERTIES"][$propertyID]))
                                                {
                                                    foreach ($arResult["ELEMENT_PROPERTIES"][$propertyID] as $arElEnum)
                                                    {
                                                        if ($arElEnum["VALUE"] == $key)
                                                        {
                                                            $checked = true;
                                                            break;
                                                        }
                                                    }
                                                }
                                            }
                                            else
                                            {
                                                if ($arEnum["DEF"] == "Y") $checked = true;
                                            }

                                            ?>
                            <input type="<?=$type?>" name="PROPERTY[<?=$propertyID?>]<?=$type == "checkbox" ? "[".$key."]" : ""?>" value="<?=$key?>" id="property_<?=$key?>"<?=$checked ? " checked=\"checked\"" : ""?> /><label for="property_<?=$key?>"><?=$arEnum["VALUE"]?></label><br />
                                            <?
                                        }
                                    break;

                                    case "dropdown":
                                    case "multiselect":
                                        $code = $arResult["PROPERTY_LIST_FULL"][$propertyID]["CODE"];
                                    ?>
                                    <div class="contact-us__form-field" id="<?=ToLower($code)?>-container">
                                        <select class="js-custom-select"
                                                data-parsley-errors-container="#<?=ToLower($code)?>-container"
                                                <?if(in_array($propertyID, $arResult["PROPERTY_REQUIRED"])):?>required=""<?endif?>
                                                name="PROPERTY[<?=$propertyID?>]<?=$type=="multiselect" ? "[]\" size=\"".$arResult["PROPERTY_LIST_FULL"][$propertyID]["ROW_COUNT"]."\" multiple=\"multiple" : ""?>">
                                                        <option value="" placeholder=""><?echo $placeholder?></option>
                                                            <?
                                                                if (intval($propertyID) > 0) $sKey = "ELEMENT_PROPERTIES";
                                                                else $sKey = "ELEMENT";

                                                                foreach ($arResult["PROPERTY_LIST_FULL"][$propertyID]["ENUM"] as $key => $arEnum)
                                                                {
                                                                    $checked = false;
                                                                    if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0)
                                                                    {
                                                                        foreach ($arResult[$sKey][$propertyID] as $elKey => $arElEnum)
                                                                        {
                                                                            if ($key == $arElEnum["VALUE"])
                                                                            {
                                                                                $checked = true;
                                                                                break;
                                                                            }
                                                                        }
                                                                    }
                                                                    else
                                                                    {
                                                                        if ($arEnum["DEF"] == "Y") $checked = true;
                                                                    }
                                                                    ?>
                                                                    <option
                                                                            <?if($arResult["TIME_SLOT"][$key] >= 18):?> disabled<?endif;?>
                                                                            value="<?=$key?>" <?=$checked ? " selected=\"selected\"" : ""?>><?=$arEnum["VALUE"]?></option>
                                                                    <?
                                                                }
                                                            ?>
                                                    </select>
                                    </div>
                                    <?
                                    break;

                                endswitch;
                            break;
                        endswitch;?>
            <?endforeach;?>

        <?if($arParams["USE_CAPTCHA"] == "Y" && $arParams["ID"] <= 0):?>
                <tr>
                    <td><?=GetMessage("IBLOCK_FORM_CAPTCHA_TITLE")?></td>
                    <td>
                        <input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
                        <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
                    </td>
                </tr>
                <tr>
                    <td><?=GetMessage("IBLOCK_FORM_CAPTCHA_PROMPT")?><span class="starrequired">*</span>:</td>
                    <td><input type="text" name="captcha_word" maxlength="50" value=""></td>
                </tr>
            <?endif?>
    <?endif?>

    <div class="cheackbox">
        <input class="visually-hidden" type="checkbox" id="checkbox-2" required>
        <label class="checkbox__container" for="checkbox-2">
            <span class="checkbox__control">Отправляя заявку, я соглашаюсь на обработку персональных данных</span>
        </label>
    </div>

    <input type="hidden" name="<?=$templateName?>_<?=$arParams["IBLOCK_ID"]?>_iblock_submit" value="<?=GetMessage("IBLOCK_FORM_SUBMIT")?>" />
    <button class="form__button button" type="submit">Скачать презентацию</button>

    <?if ($arParams["LIST_URL"] <> ''):?>
        <input type="submit" name="iblock_apply" value="<?=GetMessage("IBLOCK_FORM_APPLY")?>" />
        <input
            type="button"
            name="iblock_cancel"
            value="<? echo GetMessage('IBLOCK_FORM_CANCEL'); ?>"
            onclick="location.href='<? echo CUtil::JSEscape($arParams["LIST_URL"])?>';"
        >
    <?endif?>
    <?=bitrix_sessid_post()?>
    <?if ($arParams["MAX_FILE_SIZE"] > 0):?><input type="hidden" name="MAX_FILE_SIZE" value="<?=$arParams["MAX_FILE_SIZE"]?>" /><?endif?>
</form>