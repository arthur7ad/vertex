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
    <?$file = CFile::ResizeImageGet($arItem["PROPERTIES"]['PR1']['VALUE'], array('width'=>500, 'height'=>500), BX_RESIZE_IMAGE_PROPORTIONAL, true); ?>

    <div class="flex">
        <img class="w-[150px] h-[150px] md:w-[200px] md:h-[200px]" src="<?=$file['src']?>">
    </div>
<?endforeach;?>
