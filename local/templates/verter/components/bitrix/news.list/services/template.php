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
        <li>
            <figure class="light">
                <img src="<?=SITE_TEMPLATE_PATH?>/imgs/product/img1.png" alt="<?=htmlspecialcharsBack($arItem['NAME'])?>" class="img">
                <figcaption>
                    <div class="text">
                        <h2><?=htmlspecialcharsBack($arItem['NAME'])?></h2>
                        <p><?=$arItem['PREVIEW_TEXT']?></p>
                    </div>
                    <a href="<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="more">подробнее</a>
                </figcaption>
            </figure>
        </li>
        <!-- <div class="flex flex-col my-4 sm:my-[50px] h-fit sm:h-72 rounded-lg sm:rounded-2xl justify-between p-6 sm:p-8 bg-white
                  shadow-main w-full relative  overflow-hidden">
            <div class="block z-10">
                <p class="text-[26px] sm:text-5xl font-bold text-main-blue mb-4"><?=htmlspecialcharsBack($arItem['NAME'])?></p>
                <p class="text-sm sm:text-xl w-1/2 sm:w-[480px]"><?=$arItem['PREVIEW_TEXT']?></p>
            </div>
            <p class="text-sm sm:text-lg underline underline-offset-4 font-semibold z-10 mt-4 sm:mt-0">
                <a href="<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="cursor-pointer">Подробнее</a>
            </p>

            <img class="absolute lg:top-0 right-[0px] top-[50px]  lg:right-0 z-[3] w-[50%]  verter-left"
                 src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="">
            <img src="<?=$arItem['DETAIL_PICTURE']['SRC']?>" alt="wms"
                 class="absolute top-0 left-0 h-full w-full object-cover rounded-lg sm:rounded-2xl z-0 ">
        </div> -->
    <?}elseif($k == 1){?>
        <li>
            <figure class="dark">
                <img src="<?=SITE_TEMPLATE_PATH?>/imgs/product/img2.png" alt="<?=htmlspecialcharsBack($arItem['NAME'])?>" class="img">
                <figcaption>
                    <div class="text">
                        <h2><?=htmlspecialcharsBack($arItem['NAME'])?></h2>
                        <p><?=$arItem['PREVIEW_TEXT']?></p>
                    </div>
                    <a href="<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="more">подробнее</a>
                </figcaption>
            </figure>
        </li>
        <!-- <div class="flex flex-col gap-4 sm:gap-[50px] xl:flex-row my-0 sm:mt-[50px] text-white">
            <div
                    class="flex flex-col h-fit sm:h-72 rounded-lg sm:rounded-2xl justify-between p-6 sm:p-8 bg-white shadow-all w-full relative verter-right">
                <div class="block z-10">
                    <p class="text-[26px] sm:text-5xl font-bold mb-4"><?=htmlspecialcharsBack($arItem['NAME'])?></p>
                    <p class="text-sm sm:text-xl w-1/2 sm:w-[480px]"><?=$arItem['PREVIEW_TEXT']?></p>
                </div>
                <p class="text-sm sm:text-lg underline underline-offset-4 font-semibold z-10 mt-4 sm:mt-0"><a
                            href="<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="cursor-pointer">Подробнее</a>
                </p>
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="monitoring"
                     class="absolute rounded-lg sm:rounded-2xl top-0 left-0 h-full w-full object-cover z-0">
            </div> -->
    <?}elseif($k == 2){?>
            <li>
                <figure class="light">
                    <img src="<?=SITE_TEMPLATE_PATH?>/imgs/product/img3.png" alt="<?=htmlspecialcharsBack($arItem['NAME'])?>" class="img">
                    <figcaption>
                        <div class="text">
                            <h2><?=htmlspecialcharsBack($arItem['NAME'])?></h2>
                            <p><?=$arItem['PREVIEW_TEXT']?></p>
                        </div>
                        <a href="<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="more">подробнее</a>
                    </figcaption>
                </figure>
            </li>
            <!-- <div
                    class="flex flex-col h-fit sm:h-72 text-black rounded-lg sm:rounded-2xl justify-between p-6 sm:p-8 bg-white shadow-main w-full relative verter-left">
                <div class="block z-10">
                    <p class="text-[26px] sm:text-5xl font-bold mb-4 text-main-blue"><a></a><?=htmlspecialcharsBack($arItem['NAME'])?></p>
                    <p class="text-sm sm:text-xl w-1/2 sm:w-[480px]"><?=$arItem['PREVIEW_TEXT']?></p>
                </div>
                <p class="text-sm sm:text-lg underline underline-offset-4 font-semibold z-10 mt-4 sm:mt-0"><a
                            href="<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="cursor-pointer">Подробнее</a>
                </p>
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="infomat"
                     class="absolute right-0 bottom-0 2 h-[85%] w-fit object-contain z-0 ">
            </div>
        </div> -->
    <?}elseif($k == 3){?>
        <li>
            <figure class="dark">
                <img src="<?=SITE_TEMPLATE_PATH?>/imgs/product/img4.png" alt="<?=htmlspecialcharsBack($arItem['NAME'])?>" class="img">
                <figcaption>
                    <div class="text">
                        <h2><?=htmlspecialcharsBack($arItem['NAME'])?></h2>
                        <p><?=$arItem['PREVIEW_TEXT']?></p>
                        <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" class="logo">
                    </div>
                    <a href="<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="more">подробнее</a>
                </figcaption>
            </figure>
        </li>
        <!-- <div class="flex flex-col mt-4 sm:mt-[50px] overflow-hidden h-fit rounded-lg sm:rounded-2xl justify-between p-6 sm:p-8 bg-main-blue text-white shadow-main w-full relative ">
            <div class="block z-10 ">
                <p class="text-[26px] sm:text-5xl font-bold mb-4"><?=htmlspecialcharsBack($arItem['NAME'])?></p>
                <p class="text-sm sm:text-xl w-1/2 sm:w-[380px]"><?=$arItem['PREVIEW_TEXT']?></p>
            </div>
            <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" class="h-[40px] w-[180px] my-8 hidden sm:block ">
            <p class="text-sm sm:text-lg underline underline-offset-4 font-semibold z-10 mt-4 sm:mt-0"><a href="<?=$arItem['PROPERTIES']['link']['VALUE']?>"
                                                                                                          class="cursor-pointer">Подробнее</a>
            </p>
            <img src="<?=$arItem['DETAIL_PICTURE']['SRC']?>" alt="wms"
                 class="absolute top-0  h-full  right-[-250px] w-[140%] sm:w-[100%] md:w-[100%] lg:w-[60%] sm:right-[-200px] lg:right-0 max-w-[140%]  lg:max-w-full object-cover rounded-lg sm:rounded-2xl z-0 verter-bottom">
        </div> -->
    <?}elseif($k == 4){?>
        <li>
            <figure class="light">
                <img src="<?=SITE_TEMPLATE_PATH?>/imgs/product/img5.png" alt="<?=htmlspecialcharsBack($arItem['NAME'])?>" class="img">
                <figcaption>
                    <div class="text">
                        <h2><?=htmlspecialcharsBack($arItem['NAME'])?></h2>
                        <p><?=$arItem['PREVIEW_TEXT']?></p>
                    </div>
                    <a href="<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="more">подробнее</a>
                </figcaption>
            </figure>
        </li>
        <!-- <div class="flex flex-col gap-4 sm:gap-[50px] xl:flex-row mt-4 sm:mt-[50px] text-black ">
            <div
                    class="flex flex-col h-fit sm:h-72  rounded-lg sm:rounded-2xl justify-between p-8 mb-25 bg-white shadow-main w-full relative overflow-hidden">
                <div class="block z-10 w-[350px]">
                    <p class="text-[26px] sm:text-5xl font-bold mb-4 text-main-blue"><?=htmlspecialcharsBack($arItem['NAME'])?></p>
                    <p class="text-sm sm:text-xl w-1/2 sm:w-full mb-4"><?=$arItem['PREVIEW_TEXT']?></p>
                </div>
                <p
                        class="text-sm sm:text-lg underline underline-offset-4 font-semibold z-10 text-black mt-4 sm:mt-0">
                    <a href="<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="cursor-pointer">Подробнее</a></p>
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="monitoring"
                     class="absolute rounded-lg sm:rounded-2xl top-10 right-0 h-[85%] z-0 verter-left">
            </div> -->
    <?}elseif($k == 5){?>
        <li>
            <figure class="dark">
                <img src="<?=SITE_TEMPLATE_PATH?>/imgs/product/img6.png" alt="<?=htmlspecialcharsBack($arItem['NAME'])?>" class="img">
                <figcaption>
                    <div class="text">
                        <h2><?=htmlspecialcharsBack($arItem['NAME'])?></h2>
                        <p><?=$arItem['PREVIEW_TEXT']?></p>
                    </div>
                    <a href="<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="more">подробнее</a>
                </figcaption>
            </figure>
        </li>
        <!-- <div
                class="flex flex-col h-fit sm:h-72 text-white rounded-lg sm:rounded-2xl justify-between p-6 sm:p-8 bg-main-blue shadow-main w-full relative overflow-hidden">
            <div class="block z-10 w-[380px] ">
                <p class="text-[26px] sm:text-5xl font-bold mb-4 "><?=htmlspecialcharsBack($arItem['NAME'])?></p>
                <p class="text-sm sm:text-xl w-1/2 sm:w-full mb-4"><?=$arItem['PREVIEW_TEXT']?></p>
            </div>
            <p class="text-sm sm:text-lg underline underline-offset-4 font-semibold z-10 mt-4 sm:mt-0"><a
                        href="<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="cursor-pointer">Подробнее</a>
            </p>
            <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="infomat"
                 class="absolute right-0 bottom-0 2 h-[85%] w-fit object-contain z-0 verter-left">
        </div>
        </div> -->
    <?}?>
<?endforeach;?>
