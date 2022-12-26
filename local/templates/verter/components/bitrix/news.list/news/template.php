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
    <li class="div-new">
        <div class="news-preview">
            <h5><?=$arItem['NAME']?></h5>
            <p><?=$arItem['PREVIEW_TEXT']?></p>
            <? if($arItem['PROPERTIES']['link']['VALUE']) { ?>
            <a href="/new/<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="more">Подробнее</a>
        <? } else { ?>
                <a href="#" class="more">Подробнее</a>
            <?}?>
        </div>
    </li>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
   <?=$arResult["NAV_STRING"]?>
<?endif;?>
