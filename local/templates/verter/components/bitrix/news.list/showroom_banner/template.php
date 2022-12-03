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
    <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="Продажи" class="bg">
    <div class="container" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
                <h1 class="mb-0"><?=$arItem['NAME']?></h1>
            </div>
            <div class="col-12 col-xl-11">
                <div class="box">
                    <h2><?=$arItem['PROPERTIES']['title_block']['VALUE']?></h2>
                     <p><?=$arItem['PREVIEW_TEXT']?></p>
                    <button class="btn-1 mt-3 mt-md-5" href="<?=$arItem['PROPERTIES']['title_block']['VALUE']?>">подробнее</button>
                </div>
            </div>
        </div>
    </div>

<?endforeach;?>
