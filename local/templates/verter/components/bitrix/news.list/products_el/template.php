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
?>

<?foreach($arResult["ITEMS"] as $k => $arItem):?>
    <?php
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <li>
       <? if($k==3 || $k==5) {?>
        <figure class="light">
       <? } else { ?>
        <figure class="dark">
        <? } ?>
           <? if($arItem['PREVIEW_PICTURE']['SRC']){?> <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>" class="img"> <? } ?>
            <figcaption>
                <div class="text">
                    <h2><?=$arItem['NAME']?></h2>
                    <p><?=$arItem['PREVIEW_TEXT']?></p>
                </div>

                <a class="more" href="<?=$arItem['PROPERTIES']['link']['VALUE']?>">подробнее</a>
            </figcaption>
        </figure>
    </li>


<?endforeach;?>
