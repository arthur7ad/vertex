<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<?php $count = count($arResult["ITEMS"]);
if($count==0) {
    echo '<div class="text-center-art">По вашему запросу ничего не найдено!</div>';
} ?>
<? foreach ($arResult["ITEMS"] as $k => $arItem): ?>
    <?php
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

            ?>

        <div class="div-webinar">
            <div class="webinar-card">
                 <? if ($arItem['PREVIEW_PICTURE']['SRC']){ ?>
                     <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="bg" class="bg">
                 <? } ?>
             <?php if ($arItem['PROPERTIES']['effect']['VALUE_XML_ID'] == 2) { ?>
                 <div class="bg-grad"></div>
             <?}?>
                <time>
                     <? if ($arItem['PROPERTIES']['data']['VALUE']) { ?>  <span><?=$arItem['PROPERTIES']['data']['VALUE']?></span> <? } ?>
                 <? if ($arItem['PROPERTIES']['time']['VALUE']) { ?>   <br><span class="fw-7"><?=$arItem['PROPERTIES']['time']['VALUE']?></span> <? } ?>
                </time>
                <h5><?= $arItem['NAME'] ?></h5>
                <div class="speaker">
                    <? if (CFile::GetPath($arItem['PROPERTIES']['ava']['VALUE'])) { ?>
                    <div class="img">
                        <img alt="<?=$arItem['PROPERTIES']['name_orator']['VALUE']?>" src="<?= CFile::GetPath($arItem['PROPERTIES']['ava']['VALUE']) ?>" class="photo">
                    </div>
                        <? }  ?>
                    <div class="flex-1">
                        <h6><?=$arItem['PROPERTIES']['name_orator']['VALUE']?></h6>
                        <p><?= htmlspecialcharsBack($arItem['PROPERTIES']['opis_orator']['VALUE']['TEXT']); ?></p>
                    </div>
                </div>
            </div>
            <p><?= htmlspecialcharsBack($arItem['PROPERTIES']['PREVIEW_TEXT']); ?></p>
            <? if($arItem['PROPERTIES']['link']['VALUE']){?>
            <a href="/webinar/<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="more">подробнее</a>
            <? } else { ?>
                <a href="#" class="more">подробнее</a>
            <? } ?>
        </div>

<? endforeach; ?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?>
<?endif;?>