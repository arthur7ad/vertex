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
    <div class="itcss1__item">
        <div class="flex flex-col sm:p-[30px] pb-[15px] px-[30px] gap-y-3 sm:gap-y-7">
            <div class=" w-[35%] sm:w-[175px]">
                <?$file = CFile::ResizeImageGet($arItem["PROPERTIES"]['PR3']['VALUE'], array('width'=>500, 'height'=>500), BX_RESIZE_IMAGE_PROPORTIONAL, true); ?>
                <img src="<?=$file['src']?>" alt="logo">
            </div>
            <div>
                <h3 class="text-[18px] sm:text-[23px] md:text-[28px] font-medium">
                    <?echo $arItem["NAME"]?>
                </h3>
            </div>
            <div>
                <p class="text-[14px]  sm:text-[19px]">
                    <?echo $arItem["PREVIEW_TEXT"]?>
                </p>
            </div>
            <div class="flex flex-row justify-between">
                <div class="flex flex-row flex-wrap w-[430px] ">
                    <div class="flex flex-col w-full">
                        <span class="text-main-blue font-bold text-[25px] sm:text-[34px] md:text-[50px]"><?=$arItem["PROPERTIES"]['PR1']['VALUE']?></span>
                        <span class="text-[16px] md:text-[20px]">Реализация работы</span>
                    </div>
                    <div class="flex flex-col ">
                        <span class="text-main-blue font-bold text-[25px] sm:text-[34px] md:text-[50px]"><?=$arItem["PROPERTIES"]['PR2']['VALUE']?></span>
                        <span class="text-[16px] md:text-[20px]">Скорость работы</span>
                    </div>
                </div>
                <div class="w-[175px] ">
                    <img src="<?echo $arItem["PREVIEW_PICTURE"]['SRC']?>" alt="certificate">
                </div>
            </div>
            <div class="flex justify-between">
                <div class="text-white">
                    <p class="underline underline-offset-4 text-[8px] sm:text-[16px] font-semibold sm:font-medium">
                        подробнее</p>
                </div>
                <div class="w-[200px] justify-center self-end">
                    <ol class="itcss1__indicators justify-center">
                        <li class="itcss1__indicator" data-slide-to="0"></li>
                        <li class="itcss1__indicator itcss1__indicator_active" data-slide-to="1"></li>
                    </ol>
                </div>
                <div class="self-end">
                    <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"
                       class="underline underline-offset-4 text-[8px] sm:text-[16px] text-black font-semibold sm:font-medium">подробнее</a>
                </div>
            </div>
        </div>
    </div>
<?endforeach;?>
