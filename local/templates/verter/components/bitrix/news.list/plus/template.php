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

<? foreach ($arResult["ITEMS"] as $k => $arItem) { ?>
    <?php
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));


    ?>
    <div id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
        <div class="container mb-4 mb-sm-5">
            <div class="row gy-4 justify-content-center">
                <div class="col-12 col-lg-10">
                    <h3><?= $arItem['NAME'] ?></h3>
                </div>
                <div class="col-12 col-lg-10">
                    <p class="fs-15 ps-md-5">
                        <?= $arItem['PREVIEW_TEXT'] ?>   </p>
                </div>
            </div>
        </div>
        <div class="sec-benefits-gradient">
            <img alt="Плюсы внедрения адресного склада" src="/local/templates/verter/imgs/bg/benefits.png">
            <div class="container">
                <div class="row justify-content-center align-items-end">
                    <div class="col-12 col-lg-10">
                        <h2 class="mb-0">Плюсы <br class="d-none d-md-inline">
                            внедрения <br>
                            адресного <br class="d-none d-md-inline">
                            склада</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4 mt-sm-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <ul class="list-unstyled">
                        <? if ($arItem['PROPERTIES']['plus1']['VALUE']) {
                            echo '<li>' . $arItem['PROPERTIES']['plus1']['VALUE'] . '</li>';
                        } ?>
                        <? if ($arItem['PROPERTIES']['plus2']['VALUE']) {
                            echo '<li>' . $arItem['PROPERTIES']['plus2']['VALUE'] . '</li>';
                        } ?>
                        <? if ($arItem['PROPERTIES']['plus3']['VALUE']) {
                            echo '<li>' . $arItem['PROPERTIES']['plus3']['VALUE'] . '</li>';
                        } ?>
                        <? if ($arItem['PROPERTIES']['plus4']['VALUE']) {
                            echo '<li>' . $arItem['PROPERTIES']['plus4']['VALUE'] . '</li>';
                        } ?>
                        <? if ($arItem['PROPERTIES']['plus5']['VALUE']) {
                            echo '<li>' . $arItem['PROPERTIES']['plus5']['VALUE'] . '</li>';
                        } ?>
                        <? if ($arItem['PROPERTIES']['plus6']['VALUE']) {
                            echo '<li>' . $arItem['PROPERTIES']['plus6']['VALUE'] . '</li>';
                        } ?>
                        <? if ($arItem['PROPERTIES']['plus7']['VALUE']) {
                            echo '<li>' . $arItem['PROPERTIES']['plus7']['VALUE'] . '</li>';
                        } ?>
                        <? if ($arItem['PROPERTIES']['plus8']['VALUE']) {
                            echo '<li>' . $arItem['PROPERTIES']['plus8']['VALUE'] . '</li>';
                        } ?>
                        <? if ($arItem['PROPERTIES']['plus9']['VALUE']) {
                            echo '<li>' . $arItem['PROPERTIES']['plus9']['VALUE'] . '</li>';
                        } ?>
                        <? if ($arItem['PROPERTIES']['plus10']['VALUE']) {
                            echo '<li>' . $arItem['PROPERTIES']['plus10']['VALUE'] . '</li>';
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>


<? } ?>
