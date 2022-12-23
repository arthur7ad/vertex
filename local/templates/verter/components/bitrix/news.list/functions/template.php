<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
ob_start();
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
    $APPLICATION->SetTitle($arItem['NAME']);

    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));


    ?>


    <section class="sec-func-main">
        <? if ($arItem['PREVIEW_PICTURE']['SRC']) { ?>
            <img alt="<?= $arItem['NAME'] ?>" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" class="bg">
        <? } ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-10">
                    <h1 class="mb-0"><?= $arItem['NAME'] ?></h1>
                    <?
                    if ($arItem['PROPERTIES']['link']['VALUE']) {
                        ?>
                        <a href="<?= $arItem['PROPERTIES']['link']['VALUE'] ?>" type="button"
                           class="btn-2 аы-12 mt-3 mt-md-4 mt-lg-5"><?= $arItem['PROPERTIES']['link_name']['VALUE'] ?></a>
                    <? } ?>
                </div>
            </div>
        </div>
    </section>

    <section class="all-functions">
        <nav>
            <div class="fix">
                <ul class="list-unstyled accordion" id="accordionFunctions">

                    <?php
                    $IBLOCK_ID = 24;
                    $arFilter = array(
                        'IBLOCK_ID' => $IBLOCK_ID,
                        'GLOBAL_ACTIVE' => 'Y');
                    $arSelect = array(
                        "ID", "NAME"
                    );
                    $obSection = CIBlockSection::GetTreeList($arFilter);
                    $arIte = array();
                    while ($arResult = $obSection->GetNext()) {
                        $arIte[] = array("ID" => $arResult['ID'], "NAME" => $arResult['NAME'], "LVL" => $arResult['DEPTH_LEVEL']);

                    }
                    ?>

                    <?

                    foreach ($arIte as $key => $element) {
                        ?>
                        <li class="accordion-item">
                            <button id="but-<?= $element['ID'] ?>" class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse-<?= $element['ID'] ?>" aria-expanded="false">
                                <?= $element['NAME'] ?>
                            </button>

                            <div id="collapse-<?= $element['ID'] ?>" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionFunctions">
                                <div class="accordion-body">
                                    <ul class="list-unstyled">
                                        <?
                                        $arSelect2 = array(
                                            "ID", "NAME", "PROPERTY_name_cat"
                                        );
                                        $arFilter = array("IBLOCK_ID" => intval($IBLOCK_ID), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "SECTION_ID" => $element["ID"]);
                                        $res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect2);
                                        while ($ob = $res->GetNextElement()) {
                                            $arFields = $ob->GetFields();
                                            ?>
                                            <? if ($arFields['PROPERTY_NAME_CAT_VALUE']) { ?>
                                                <li>
                                                    <a href="<?= $arFields["ID"] ?>"><?=  $arFields['PROPERTY_NAME_CAT_VALUE'] ?></a>
                                                </li>

                                            <? } else { ?>
                                                <li><a href="<?= $arFields["ID"] ?>"><?= $arFields['NAME'] ?></a></li>

                                            <? } ?>

                                            <?
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <?

                    }

                    ?>
                </ul>
            </div>
        </nav>
        <div class="info funct-mar">
            <?= htmlspecialcharsBack($arItem['DETAIL_TEXT']) ?>
        </div>
    </section>
    <script>
        $(document).ready(function () {
            $("#collapse-<?=$arItem['IBLOCK_SECTION_ID']?>").addClass('show');
            $("#but-<?=$arItem['IBLOCK_SECTION_ID']?>").addClass('collapsed');
            $("#but-<?=$arItem['IBLOCK_SECTION_ID']?>").attr('aria-expanded', 'true');
        });

    </script>
<? } ?>
<?
$this->__component->arResult["CACHED_TPL"] = @ob_get_contents();
ob_get_clean();
?>