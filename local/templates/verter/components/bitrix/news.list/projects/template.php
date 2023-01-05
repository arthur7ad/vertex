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
    <div class="swiper-slide">
        <div class="case-grid">
            <div class="img">
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?echo $arItem["NAME"]?>">
            </div>

            <div class="text">
                <h5><?echo $arItem["NAME"]?></h5>
                <p><?=$arItem['PROPERTIES']['link']['VALUE']?></p>
            </div>

            <div class="info">
                <div>
                    <div class="accent"><?=$arItem["PROPERTIES"]['PR1']['VALUE']?></div>
                    <p>Реализация работы</p>
                </div>
                <div class="ms-sm-5 ps-md-5">
                    <div class="accent"><?=$arItem["PROPERTIES"]['PR2']['VALUE']?></div>
                    <p>Cкорость работы</p>
                </div>
            </div>

            <div class="logo">
                <?$file = CFile::ResizeImageGet($arItem["PROPERTIES"]['PR3']['VALUE'], array('width'=>500, 'height'=>500), BX_RESIZE_IMAGE_PROPORTIONAL, true); ?>
                <img src="<?=$file['src']?>" alt="label">
            </div>

            <a href="<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="more"><span>подробнее</span></a>
        </div>
    </div>
<?endforeach;?>
