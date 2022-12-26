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
    echo '<li class="big text-center">По вашему запросу ничего не найдено!</li>';
} ?>
<? foreach ($arResult["ITEMS"] as $k => $arItem): ?>
    <?php
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));


    if ($k == 0 || $k == 3) {

        ?>


        <li class="big div-cases" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">

            <div class="case-grid">
                <? if ($arItem['PREVIEW_PICTURE']['SRC']){ ?>
                <div class="img">
                    <img alt="<?= $arItem['NAME'] ?>" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>">
                </div>

                <div class="text">
                    <? } else { ?>
                    <div class="text2">
                        <? } ?>
                        <h5><?= $arItem['NAME'] ?></h5>
                        <p><?= $arItem['PREVIEW_TEXT'] ?></p>
                    </div>

                    <div class="info">
                        <? if ($arItem['PROPERTIES']['imwork']['VALUE']) { ?>
                            <div>
                                <div class="accent"><?= $arItem['PROPERTIES']['imwork']['VALUE'] ?></div>
                                <p>Реализация работы</p>
                            </div>
                        <? } ?>
                        <? if ($arItem['PROPERTIES']['speedwork']['VALUE']) { ?>
                            <div class="ms-sm-5 ps-md-5">
                                <div class="accent"><?= $arItem['PROPERTIES']['speedwork']['VALUE'] ?></div>
                                <p>Cкорость работы</p>
                            </div>
                        <? } ?>
                    </div>

                    <? if (CFile::GetPath($arItem['PROPERTIES']['logo_company']['VALUE'])) { ?>
                        <div class="logo">
                            <img src="<?= CFile::GetPath($arItem['PROPERTIES']['logo_company']['VALUE']) ?>" alt="<?= $arItem['NAME'] ?>">
                        </div>
                    <? } ?>
                    <a href="/case/<?= $arItem['PROPERTIES']['link']['VALUE'] ?>" class="more"><span>подробнее</span></a>

                </div>
        </li>


    <? } else { ?>
        <li class="mini div-cases">
            <div class="case">
                <div class="text">
                    <h5><?= $arItem['NAME'] ?></h5>
                    <p><?= $arItem['PREVIEW_TEXT'] ?></p>
                </div>
                <div class="info">

                    <? if (CFile::GetPath($arItem['PROPERTIES']['logo_company']['VALUE'])) { ?>
                        <div>
                            <img src="<?= CFile::GetPath($arItem['PROPERTIES']['logo_company']['VALUE']) ?>" alt="<?= $arItem['NAME'] ?>">
                        </div>
                    <? } ?>
                    <div>
                        <a href="/case/<?= $arItem['PROPERTIES']['link']['VALUE'] ?>" class="more"><span>подробнее</span></a>
                    </div>
                </div>
            </div>
        </li>

    <?php } ?>
<? endforeach; ?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?>
<?endif;?>