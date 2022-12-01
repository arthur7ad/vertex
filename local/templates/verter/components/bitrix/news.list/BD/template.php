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
        <div>
            <figure class="gradient">
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>">
                <figcaption><?=$arItem['NAME']?></figcaption>
            </figure>
            <p><?=$arItem['PREVIEW_TEXT']?></p>
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="more">подробнее</a>
        </div>
    <?}elseif($k == 1){?>
        <div>
            <figure>
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>">
                <figcaption><?=$arItem['NAME']?></figcaption>
            </figure>
            <p><?=$arItem['PREVIEW_TEXT']?></p>
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="more">подробнее</a>
        </div>
    <?}elseif($k == 2){?>
        <div>
            <figure>
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>">
                <figcaption><?=$arItem['NAME']?></figcaption>
            </figure>
            <p><?=$arItem['PREVIEW_TEXT']?></p>
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="more">подробнее</a>
        </div>
    <?}elseif($k == 3){?>
        <div>
            <figure class="gradient">
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>">
                <figcaption><?=$arItem['NAME']?></figcaption>
            </figure>
            <p><?=$arItem['PREVIEW_TEXT']?></p>
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="more">подробнее</a>
        </div>
    <?}elseif($k == 4){?>
        <div>
            <figure class="bg-img">
                <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>">
                <figcaption><?=$arItem['NAME']?></figcaption>
            </figure>
            <p><?=$arItem['PREVIEW_TEXT']?></p>
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="more">подробнее</a>
        </div>
    <?}?>
<?endforeach;?>
