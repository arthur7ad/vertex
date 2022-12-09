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
    <?if($k == 0){?>
        <div class="col-sm-8 col-lg-6">
            <iframe width="100%" height="320" src="https://www.youtube.com/embed/<?=$arItem['NAME']?>" title="Black Screen 10 seconds" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h5><?=$arItem['PREVIEW_TEXT']?></h5>
            <a href="https://www.youtube.com/embed/<?=$arItem['NAME']?>" target="_blank" class="more">смотреть</a>
        </div>
    <?}elseif($k == 1){?>
        <div class="d-none d-sm-block col-8 col-lg-6 offset-lg-3">
            <iframe width="100%" height="348" src="https://www.youtube.com/embed/<?=$arItem['NAME']?>" title="Black Screen 10 seconds" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h5><?=$arItem['PREVIEW_TEXT']?></h5>
            <a href="https://www.youtube.com/embed/<?=$arItem['NAME']?>" target="_blank" class="more">смотреть</a>
        </div>
    <?}?>
<?endforeach;?>
