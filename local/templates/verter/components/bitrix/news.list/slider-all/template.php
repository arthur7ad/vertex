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

<?foreach($arResult["ITEMS"] as $co => $arItem):?>

    <?php if(CFile::GetPath($arItem['PROPERTIES']['img1']['VALUE'])) { ?>
        <div class="position-relative m-5 width-100">
            <div class="swiper-gallery">
                <div class="swiper-wrapper">

                    <?php if(CFile::GetPath($arItem['PROPERTIES']['img1']['VALUE'])) { ?>
                        <div class="swiper-slide">
                            <img src="<?=CFile::GetPath($arItem['PROPERTIES']['img1']['VALUE'])?>" alt="">
                        </div>
                    <? } ?>
                    <?php if(CFile::GetPath($arItem['PROPERTIES']['img2']['VALUE'])) { ?>
                        <div class="swiper-slide">
                            <img src="<?=CFile::GetPath($arItem['PROPERTIES']['img2']['VALUE'])?>" alt="">
                        </div>
                    <? } ?>
                    <?php if(CFile::GetPath($arItem['PROPERTIES']['img3']['VALUE'])) { ?>
                        <div class="swiper-slide">
                            <img src="<?=CFile::GetPath($arItem['PROPERTIES']['img3']['VALUE'])?>" alt="">
                        </div>
                    <? } ?>
                    <?php if(CFile::GetPath($arItem['PROPERTIES']['img4']['VALUE'])) { ?>
                        <div class="swiper-slide">
                            <img src="<?=CFile::GetPath($arItem['PROPERTIES']['img4']['VALUE'])?>" alt="">
                        </div>
                    <? } ?>
                    <?php if(CFile::GetPath($arItem['PROPERTIES']['img5']['VALUE'])) { ?>
                        <div class="swiper-slide">
                            <img src="<?=CFile::GetPath($arItem['PROPERTIES']['img5']['VALUE'])?>" alt="">
                        </div>
                    <? } ?>
                    <?php if(CFile::GetPath($arItem['PROPERTIES']['img6']['VALUE'])) { ?>
                        <div class="swiper-slide">
                            <img src="<?=CFile::GetPath($arItem['PROPERTIES']['img6']['VALUE'])?>" alt="">
                        </div>
                    <? } ?>
                    <?php if(CFile::GetPath($arItem['PROPERTIES']['img7']['VALUE'])) { ?>
                        <div class="swiper-slide">
                            <img src="<?=CFile::GetPath($arItem['PROPERTIES']['img7']['VALUE'])?>" alt="">
                        </div>
                    <? } ?>
                    <?php if(CFile::GetPath($arItem['PROPERTIES']['img8']['VALUE'])) { ?>
                        <div class="swiper-slide">
                            <img src="<?=CFile::GetPath($arItem['PROPERTIES']['img8']['VALUE'])?>" alt="">
                        </div>
                    <? } ?>
                    <?php if(CFile::GetPath($arItem['PROPERTIES']['img9']['VALUE'])) { ?>
                        <div class="swiper-slide">
                            <img src="<?=CFile::GetPath($arItem['PROPERTIES']['img9']['VALUE'])?>" alt="">
                        </div>
                    <? } ?>
                    <?php if(CFile::GetPath($arItem['PROPERTIES']['img10']['VALUE'])) { ?>
                        <div class="swiper-slide">
                            <img src="<?=CFile::GetPath($arItem['PROPERTIES']['img10']['VALUE'])?>" alt="">
                        </div>
                    <? } ?>

                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    <? }
endforeach;?>
