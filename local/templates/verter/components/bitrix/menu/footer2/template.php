<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>


<?
$j = 1;
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
    <?if($j == count($arResult)){?>
        <li><h6 class="main-color"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?> <img class="icon" src="<?=SITE_TEMPLATE_PATH?>/imgs/icons/arrow.svg" alt="arrow"></a></h6></li>
    <?}else{?>
        <li><h6 class="main-color"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?> <img class="icon" src="<?=SITE_TEMPLATE_PATH?>/imgs/icons/arrow.svg" alt="arrow"></a></h6></li>
    <?}?>
<?$j++;endforeach?>


<?endif?>