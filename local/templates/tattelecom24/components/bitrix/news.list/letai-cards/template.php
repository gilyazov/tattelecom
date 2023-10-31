<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);
$imgCounter = 0;
?>
<div class="letai-cards">
    <div class="gl__page-content">
        <div class="letai-cards__inner">
            <?foreach($arResult["ITEMS"] as $key => $arItem):?>
                <?
                $obParser = new CTextParser;
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="letai-cards__item<?/*if(($key == 1) || (($key+1) % 2 == 0)):?> letai-cards__item--big<?endif;*/?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>" data-card="<?=$arItem["ID"]?>">
                    <div class="letai-cards__item-top">
                        <div class="letai-cards__item-user">
                            <img class="letai-cards__item-user-img" src="<?=\CFile::GetPath($arItem["PROPERTIES"]["ICO"]["VALUE"])?>" alt="user">
                            <div class="letai-cards__item-user-name"><?=$arItem["NAME"]?></div>
                        </div>
                        <a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" target="_blank" rel="nofollow"  class="letai-cards__item-social-link">
                            <img class="letai-cards__item-social" src="<?=$templateFolder?>/img/vk.svg" alt="vk">
                        </a>
                    </div>
                    <div class="letai-cards__item-content">
                        <p class="letai-cards__item-content-short">
                            <?
                            if(($key == 0) || ($key % 2 == 0)){
                                echo $obParser->html_cut($arItem["PREVIEW_TEXT"], 178);
                            }
                            elseif(($key == 1) || (($key+1) % 2 == 0)){
                                echo $obParser->html_cut($arItem["PREVIEW_TEXT"], 500);
                            }
                            else{
                                echo $arItem["PREVIEW_TEXT"];
                            }
                            ?>
                        </p>
                        <p class="letai-cards__item-content-full"><?=$arItem["PREVIEW_TEXT"];?></p>
                    </div>
                    <div class="letai-cards__item-footer">
                        <button class="letai-cards__item-btn">
                            Читать
                        </button>
                        <img class="letai-cards__item-icon" src="<?=$templateFolder?>/img/heart.svg" alt="heart">
                    </div>
                </div>

                <?if(
                    ($key == 0) || ($key % 2 == 0)
                ):?>
                    <?
                    $imgCounter++;
                    $path = $_SERVER['DOCUMENT_ROOT'] . $templateFolder . "/img/img-" . $imgCounter . ".svg";
                    if (!file_exists($path)) {
                        $imgCounter = 1;
                    }
                    ?>
                    <div class="letai-cards__item letai-cards__item--img"<?if($imgCounter==3):?> style="background: #64B4F0"<?endif;?>>
                        <img src="<?=$templateFolder?>/img/img-<?=$imgCounter?>.svg" alt="">
                    </div>
                <?endif;?>
            <?endforeach;?>

            <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
                <?=$arResult["NAV_STRING"]?>
            <?endif;?>
        </div>
    </div>
</div>

<div class="modal-letai-cards" style="padding: 0">
    <div class="modal-letai-cards__box" style="padding: 16px">
        <div class="modal-letai-cards__box-content">Modal content</div>
        <button class="modal-letai-cards__close-btn">
            <span></span>
            <span></span>
        </button>
    </div>
</div>

<?if($_REQUEST["card"]):?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const card = document.querySelector('[data-card="<?=$_REQUEST["card"]?>"]');
            const target = card.querySelector('.letai-cards__item-btn');

            openCardModal(target);
        })
    </script>
<?endif;?>
