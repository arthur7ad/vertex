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

<?foreach($arResult["ITEMS"] as $arItem):?>
    <!-- <div class="flex flex-col text-center justify-around sm:w-[70px] md:w-[200px] h-fit sm:h-[150px] ">
        <div class="flex justify-center ">
            <img class="verter-show" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?echo $arItem["NAME"]?>">
        </div>
        <p class=" text-[13px] md:text-[16px] mt-4 text-center font-medium"><?echo $arItem["NAME"]?></p>
    </div> -->
    <li>
        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?echo $arItem["NAME"]?>" class="icon element-animation">
        <p class="text-center lh-12 mt-3"><?echo $arItem["NAME"]?></p>
    </li>
<?endforeach;?>
