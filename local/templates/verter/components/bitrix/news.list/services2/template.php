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
                <img src="<?=SITE_TEMPLATE_PATH?>/imgs/sales/1.png" alt="<?=htmlspecialcharsBack($arItem['NAME'])?>" class="img">
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
                class="flex flex-col my-4 sm:my-[50px] h-fit sm:h-72 rounded-lg sm:rounded-2xl justify-between p-8 bg-white shadow-main w-full relative verter-left">
            <div class="block z-10 text-main-blue ">
                <p class="text-[26px] sm:text-5xl font-bold mb-4"><?=htmlspecialcharsBack($arItem['NAME'])?></p>
                <p
                        class="text-sm sm:text-xl w-[70%] w-[167px] sm:w-[380px] font-semibold sm:font-medium text-white text-black">
                    <?=$arItem['PREVIEW_TEXT']?></p>
            </div>
            <p
                    class="text-sm sm:text-lg underline underline-offset-4 font-semibold z-10 text-main-blue mt-4 sm:mt-0">
                <a href="<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="cursor-pointer">Подробнее</a>
            </p>
            <div
                    class="absolute top-0 left-0 h-full w-full overflow-hidden object-cover rounded-lg sm:rounded-2xl  bg-[#e2e3e8] sm:bg-[#e2e3e8]  md:bg-[#e9eaec]">
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="mes"
                     class="absolute top-0  left-0 left-[154px]  sm:left-[240px] md:left-[125px] lg:left-0 h-full w-full object-cover   z-0 ">
            </div>
        </div> -->
    <?}elseif($k == 1){?>
        <li>
            <figure class="light">
                <img src="<?=SITE_TEMPLATE_PATH?>/imgs/sales/2.png" alt="<?=htmlspecialcharsBack($arItem['NAME'])?>" class="img">
                <figcaption>
                    <div class="text">
                        <h2><?=htmlspecialcharsBack($arItem['NAME'])?></h2>
                        <p><?=$arItem['PREVIEW_TEXT']?></p>
                    </div>
                    <a href="<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="more">подробнее</a>
                </figcaption>
            </figure>
        </li>
        <!-- <div class="flex flex-col gap-4 sm:gap-[50px] xl:flex-row mt-4 sm:mt-[50px] text-white">
            <div
                    class="flex flex-col h-fit sm:h-72 rounded-lg sm:rounded-2xl justify-between p-8 bg-white shadow-main w-full relative verter-right">
                <div class="block z-10 text-main-blue">
                    <p class="text-[26px] sm:text-5xl font-bold mb-4"><?=htmlspecialcharsBack($arItem['NAME'])?></p>
                    <p class="text-sm sm:text-xl w-1/2 sm:w-[480px] mb-4 text-black"><?=$arItem['PREVIEW_TEXT']?></p>
                </div>
                <p class="text-sm sm:text-lg font-semibold z-10 text-main-blue">
                    <a href="<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="underline underline-offset-4 cursor-pointer">Подробнее</a>
                </p>
                <div
                        class="absolute rounded-lg sm:rounded-2xl top-0 left-0 overflow-hidden h-full w-full object-contain z-0">
                    <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="monitoring"
                         class="absolute rounded-lg sm:rounded-2xl  left-[0] sm:left-[79px] md:left-[144px] lg:left-[263px] xl:left-[70px] 2xl:left-[135px]  h-full w-full object-contain ">
                </div>
            </div> -->
    <?}elseif($k == 2){?>
        <li>
            <figure class="dark">
                <img src="<?=SITE_TEMPLATE_PATH?>/imgs/sales/3.png" alt="<?=htmlspecialcharsBack($arItem['NAME'])?>" class="img">
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
                    class="flex flex-col h-fit sm:h-72 text-white rounded-lg sm:rounded-2xl justify-between p-8  shadow-main w-full relative verter-left">
                <div class="block z-10 ">
                    <p class="text-[26px] sm:text-5xl font-bold mb-4"><?=htmlspecialcharsBack($arItem['NAME'])?></p>
                    <p class="text-sm sm:text-xl w-1/2 sm:w-[480px] mb-4"><?=$arItem['PREVIEW_TEXT']?></p>
                </div>
                <p class="text-sm sm:text-lg font-semibold z-10">
                    <a href="<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="underline underline-offset-4 cursor-pointer">Подробнее</a>
                </p>
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="infomat"
                     class="absolute right-0 bottom-0 h-full w-full object-cover z-0 rounded-lg sm:rounded-2xl">
            </div>
        </div> -->
    <?}elseif($k == 3){?>
        <li>
            <figure class="dark">
                <img src="<?=SITE_TEMPLATE_PATH?>/imgs/sales/4.png" alt="<?=htmlspecialcharsBack($arItem['NAME'])?>" class="img">
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
                class="flex flex-col mt-4 sm:mt-[50px] h-fit rounded-lg sm:rounded-2xl justify-between p-8 text-white bg-main-blue shadow-main w-full relative verter-right">
            <div class="block z-10 w-full sm:w-[35%]">
                <p class="text-[26px] sm:text-5xl font-bold mb-4"><?=htmlspecialcharsBack($arItem['NAME'])?></p>
                <p class="text-sm sm:text-xl w-1/2 sm:w-[380px] mb-4"><?=$arItem['PREVIEW_TEXT']?></p>
            </div>
            <p class="text-sm sm:text-lg font-semibold z-10">
                <a href="<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="underline underline-offset-4 cursor-pointer">Подробнее</a>
            </p>
            <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="wms"
                 class="absolute top-0 right-0 h-full w-full md:w-[60%] object-cover rounded-lg sm:rounded-2xl z-0">
        </div> -->
    <?}?>
<?endforeach;?>
