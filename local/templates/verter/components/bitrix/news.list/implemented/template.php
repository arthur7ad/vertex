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

<? foreach ($arResult["ITEMS"] as $k => $arItem): ?>
    <?php
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));


?>
<div class="swiper-slide" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
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
                    <?
                    $res = CIBlockElement::GetProperty($arItem['IBLOCK_ID'], $arItem['ID'], "sort", "asc", array("CODE" => "logo_company"));
                    if ($ob = $res->GetNext()) {
                        $logo_company = $ob['VALUE'];
                        $file = CFile::GetFileArray($logo_company);
                        $logo_company = $file['SRC'];
                    }
                    ?>
                    <? if ($logo_company) { ?>
                        <div class="logo">
                            <img src="<?= $logo_company ?>" alt="<?= $arItem['NAME'] ?>">
                        </div>
                    <? } ?>
                    <a href="<?= $arItem['PROPERTIES']['link']['VALUE'] ?>" class="more"><span>подробнее</span></a>

                </div>
            </div>



<? endforeach; ?>
