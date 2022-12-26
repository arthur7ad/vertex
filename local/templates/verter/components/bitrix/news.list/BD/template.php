<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<? foreach ($arResult["ITEMS"] as $k => $arItem): ?>

    <div>
        <?

        if ($arItem['PROPERTIES']['effect']['VALUE_XML_ID'] == 2) { ?>
        <figure class="gradient">
            <? } elseif ($arItem['PROPERTIES']['effect']['VALUE_XML_ID'] == 3){
            ?>
            <figure class="bg-img">
                <? } else { ?>
                <figure>
                    <? } ?>

                    <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arItem['NAME'] ?>">
                    <figcaption><?= $arItem['NAME'] ?></figcaption>
                </figure>
                <p><?= $arItem['PREVIEW_TEXT'] ?></p>
                <?  if ($arItem['PROPERTIES']['link']['VALUE']) { ?>
                    <a href="/article/<?=$arItem['PROPERTIES']['link']['VALUE']?>" class="more">подробнее</a>
                <? } else {?>
                    <a href="#" class="more">подробнее</a>
                <? } ?>
    </div>


<? endforeach; ?>
