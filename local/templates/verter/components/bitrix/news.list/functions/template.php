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
                   if($arItem['PROPERTIES']['link']['VALUE']){?>
                       <a href="<?$arItem['PROPERTIES']['link']['VALUE']?>" type="button" class="btn-2 аы-12 mt-3 mt-md-4 mt-lg-5"><?=$arItem['PROPERTIES']['link_name']['VALUE']?></a>
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
                    $arSelect = array();
                    $x = 0;
                    $arr = array();
                    foreach ($arIte as $key => $element) {
?>
                <li class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?=$key?>" aria-expanded="false">
                     <?=$element['NAME']?>
                    </button>

                    <div id="collapse-<?=$key?>" class="accordion-collapse collapse" data-bs-parent="#accordionFunctions">
                         <div class="accordion-body">
                    <ul class="list-unstyled">
<?

                        $arFilter = array("IBLOCK_ID" => IntVal($IBLOCK_ID), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "SECTION_ID" => $element["ID"]);
                        $res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
                        while ($ob = $res->GetNextElement()) {
                            $arFields = $ob->GetFields();
                            ?>

                            <li> <?= $arFields["NAME"] ?></li>

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

<!--                <li class="accordion-item">-->
                <!--                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true">-->
                <!--                        ТСД терминал сбора данных-->
                <!--                    </button>-->
                <!--                    <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordionFunctions">-->
                <!--                        <div class="accordion-body">-->
                <!--                            <ul class="list-unstyled">-->
                <!--                                <li><a href="">Мобильные операции, основные</a></li>-->
                <!--                                <li><a href="">Мобильные операции, табак</a></li>-->
                <!--                                <li><a href="">Варианты работы</a></li>-->
                <!--                                <li><a href="">Работа с документами</a></li>-->
                <!--                                <li><a href="">Работа с ячейками</a></li>-->
                <!--                            </ul>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </li>-->
                <!--                <li class="accordion-item">-->
                <!--                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false">-->
                <!--                        WMS система-->
                <!--                    </button>-->
                <!--                    <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionFunctions">-->
                <!--                        <div class="accordion-body">-->
                <!--                            <ul class="list-unstyled">-->
                <!--                                <li><a href="">Мобильные операции, основные</a></li>-->
                <!--                                <li><a href="">Мобильные операции, табак</a></li>-->
                <!--                                <li><a href="">Варианты работы</a></li>-->
                <!--                                <li><a href="">Работа с документами</a></li>-->
                <!--                                <li><a href="">Работа с ячейками</a></li>-->
                <!--                            </ul>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </li>-->
                <!--                <li class="accordion-item">-->
                <!--                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false">-->
                <!--                        Инфомат-->
                <!--                    </button>-->
                <!--                    <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionFunctions">-->
                <!--                        <div class="accordion-body">-->
                <!--                            <ul class="list-unstyled">-->
                <!--                                <li><a href="">Мобильные операции, основные</a></li>-->
                <!--                                <li><a href="">Мобильные операции, табак</a></li>-->
                <!--                                <li><a href="">Варианты работы</a></li>-->
                <!--                                <li><a href="">Работа с документами</a></li>-->
                <!--                                <li><a href="">Работа с ячейками</a></li>-->
                <!--                            </ul>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </li>-->
                <!--                <li class="accordion-item">-->
                <!--                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false">-->
                <!--                        Центр мониторинга-->
                <!--                    </button>-->
                <!--                    <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionFunctions">-->
                <!--                        <div class="accordion-body">-->
                <!--                            <ul class="list-unstyled">-->
                <!--                                <li><a href="">Мобильные операции, основные</a></li>-->
                <!--                                <li><a href="">Мобильные операции, табак</a></li>-->
                <!--                                <li><a href="">Варианты работы</a></li>-->
                <!--                                <li><a href="">Работа с документами</a></li>-->
                <!--                                <li><a href="">Работа с ячейками</a></li>-->
                <!--                            </ul>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </li>-->
                <!--                <li class="accordion-item">-->
                <!--                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false">-->
                <!--                        Электронная очередь-->
                <!--                    </button>-->
                <!--                    <div id="collapse-5" class="accordion-collapse collapse" data-bs-parent="#accordionFunctions">-->
                <!--                        <div class="accordion-body">-->
                <!--                            <ul class="list-unstyled">-->
                <!--                                <li><a href="">Мобильные операции, основные</a></li>-->
                <!--                                <li><a href="">Мобильные операции, табак</a></li>-->
                <!--                                <li><a href="">Варианты работы</a></li>-->
                <!--                                <li><a href="">Работа с документами</a></li>-->
                <!--                                <li><a href="">Работа с ячейками</a></li>-->
                <!--                            </ul>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </li>-->
                <!--                <li class="accordion-item">-->
                <!--                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false">-->
                <!--                        Модуль для 1С-->
                <!--                    </button>-->
                <!--                    <div id="collapse-6" class="accordion-collapse collapse" data-bs-parent="#accordionFunctions">-->
                <!--                        <div class="accordion-body">-->
                <!--                            <ul class="list-unstyled">-->
                <!--                                <li><a href="">Мобильные операции, основные</a></li>-->
                <!--                                <li><a href="">Мобильные операции, табак</a></li>-->
                <!--                                <li><a href="">Варианты работы</a></li>-->
                <!--                                <li><a href="">Работа с документами</a></li>-->
                <!--                                <li><a href="">Работа с ячейками</a></li>-->
                <!--                            </ul>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </li>-->
            </ul>
            </div>
        </nav>
        <div class="info funct-mar">
                <?= htmlspecialcharsBack($arItem['DETAIL_TEXT']) ?>
        </div>
    </section>
<? } ?>
<?
$this->__component->arResult["CACHED_TPL"] = @ob_get_contents();
ob_get_clean();
?>