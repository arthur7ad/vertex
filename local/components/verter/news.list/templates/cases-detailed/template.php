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
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));


    ?>


    <section class="sec-case-main mb-8">
        <img alt="<?= $arItem['NAME'] ?>" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" class="bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-11">
                    <div class="box">
                        <h1><?= $arItem['NAME'] ?></h1>
                        <p><?= htmlspecialcharsBack($arItem['PROPERTIES']['opis_banner']['VALUE']['TEXT']) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>



        <?php if(CFile::GetPath($arItem['PROPERTIES']['logo']['VALUE'])) { ?>
    <section class="sec-text container mb-8">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <img src="<?=CFile::GetPath($arItem['PROPERTIES']['logo']['VALUE'])?>" alt="<?= $arItem['PROPERTIES']['title1']['VALUE'] ?>" class="img-fluid mb-5">
            </div>
             <? if ($arItem['PROPERTIES']['title1']['VALUE']) {  ?>
             <div class="col-12 col-lg-10"><h2><?= $arItem['PROPERTIES']['title1']['VALUE'] ?></h2></div>
             <? } ?>
            <div class="col-12 col-lg-9">
                <p><?= htmlspecialcharsBack($arItem['PROPERTIES']['opis1']['VALUE']['TEXT']) ?></p>
            </div>
        </div>
    </section>
<?php } ?>
    <section class="sec-text container mb-8">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10"><h2><?= $arItem['PROPERTIES']['title2']['VALUE'] ?></h2></div>
            <div class="col-12 col-lg-9">
                <?= htmlspecialcharsBack($arItem['PROPERTIES']['opis2']['VALUE']['TEXT']); ?> </div>
        </div>
    </section>
