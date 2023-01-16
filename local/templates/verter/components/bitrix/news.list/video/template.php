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
            <?= htmlspecialcharsBack($arItem['PROPERTIES']['video']['VALUE']['TEXT']); ?>
            <h5><?=$arItem['NAME']?></h5>
            <?
            if($arItem['PROPERTIES']['link']['VALUE']['TEXT']){
            ?>
            <a href="<?=$arItem['PROPERTIES']['link']['VALUE']?>" target="_blank" class="more">смотреть</a>
            <?
            }
            ?>
        </div>
    <?}elseif($k == 1){?>
        <div class="d-none d-sm-block col-8 col-lg-6 offset-lg-3">
            <?= htmlspecialcharsBack($arItem['PROPERTIES']['video']['VALUE']['TEXT']); ?>
            <h5><?=$arItem['NAME']?></h5>
            <?
            if($arItem['PROPERTIES']['link']['VALUE']['TEXT']){
            ?>
            <a href="<?=$arItem['PROPERTIES']['link']['VALUE']?>" target="_blank" class="more">смотреть</a>
            <?
            }?>
        </div>
    <?}?>
<?endforeach;?>
