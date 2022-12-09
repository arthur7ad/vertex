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
            <figure class="dark">
                <img src="<?=SITE_TEMPLATE_PATH?>/imgs/production/1.png" alt="<?=$arItem['NAME']?>" class="img">
                <figcaption>
                    <div class="text">
                        <h2><?=$arItem['NAME']?></h2>
                        <p><?=$arItem['PREVIEW_TEXT']?></p>
                    </div>
                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="more">подробнее</a>
                </figcaption>
            </figure>
        </li>
        <!-- <div
                class="flex flex-col my-4 sm:my-[50px] h-fit sm:h-72 rounded-lg sm:rounded-2xl justify-between p-8 bg-white shadow-main w-full relative verter-left">
            <div class="block z-10 text-white">
                <p class="text-[26px] sm:text-5xl font-bold mb-4"><?=$arItem['NAME']?></p>
                <p class="text-sm sm:text-xl w-1/2 w-[240px]   sm:w-[380px] font-light"><?=$arItem['PREVIEW_TEXT']?></p>
            </div>
            <p class="text-sm sm:text-lg underline underline-offset-4 font-light z-10 text-white mt-4 sm:mt-0"><a
                        href="<?=$arItem['DETAIL_PAGE_URL']?>">Подробнее</a></p>
            <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="mes"
                 class="absolute top-0 left-0 h-full w-full object-cover rounded-lg sm:rounded-2xl z-0">
        </div> -->
    <?}elseif($k == 1){?>
        <li>
            <figure class="dark">
                <img src="<?=SITE_TEMPLATE_PATH?>/imgs/production/2.png" alt="<?=$arItem['NAME']?>" class="img">
                <figcaption>
                    <div class="text">
                        <h2><?=$arItem['NAME']?></h2>
                        <p><?=$arItem['PREVIEW_TEXT']?></p>
                    </div>
                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="more">подробнее</a>
                </figcaption>
            </figure>
        </li>
        <!-- <div class="flex flex-col gap-4 sm:gap-[50px] xl:flex-row mt-4 sm:mt-[50px] text-white">
            <div
                    class="flex flex-col h-fit sm:h-72 rounded-lg sm:rounded-2xl justify-between p-8 bg-white shadow-all w-full relative verter-right">
                <div class="block z-10">
                    <p class="text-[26px] sm:text-5xl font-bold mb-4"><?=$arItem['NAME']?></p>
                    <p class="text-sm sm:text-xl w-1/2   w-[240px]  sm:w-[480px] mb-4 font-light"><?=$arItem['PREVIEW_TEXT']?></p>
                </div>
                <p class="text-sm sm:text-lg font-light z-10">
                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="underline underline-offset-4">Подробнее</a>
                </p>
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="monitoring"
                     class="absolute rounded-lg sm:rounded-2xl top-0 left-0 h-full w-full object-cover z-0">
            </div> -->
    <?}elseif($k == 2){?>
        <li>
            <figure class="dark">
                <img src="<?=SITE_TEMPLATE_PATH?>/imgs/production/3.png" alt="<?=$arItem['NAME']?>" class="img">
                <figcaption>
                    <div class="text">
                        <h2><?=$arItem['NAME']?></h2>
                        <p><?=$arItem['PREVIEW_TEXT']?></p>
                    </div>
                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="more">подробнее</a>
                </figcaption>
            </figure>
        </li>
            <!-- <div
                    class="flex flex-col h-fit sm:h-72 text-white rounded-lg sm:rounded-2xl justify-between p-8  shadow-main w-full relative verter-left">
                <div class="block z-10 ">
                    <p class="text-[26px] sm:text-5xl font-bold mb-4"><?=$arItem['NAME']?></p>
                    <p class="text-sm sm:text-xl w-1/2 sm:w-[480px] mb-4"><?=$arItem['PREVIEW_TEXT']?></p>
                </div>
                <p class="text-sm sm:text-lg font-semibold z-10">
                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="underline underline-offset-4 cursor-pointer">Подробнее</a>
                </p>
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="infomat"
                     class="absolute right-0 bottom-0 h-full w-full object-cover z-0 rounded-lg sm:rounded-2xl">
            </div>
        </div> -->
    <?}elseif($k == 3){?>
        <li>
            <figure class="light">
                <img src="<?=SITE_TEMPLATE_PATH?>/imgs/production/4.png" alt="<?=$arItem['NAME']?>" class="img">
                <figcaption>
                    <div class="text">
                        <h2><?=$arItem['NAME']?></h2>
                        <p><?=$arItem['PREVIEW_TEXT']?></p>
                    </div>
                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="more">подробнее</a>
                </figcaption>
            </figure>
        </li>
        <!-- <div
                class="flex flex-col mt-4 sm:mt-[50px] h-fit rounded-lg sm:rounded-2xl justify-between p-8 bg-white  shadow-main w-full relative verter-right overflow-hidden">
            <div class="block z-10 ">
                <p class="text-[26px] w-[170px] sm:w-[inherit] sm:text-5xl font-bold mb-4 text-main-blue"><?=$arItem['NAME']?></p>
                <p
                        class="text-sm sm:text-xl w-full w-[240px]  sm:w-[380px] mb-4  sm:font-medium text-black font-mormal ">
                    <?=$arItem['PREVIEW_TEXT']?></p>
            </div>
            <p class="text-sm sm:text-lg font-light z-10 text-main-blue">
                <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="underline underline-offset-4 decoration-main-blue">Подробнее</a>
            </p>
            <div class="overflow-hidden h-full w-full">
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="wms" class="lg:block hidden absolute top-0  h-full w-full md:w-[60%]
                   object-cover rounded-lg sm:rounded-2xl z-0 right-[-200px] md:right-0">

                <img src="<?=$arItem['DETAIL_PICTURE']['SRC']?>" alt="wms" class="block lg:hidden absolute top-0  h-full w-full md:w-[60%]
                   object-cover rounded-lg sm:rounded-2xl z-0  md:right-0">

                <img src="<?=$arItem['DETAIL_PICTURE']['SRC']?>" alt="wms" class="block md:hidden absolute top-0  h-full w-full md:w-[60%]
                   object-cover rounded-lg sm:rounded-2xl z-0 right-[-200px] md:right-0">
            </div>
        </div> -->
    <?}elseif($k == 4){?>
        <li>
            <figure class="dark">
                <img src="<?=SITE_TEMPLATE_PATH?>/imgs/production/5.png" alt="<?=$arItem['NAME']?>" class="img">
                <figcaption>
                    <div class="text">
                        <h2><?=$arItem['NAME']?></h2>
                        <p><?=$arItem['PREVIEW_TEXT']?></p>
                    </div>
                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="more">подробнее</a>
                </figcaption>
            </figure>
        </li>
        <!-- <div class="flex flex-col gap-4 sm:gap-[50px] xl:flex-row mt-4 sm:mt-[50px] text-black">
            <div
                    class="flex flex-col h-fit sm:h-72  rounded-lg sm:rounded-2xl text-white justify-between p-8 mb-25 bg-white shadow-main w-full relative verter-left">
                <div class="block z-10 w-full sm:w-[350px]">
                    <p class="text-[26px] sm:text-5xl font-bold mb-4"><?=$arItem['NAME']?></p>
                    <p class="text-sm sm:text-xl mb-4 font-light"><?=$arItem['PREVIEW_TEXT']?></p>
                </div>
                <p class="text-sm sm:text-lg font-light z-10">
                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class=" underline underline-offset-4 ">Подробнее</a>
                </p>
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="monitoring"
                     class="absolute rounded-lg sm:rounded-2xl top-0 right-0 w-full h-full z-0">
            </div> -->
    <?}elseif($k == 5){?>
        <li>
            <figure class="light">
                <img src="<?=SITE_TEMPLATE_PATH?>/imgs/production/6.png" alt="<?=$arItem['NAME']?>" class="img">
                <figcaption>
                    <div class="text">
                        <h2><?=$arItem['NAME']?></h2>
                        <p><?=$arItem['PREVIEW_TEXT']?></p>
                    </div>
                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="more">подробнее</a>
                </figcaption>
            </figure>
        </li>
        <!-- <div
                class="flex flex-col h-fit sm:h-72 text-main-blue rounded-lg sm:rounded-2xl justify-between p-8 bg-white shadow-main w-full relative verter-right">
            <div class="block z-10 w-full sm:w-[500px] ">
                <p class="text-[26px] sm:text-5xl font-bold mb-4 "><?=$arItem['NAME']?></p>
                <p class="text-sm sm:text-xl mb-4  font-normal w-[230px] text-black"><?=$arItem['PREVIEW_TEXT']?></p>
            </div>
            <p class="text-sm sm:text-lg font-normal z-10 ">
                <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="underline  underline-offset-4">Подробнее</a>
            </p>
            <div
                    class="absolute right-[10px]  sm:right-[50px] bottom-0 w-[150px] sm:w-[200px] h-[150px] sm:h-[200px]">
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="infomat"
                     class="absolute right-0 bottom-0 2 h-full w-fit object-cover z-0 rounded-lg sm:rounded-2xl">
            </div>
        </div>
        </div> -->
    <?}?>
<?endforeach;?>