<?php


    if($arItem['PROPERTIES']['showprod']['VALUE_XML_ID']==1){  ?>
    <section class="container mb-8">
        <h2 class="text-center">Какие продукты были внедрены</h2>
        <div class="grid-1">
            <? if(CFile::GetPath($arItem['PROPERTIES']['product1_img']['VALUE'])){?>
            <div class="card-capability">
                <figure>
                    <img src="<?=CFile::GetPath($arItem['PROPERTIES']['product1_img']['VALUE']);?>" alt="<?= $arItem['PROPERTIES']['product1_title']['VALUE'] ?>">
                    <figcaption><?= $arItem['PROPERTIES']['product1_title']['VALUE'] ?></figcaption>
                </figure>
                <div class="description">
                    <div>
                        <h5><?= $arItem['PROPERTIES']['product1_title']['VALUE'] ?></h5>

                        <p class="text"><?= htmlspecialcharsBack($arItem['PROPERTIES']['product1_opis']['VALUE']['TEXT']); ?></p>
                    </div>
                    <a class="btn-1 font-color" href="<?= $arItem['PROPERTIES']['product1_link']['VALUE'] ?>">подробнее</a>
                </div>
            </div>
            <? } ?>        <? if(CFile::GetPath($arItem['PROPERTIES']['product2_img']['VALUE'])){?>
            <div class="card-capability">
                <figure>
                    <img src="<?=CFile::GetPath($arItem['PROPERTIES']['product2_img']['VALUE']);?>" alt="<?= $arItem['PROPERTIES']['product2_title']['VALUE'] ?>">
                    <figcaption><?= $arItem['PROPERTIES']['product2_title']['VALUE'] ?></figcaption>
                </figure>
                <div class="description">
                    <div>
                        <h5><?= $arItem['PROPERTIES']['product2_title']['VALUE'] ?></h5>

                        <p class="text"><?= htmlspecialcharsBack($arItem['PROPERTIES']['product2_opis']['VALUE']['TEXT']); ?></p>
                    </div>
                    <a class="btn-1 font-color" href="<?= $arItem['PROPERTIES']['product2_link']['VALUE'] ?>">подробнее</a>
                </div>
            </div>
            <? } ?>        <? if(CFile::GetPath($arItem['PROPERTIES']['product3_img']['VALUE'])){?>
            <div class="card-capability">
                <figure>
                    <img src="<?=CFile::GetPath($arItem['PROPERTIES']['product3_img']['VALUE']);?>" alt="<?= $arItem['PROPERTIES']['product3_title']['VALUE'] ?>">
                    <figcaption><?= $arItem['PROPERTIES']['product3_title']['VALUE'] ?></figcaption>
                </figure>
                <div class="description">
                    <div>
                        <h5><?= $arItem['PROPERTIES']['product3_title']['VALUE'] ?></h5>

                        <p class="text"><?= htmlspecialcharsBack($arItem['PROPERTIES']['product3_opis']['VALUE']['TEXT']); ?></p>
                    </div>
                    <a class="btn-1 font-color" href="<?= $arItem['PROPERTIES']['product3_link']['VALUE'] ?>">подробнее</a>
                </div>
            </div>
            <? } ?>        <? if(CFile::GetPath($arItem['PROPERTIES']['product4_img']['VALUE'])){?>
            <div class="card-capability">
                <figure>
                    <img src="<?=CFile::GetPath($arItem['PROPERTIES']['product4_img']['VALUE']);?>" alt="<?= $arItem['PROPERTIES']['product4_title']['VALUE'] ?>">
                    <figcaption><?= $arItem['PROPERTIES']['product4_title']['VALUE'] ?></figcaption>
                </figure>
                <div class="description">
                    <div>
                        <h5><?= $arItem['PROPERTIES']['product5_title']['VALUE'] ?></h5>

                        <p class="text"><?= htmlspecialcharsBack($arItem['PROPERTIES']['product5_opis']['VALUE']['TEXT']); ?></p>
                    </div>
                    <a class="btn-1 font-color" href="<?= $arItem['PROPERTIES']['product5_link']['VALUE'] ?>">подробнее</a>
                </div>
            </div>
            <? } ?>        <? if(CFile::GetPath($arItem['PROPERTIES']['product5_img']['VALUE'])){?>
            <div class="card-capability">
                <figure>
                    <img src="<?=CFile::GetPath($arItem['PROPERTIES']['product5_img']['VALUE']);?>" alt="<?= $arItem['PROPERTIES']['product5_title']['VALUE'] ?>">
                    <figcaption><?= $arItem['PROPERTIES']['product5_title']['VALUE'] ?></figcaption>
                </figure>
                <div class="description">
                    <div>
                        <h5><?= $arItem['PROPERTIES']['product5_title']['VALUE'] ?></h5>

                        <p class="text"><?= htmlspecialcharsBack($arItem['PROPERTIES']['product5_opis']['VALUE']['TEXT']); ?></p>
                    </div>
                    <a class="btn-1 font-color" href="<?= $arItem['PROPERTIES']['product5_link']['VALUE'] ?>">подробнее</a>
                </div>
            </div>
            <? } ?>     <? if(CFile::GetPath($arItem['PROPERTIES']['product6_img']['VALUE'])){?>
            <div class="card-capability">
                <figure>
                    <img src="<?=CFile::GetPath($arItem['PROPERTIES']['product6_img']['VALUE']);?>" alt="<?= $arItem['PROPERTIES']['product6_title']['VALUE'] ?>">
                    <figcaption><?= $arItem['PROPERTIES']['product6_title']['VALUE'] ?></figcaption>
                </figure>
                <div class="description">
                    <div>
                        <h5><?= $arItem['PROPERTIES']['product6_title']['VALUE'] ?></h5>

                        <p class="text"><?= htmlspecialcharsBack($arItem['PROPERTIES']['product6_opis']['VALUE']['TEXT']); ?></p>
                    </div>
                    <a class="btn-1 font-color" href="<?= $arItem['PROPERTIES']['product6_link']['VALUE'] ?>">подробнее</a>
                </div>
            </div>
            <? } ?>

        </div>
    </section>
    <?php } ?>
    <?php
//    $arItem['PROPERTIES']['showcaz']['VALUE_XML_ID']); показывать ли табл

    ?>


<?php


