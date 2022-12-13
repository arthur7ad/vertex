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

<? foreach ($arResult["ITEMS"] as $k => $arItem){ ?>
<?php
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));


?>


<div class="swiper-slide" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-11 col-xl-10">
                <div class="row">
                    <div class="col-12 col-sm-8">
                        <h3 class="mb-4 mb-xl-5"><?= $arItem['NAME'] ?></h3>
                        <div class="d-flex align-items-center mb-2 mb-xl-3">

                            <? $res = CIBlockElement::GetProperty($arItem['IBLOCK_ID'], $arItem['ID'], "sort", "asc", array("CODE" => "img1"));
                            if ($ob = $res->GetNext()) {
                                $img1 = $ob['VALUE'];
                                $file = CFile::GetFileArray($img1);
                                $img1 = $file['SRC'];
                            }
                            ?>
                            <? if ($img1) { ?>

                                <img src="<?= $img1 ?>" alt="<?= $arItem['NAME'] ?>" alt="<?= $arItem['NAME'] ?>">

                            <? } ?>

                            <h4 class="ms-3 mb-0"><?= $arItem['PROPERTIES']['title1']['VALUE'] ?></h4>
                        </div>
                        <p>
                            <?= htmlspecialcharsBack($arItem['PROPERTIES']['about1']['VALUE']['TEXT']); ?>  </p>
                        <div class="d-flex align-items-center mb-2 mb-xl-3 mt-4 mt-xl-5">
                            <?
                            $res2 = CIBlockElement::GetProperty($arItem['IBLOCK_ID'], $arItem['ID'], "sort", "asc", array("CODE" => "img2"));
                            if ($ob2 = $res2->GetNext()) {
                                $img2 = $ob2['VALUE'];
                                $file2 = CFile::GetFileArray($img2);
                                $img2 = $file2['SRC'];
                            }
                            ?>
                            <? if ($img2) { ?>

                                <img src="<?= $img2 ?>" alt="<?= $arItem['NAME'] ?>">

                            <? } ?>

                            <h4 class="ms-3 mb-0"><?= $arItem['PROPERTIES']['title2']['VALUE'] ?></h4>
                        </div>
                        <p>
                            <?= htmlspecialcharsBack($arItem['PROPERTIES']['about2']['VALUE']['TEXT']); ?>     </p>
                        <a href="<?= $arItem['PROPERTIES']['link']['VALUE'] ?>" class="more"><span>подробнее</span></a>
                    </div>
                </div>
            </div>
        </div>
        <? if ($arItem['PREVIEW_PICTURE']['SRC']){ ?>
            <img alt="<?= $arItem['NAME'] ?>" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" class="img">
       <? } ?>
    </div>
</div>


<? } ?>
