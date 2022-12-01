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
    <li>
        <div class="news-preview">
            <h5><?=$arItem['NAME']?></h5>
            <p><?=$arItem['PREVIEW_TEXT']?></p>
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="more">Подробнее</a>
        </div>
    </li>
<?endforeach;?>