if($arItem['PROPERTIES']['showrev']['VALUE_XML_ID']==1){  ?>
    <section class="sec-reviews mb-5">
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10"><h2>Отзывы</h2></div>
            </div>
        </div>
        <div class="swiper-reviews">
            <div class="swiper-wrapper">
                <? if ($arItem['PROPERTIES']['name_review1']['VALUE']) { ?>
                <div class="swiper-slide">
                    <div class="review">
                        <div class="top">
                            <? if(CFile::GetPath($arItem['PROPERTIES']['foto_review1']['VALUE'])){?>
                                <img src="<?=CFile::GetPath($arItem['PROPERTIES']['foto_review1']['VALUE'])?>" alt="<?= $arItem['PROPERTIES']['name_review1']['VALUE'] ?>">
                           <? } else { ?>
                                <img src="/local/templates/verter/imgs/no-photo.png" alt="">
                            <? }?>
                            <div>
                                <h5><?= $arItem['PROPERTIES']['name_review1']['VALUE'] ?></h5>
                                <? if($arItem['PROPERTIES']['status_review1']['VALUE']){?>   <p><?= $arItem['PROPERTIES']['status_review1']['VALUE'] ?></p> <? } ?>
                                <? if($arItem['PROPERTIES']['link_review1']['VALUE']){?> <a href="<?= $arItem['PROPERTIES']['link_review1']['VALUE'] ?>"><?= $arItem['PROPERTIES']['link_review1']['VALUE'] ?></a> <? } ?>
                            </div>
                        </div>
                        <blockquote>
                            <p><?= htmlspecialcharsBack($arItem['PROPERTIES']['review1']['VALUE']['TEXT']); ?></p>
                        </blockquote>
                    </div>
                </div>
                <? } if ($arItem['PROPERTIES']['name_review2']['VALUE']) { ?>
                <div class="swiper-slide">
                    <div class="review">
                        <div class="top">
                            <? if(CFile::GetPath($arItem['PROPERTIES']['foto_review2']['VALUE'])){?>
                                <img src="<?=CFile::GetPath($arItem['PROPERTIES']['foto_review2']['VALUE'])?>" alt="<?= $arItem['PROPERTIES']['name_review2']['VALUE'] ?>">
                           <? } else { ?>
                                <img src="/local/templates/verter/imgs/no-photo.png" alt="">
                            <? }?>
                            <div>
                                <h5><?= $arItem['PROPERTIES']['name_review2']['VALUE'] ?></h5>
                                <? if($arItem['PROPERTIES']['status_review2']['VALUE']){?>   <p><?= $arItem['PROPERTIES']['status_review2']['VALUE'] ?></p> <? } ?>
                                <? if($arItem['PROPERTIES']['link_review2']['VALUE']){?> <a href="<?= $arItem['PROPERTIES']['link_review2']['VALUE'] ?>"><?= $arItem['PROPERTIES']['link_review2']['VALUE'] ?></a> <? } ?>
                            </div>
                        </div>
                        <blockquote>
                            <p><?= htmlspecialcharsBack($arItem['PROPERTIES']['review2']['VALUE']['TEXT']); ?></p>
                        </blockquote>
                    </div>
                </div>
                <? } if ($arItem['PROPERTIES']['name_review3']['VALUE']) { ?>
                <div class="swiper-slide">
                    <div class="review">
                        <div class="top">
                            <? if(CFile::GetPath($arItem['PROPERTIES']['foto_review3']['VALUE'])){?>
                                <img src="<?=CFile::GetPath($arItem['PROPERTIES']['foto_review3']['VALUE'])?>" alt="<?= $arItem['PROPERTIES']['name_review3']['VALUE'] ?>">
                           <? } else { ?>
                                <img src="/local/templates/verter/imgs/no-photo.png" alt="">
                            <? }?>
                            <div>
                                <h5><?= $arItem['PROPERTIES']['name_review3']['VALUE'] ?></h5>
                                <? if($arItem['PROPERTIES']['status_review3']['VALUE']){?>   <p><?= $arItem['PROPERTIES']['status_review3']['VALUE'] ?></p> <? } ?>
                                <? if($arItem['PROPERTIES']['link_review3']['VALUE']){?> <a href="<?= $arItem['PROPERTIES']['link_review3']['VALUE'] ?>"><?= $arItem['PROPERTIES']['link_review3']['VALUE'] ?></a> <? } ?>
                            </div>
                        </div>
                        <blockquote>
                            <p><?= htmlspecialcharsBack($arItem['PROPERTIES']['review3']['VALUE']['TEXT']); ?></p>
                        </blockquote>
                    </div>
                </div>
                <? } if ($arItem['PROPERTIES']['name_review4']['VALUE']) { ?>
                <div class="swiper-slide">
                    <div class="review">
                        <div class="top">
                            <? if(CFile::GetPath($arItem['PROPERTIES']['foto_review4']['VALUE'])){?>
                                <img src="<?=CFile::GetPath($arItem['PROPERTIES']['foto_review4']['VALUE'])?>" alt="<?= $arItem['PROPERTIES']['name_review4']['VALUE'] ?>">
                           <? } else { ?>
                                <img src="/local/templates/verter/imgs/no-photo.png" alt="">
                            <? }?>
                            <div>
                                <h5><?= $arItem['PROPERTIES']['name_review4']['VALUE'] ?></h5>
                                <? if($arItem['PROPERTIES']['status_review4']['VALUE']){?>   <p><?= $arItem['PROPERTIES']['status_review4']['VALUE'] ?></p> <? } ?>
                                <? if($arItem['PROPERTIES']['link_review4']['VALUE']){?> <a href="<?= $arItem['PROPERTIES']['link_review4']['VALUE'] ?>"><?= $arItem['PROPERTIES']['link_review4']['VALUE'] ?></a> <? } ?>
                            </div>
                        </div>
                        <blockquote>
                            <p><?= htmlspecialcharsBack($arItem['PROPERTIES']['review4']['VALUE']['TEXT']); ?></p>
                        </blockquote>
                    </div>
                </div>
                <? } if ($arItem['PROPERTIES']['name_review5']['VALUE']) { ?>
                <div class="swiper-slide">
                    <div class="review">
                        <div class="top">
                            <? if (CFile::GetPath($arItem['PROPERTIES']['foto_review5']['VALUE'])) { ?>
                                <img src="<?= CFile::GetPath($arItem['PROPERTIES']['foto_review5']['VALUE']) ?>"
                                     alt="<?= $arItem['PROPERTIES']['name_review5']['VALUE'] ?>">
                            <? } else { ?>
                                <img src="/local/templates/verter/imgs/no-photo.png" alt="">
                            <? } ?>
                            <div>
                                <h5><?= $arItem['PROPERTIES']['name_review5']['VALUE'] ?></h5>
                                <? if ($arItem['PROPERTIES']['status_review5']['VALUE']) { ?>
                                    <p><?= $arItem['PROPERTIES']['status_review5']['VALUE'] ?></p> <? } ?>
                                <? if ($arItem['PROPERTIES']['link_review5']['VALUE']) { ?> <a
                                        href="<?= $arItem['PROPERTIES']['link_review5']['VALUE'] ?>"><?= $arItem['PROPERTIES']['link_review5']['VALUE'] ?></a> <? } ?>
                            </div>
                        </div>
                        <blockquote>
                            <p><?= htmlspecialcharsBack($arItem['PROPERTIES']['review5']['VALUE']['TEXT']); ?></p>
                        </blockquote>
                    </div>
                </div>
                <? } ?>
            </div>
        </div>
    </section>
<?php } ?>

    <section class="sec-phases container mb-8">
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-lg-10"><h2>Этапы внедрения</h2></div>
            <div class="col-12 col-lg-9"><p class="fs-12"><?= htmlspecialcharsBack($arItem['PROPERTIES']['opisstep']['VALUE']['TEXT']); ?></p></div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-12 col-lg-10">
                <h3><?=$arItem['PROPERTIES']['namestep1']['VALUE']?></h3>
            </div>
            <div class="col-12 col-lg-9">
                <?= htmlspecialcharsBack($arItem['PROPERTIES']['opisstep1']['VALUE']['TEXT']); ?>
                 <div class="position-relative mb-5">
                    <div class="swiper-gallery">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/local/templates/verter/imgs/img-5.png" alt="1 этап">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/templates/verter/imgs/img-4.png" alt="1 этап">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/templates/verter/imgs/img-6.png" alt="1 этап">
                            </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                <p>Чтобы ускорить и автоматизировать работу по приемке и отгрузке товаров со склада, руководство компании «АСТЕРА» приняло решение оснастить кладовщиков ТСД. Так как на каждом складе по одному человеку в смене, не имеющему возможности одновременно работать за компьютером и на погрузке\отгрузке, то в приоритете была синхронизация с базой 1С по Wi-Fi.</p>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-12 col-lg-10">
                <h3>2 этап</h3>
            </div>
            <div class="col-12 col-lg-9">
                <h5>Проведена адаптация системы 1С:ТОИР 2 КОРП под бизнес-процессы</h5>
                <p>Созданы 12 новых печатных форм и 12 специализированных KPI. Выполнена интеграция в ИТ-инфраструктуру предприятия посредством обмена данными.</p>
                <iframe class="mb-5" width="100%" height="320" src="https://www.youtube.com/embed/W9nZ6u15yis" title="Black Screen 10 seconds" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>Операции по товарному учёту — пересчёт остатков, приёмка и отгрузка — выполнялись вручную, без использования терминалов сбора данных. Точность учёта полностью зависела от внимательности сотрудников, что периодически приводило к ошибкам в данных по остаткам на складе. В будущем планировалось организовать систему адресного хранения.</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <h3>3 этап</h3>
            </div>
            <div class="col-12 col-lg-9">
                <h5>Опытно-промышленная эксплуатация</h5>
                <p>Этап проходил с конца ноября 2020-го до конца марта 2021 года (4 месяца). На этом этапе была запущена и отлажена система в производственных условиях.</p>
                <img src="/local/templates/verter/imgs/img-6.png" alt="1 этап" class="mb-5">
                <p>Операции по товарному учёту — пересчёт остатков, приёмка и отгрузка — выполнялись вручную, без использования терминалов сбора данных. Точность учёта полностью зависела от внимательности сотрудников, что периодически приводило к ошибкам в данных по остаткам на складе. В будущем планировалось организовать систему адресного хранения.</p>
            </div>
        </div>
    </section>


    <?php

    /*
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
    */
?>

<? } ?>
<?
$this->__component->arResult["CACHED_TPL"] = @ob_get_contents();
ob_get_clean();
?>