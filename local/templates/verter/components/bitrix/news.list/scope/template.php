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
    <div class="card-capability" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <figure>
            <img alt="<?=$arItem['NAME']?>" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">
            <figcaption><?=$arItem['NAME']?></figcaption>
        </figure>
        <div class="description">
            <div>
                <h5><?=$arItem['NAME']?></h5>
                <p class="text"><?=$arItem['PREVIEW_TEXT']?></p>
            </div>
           <a href="<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="btn-1 font-color">подробнее</a>
        </div>
    </div>




<?endforeach;?>
