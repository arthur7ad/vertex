<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
ob_start();
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

<? foreach ($arResult["ITEMS"] as $k => $arItem) { ?>

    <?php
    $APPLICATION->SetTitle($arItem['NAME']);

    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));


    ?>


    <section class="sec-updates-head">
        <? if ($arItem['PREVIEW_PICTURE']['SRC']) { ?>
            <img alt="<?= $arItem['NAME'] ?>" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" class="bg">
        <? } else { ?>
            <img alt="" src="/local/templates/verter/imgs/bg/bg-6.jpg" class="bg">
        <? } ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <h1><?= $arItem['NAME'] ?></h1>
                    <p class="fs-09"><?=$arItem['PREVIEW_TEXT']?></p>
                </div>
            </div>
        </div>
    </section>
    <?php    if ($arItem['PROPERTIES']['tip']['VALUE_XML_ID'] == 2) {
        ?>
    <section class="sec-updates py-sm-5">
        <? } else { ?>
        <section class="sec-updates-2 py-sm-5">
       <? } ?>
        <div class="container">
            <div class="no-padding">
        <?= htmlspecialcharsBack($arItem['DETAIL_TEXT']) ?>
            </div>
        </div>
    </section>

<? } ?>
<?
$this->__component->arResult["CACHED_TPL"] = @ob_get_contents();
ob_get_clean();
?>