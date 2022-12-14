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


    <section class="sec-case-main mb-8">
        <? if ($arItem['PREVIEW_PICTURE']['SRC']) { ?>
            <img alt="<?= $arItem['NAME'] ?>" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" class="bg">
        <? } ?>
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


    <?php if (CFile::GetPath($arItem['PROPERTIES']['logo']['VALUE'])) { ?>
        <section class="sec-text container mb-8">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <img src="<?= CFile::GetPath($arItem['PROPERTIES']['logo']['VALUE']) ?>"
                         alt="<?= $arItem['PROPERTIES']['title1']['VALUE'] ?>" class="img-fluid mb-5">
                </div>
                <? if ($arItem['PROPERTIES']['title1']['VALUE']) { ?>
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
    if ($arItem['PROPERTIES']['showcaz']['VALUE_XML_ID'] == 1) { ?>
        <section class="sec-blue mb-8">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10"><h2><?= $arItem['PROPERTIES']['title_table1']['VALUE'] ?></h2></div>
                    <div class="col-12 col-lg-9">
                        <p class="fs-12 lh-17"><?= htmlspecialcharsBack($arItem['PROPERTIES']['opis_table1']['VALUE']['TEXT']); ?></p>
                    </div>
                </div>
            </div>

            <div class="simple-table mt-4 mb-8"><?= htmlspecialcharsBack($arItem['PROPERTIES']['table1']['VALUE']['TEXT']); ?>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <h2><?= $arItem['PROPERTIES']['title_table2']['VALUE'] ?></h2>
                    </div>
                    <div class="col-12 col-lg-9">
                        <p class="fs-12 lh-17"><?= htmlspecialcharsBack($arItem['PROPERTIES']['opis_table2']['VALUE']['TEXT']); ?></p>
                    </div>
                </div>
            </div>

            <div class="simple-table mt-4"> <?= htmlspecialcharsBack($arItem['PROPERTIES']['table2']['VALUE']['TEXT']); ?>
            </div>
        </section>

    <?php } ?>

    <?php


    if ($arItem['PROPERTIES']['showprod']['VALUE_XML_ID'] == 1) { ?>
        <section class="container mb-8">
            <h2 class="text-center">Какие продукты были внедрены</h2>
            <div class="grid-1">
                <? if (CFile::GetPath($arItem['PROPERTIES']['product1_img']['VALUE'])) { ?>
                    <div class="card-capability">
                        <figure>
                            <img src="<?= CFile::GetPath($arItem['PROPERTIES']['product1_img']['VALUE']); ?>"
                                 alt="<?= $arItem['PROPERTIES']['product1_title']['VALUE'] ?>">
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
                <? } ?>        <? if (CFile::GetPath($arItem['PROPERTIES']['product2_img']['VALUE'])) { ?>
                    <div class="card-capability">
                        <figure>
                            <img src="<?= CFile::GetPath($arItem['PROPERTIES']['product2_img']['VALUE']); ?>"
                                 alt="<?= $arItem['PROPERTIES']['product2_title']['VALUE'] ?>">
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
                <? } ?>        <? if (CFile::GetPath($arItem['PROPERTIES']['product3_img']['VALUE'])) { ?>
                    <div class="card-capability">
                        <figure>
                            <img src="<?= CFile::GetPath($arItem['PROPERTIES']['product3_img']['VALUE']); ?>"
                                 alt="<?= $arItem['PROPERTIES']['product3_title']['VALUE'] ?>">
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
                <? } ?>        <? if (CFile::GetPath($arItem['PROPERTIES']['product4_img']['VALUE'])) { ?>
                    <div class="card-capability">
                        <figure>
                            <img src="<?= CFile::GetPath($arItem['PROPERTIES']['product4_img']['VALUE']); ?>"
                                 alt="<?= $arItem['PROPERTIES']['product4_title']['VALUE'] ?>">
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
                <? } ?>        <? if (CFile::GetPath($arItem['PROPERTIES']['product5_img']['VALUE'])) { ?>
                    <div class="card-capability">
                        <figure>
                            <img src="<?= CFile::GetPath($arItem['PROPERTIES']['product5_img']['VALUE']); ?>"
                                 alt="<?= $arItem['PROPERTIES']['product5_title']['VALUE'] ?>">
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
                <? } ?>     <? if (CFile::GetPath($arItem['PROPERTIES']['product6_img']['VALUE'])) { ?>
                    <div class="card-capability">
                        <figure>
                            <img src="<?= CFile::GetPath($arItem['PROPERTIES']['product6_img']['VALUE']); ?>"
                                 alt="<?= $arItem['PROPERTIES']['product6_title']['VALUE'] ?>">
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


    if ($arItem['PROPERTIES']['showrev']['VALUE_XML_ID'] == 1) { ?>
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
                                    <? if (CFile::GetPath($arItem['PROPERTIES']['foto_review1']['VALUE'])) { ?>
                                        <img src="<?= CFile::GetPath($arItem['PROPERTIES']['foto_review1']['VALUE']) ?>"
                                             alt="<?= $arItem['PROPERTIES']['name_review1']['VALUE'] ?>">
                                    <? } else { ?>
                                        <img src="/local/templates/verter/imgs/no-photo.png" alt="">
                                    <? } ?>
                                    <div>
                                        <h5><?= $arItem['PROPERTIES']['name_review1']['VALUE'] ?></h5>
                                        <? if ($arItem['PROPERTIES']['status_review1']['VALUE']) { ?>
                                            <p><?= $arItem['PROPERTIES']['status_review1']['VALUE'] ?></p> <? } ?>
                                        <? if ($arItem['PROPERTIES']['link_review1']['VALUE']) { ?> <a
                                                href="<?= $arItem['PROPERTIES']['link_review1']['VALUE'] ?>"><?= $arItem['PROPERTIES']['link_review1']['VALUE'] ?></a> <? } ?>
                                    </div>
                                </div>
                                <blockquote>
                                    <p><?= htmlspecialcharsBack($arItem['PROPERTIES']['review1']['VALUE']['TEXT']); ?></p>
                                </blockquote>
                            </div>
                        </div>
                    <? }
                    if ($arItem['PROPERTIES']['name_review2']['VALUE']) { ?>
                        <div class="swiper-slide">
                            <div class="review">
                                <div class="top">
                                    <? if (CFile::GetPath($arItem['PROPERTIES']['foto_review2']['VALUE'])) { ?>
                                        <img src="<?= CFile::GetPath($arItem['PROPERTIES']['foto_review2']['VALUE']) ?>"
                                             alt="<?= $arItem['PROPERTIES']['name_review2']['VALUE'] ?>">
                                    <? } else { ?>
                                        <img src="/local/templates/verter/imgs/no-photo.png" alt="">
                                    <? } ?>
                                    <div>
                                        <h5><?= $arItem['PROPERTIES']['name_review2']['VALUE'] ?></h5>
                                        <? if ($arItem['PROPERTIES']['status_review2']['VALUE']) { ?>
                                            <p><?= $arItem['PROPERTIES']['status_review2']['VALUE'] ?></p> <? } ?>
                                        <? if ($arItem['PROPERTIES']['link_review2']['VALUE']) { ?> <a
                                                href="<?= $arItem['PROPERTIES']['link_review2']['VALUE'] ?>"><?= $arItem['PROPERTIES']['link_review2']['VALUE'] ?></a> <? } ?>
                                    </div>
                                </div>
                                <blockquote>
                                    <p><?= htmlspecialcharsBack($arItem['PROPERTIES']['review2']['VALUE']['TEXT']); ?></p>
                                </blockquote>
                            </div>
                        </div>
                    <? }
                    if ($arItem['PROPERTIES']['name_review3']['VALUE']) { ?>
                        <div class="swiper-slide">
                            <div class="review">
                                <div class="top">
                                    <? if (CFile::GetPath($arItem['PROPERTIES']['foto_review3']['VALUE'])) { ?>
                                        <img src="<?= CFile::GetPath($arItem['PROPERTIES']['foto_review3']['VALUE']) ?>"
                                             alt="<?= $arItem['PROPERTIES']['name_review3']['VALUE'] ?>">
                                    <? } else { ?>
                                        <img src="/local/templates/verter/imgs/no-photo.png" alt="">
                                    <? } ?>
                                    <div>
                                        <h5><?= $arItem['PROPERTIES']['name_review3']['VALUE'] ?></h5>
                                        <? if ($arItem['PROPERTIES']['status_review3']['VALUE']) { ?>
                                            <p><?= $arItem['PROPERTIES']['status_review3']['VALUE'] ?></p> <? } ?>
                                        <? if ($arItem['PROPERTIES']['link_review3']['VALUE']) { ?> <a
                                                href="<?= $arItem['PROPERTIES']['link_review3']['VALUE'] ?>"><?= $arItem['PROPERTIES']['link_review3']['VALUE'] ?></a> <? } ?>
                                    </div>
                                </div>
                                <blockquote>
                                    <p><?= htmlspecialcharsBack($arItem['PROPERTIES']['review3']['VALUE']['TEXT']); ?></p>
                                </blockquote>
                            </div>
                        </div>
                    <? }
                    if ($arItem['PROPERTIES']['name_review4']['VALUE']) { ?>
                        <div class="swiper-slide">
                            <div class="review">
                                <div class="top">
                                    <? if (CFile::GetPath($arItem['PROPERTIES']['foto_review4']['VALUE'])) { ?>
                                        <img src="<?= CFile::GetPath($arItem['PROPERTIES']['foto_review4']['VALUE']) ?>"
                                             alt="<?= $arItem['PROPERTIES']['name_review4']['VALUE'] ?>">
                                    <? } else { ?>
                                        <img src="/local/templates/verter/imgs/no-photo.png" alt="">
                                    <? } ?>
                                    <div>
                                        <h5><?= $arItem['PROPERTIES']['name_review4']['VALUE'] ?></h5>
                                        <? if ($arItem['PROPERTIES']['status_review4']['VALUE']) { ?>
                                            <p><?= $arItem['PROPERTIES']['status_review4']['VALUE'] ?></p> <? } ?>
                                        <? if ($arItem['PROPERTIES']['link_review4']['VALUE']) { ?> <a
                                                href="<?= $arItem['PROPERTIES']['link_review4']['VALUE'] ?>"><?= $arItem['PROPERTIES']['link_review4']['VALUE'] ?></a> <? } ?>
                                    </div>
                                </div>
                                <blockquote>
                                    <p><?= htmlspecialcharsBack($arItem['PROPERTIES']['review4']['VALUE']['TEXT']); ?></p>
                                </blockquote>
                            </div>
                        </div>
                    <? }
                    if ($arItem['PROPERTIES']['name_review5']['VALUE']) { ?>
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

    <?php if ($arItem['PROPERTIES']['showstep']['VALUE_XML_ID'] == 1) { ?>
        <section class="sec-phases container mb-8">
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-lg-10"><h2>Этапы внедрения</h2></div>
                <div class="col-12 col-lg-9"><p
                            class="fs-12"><?= htmlspecialcharsBack($arItem['PROPERTIES']['opisstep']['VALUE']['TEXT']); ?></p>
                </div>
            </div>
            <? if ($arItem['PROPERTIES']['namestep1']['VALUE']) { ?>
                <div class="row justify-content-center mb-5">
                    <div class="col-12 col-lg-10">
                        <h3><?= $arItem['PROPERTIES']['namestep1']['VALUE'] ?></h3>
                    </div>
                    <div class="col-12 col-lg-9">
                        <?= htmlspecialcharsBack($arItem['PROPERTIES']['opisstep1']['VALUE']['TEXT']); ?>
                    </div>
                </div>
            <? }
            if ($arItem['PROPERTIES']['namestep2']['VALUE']) { ?>
                <div class="row justify-content-center mb-5">
                    <div class="col-12 col-lg-10">
                        <h3><?= $arItem['PROPERTIES']['namestep2']['VALUE'] ?></h3>
                    </div>
                    <div class="col-12 col-lg-9">
                        <?= htmlspecialcharsBack($arItem['PROPERTIES']['opisstep2']['VALUE']['TEXT']); ?>
                    </div>
                </div>
            <? }
            if ($arItem['PROPERTIES']['namestep3']['VALUE']) { ?>
                <div class="row justify-content-center mb-5">
                    <div class="col-12 col-lg-10">
                        <h3><?= $arItem['PROPERTIES']['namestep3']['VALUE'] ?></h3>
                    </div>
                    <div class="col-12 col-lg-9">
                        <?= htmlspecialcharsBack($arItem['PROPERTIES']['opisstep3']['VALUE']['TEXT']); ?>
                    </div>
                </div>
            <? }
            if ($arItem['PROPERTIES']['namestep4']['VALUE']) { ?>
                <div class="row justify-content-center mb-5">
                    <div class="col-12 col-lg-10">
                        <h3><?= $arItem['PROPERTIES']['namestep4']['VALUE'] ?></h3>
                    </div>
                    <div class="col-12 col-lg-9">
                        <?= htmlspecialcharsBack($arItem['PROPERTIES']['opisstep4']['VALUE']['TEXT']); ?>
                    </div>
                </div>
            <? }
            if ($arItem['PROPERTIES']['namestep5']['VALUE']) { ?>
                <div class="row justify-content-center mb-5">
                    <div class="col-12 col-lg-10">
                        <h3><?= $arItem['PROPERTIES']['namestep5']['VALUE'] ?></h3>
                    </div>
                    <div class="col-12 col-lg-9">
                        <?= htmlspecialcharsBack($arItem['PROPERTIES']['opisstep5']['VALUE']['TEXT']); ?>
                    </div>
                </div>
            <? } ?>

        </section>
    <?php } ?>

    <?php if ($arItem['PROPERTIES']['showeffect']['VALUE_XML_ID'] == 1) { ?>
        <section class="container mb-8">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10"><h2>Экономический эффект</h2></div>
            </div>
            <div class="grid-2">
                <? if ($arItem['PROPERTIES']['effectopis1']['VALUE']) { ?>
                    <div class="card-capability">
                        <figure>
                            <? if (CFile::GetPath($arItem['PROPERTIES']['effectimg1']['VALUE'])) { ?>
                                <img src="<?= CFile::GetPath($arItem['PROPERTIES']['effectimg1']['VALUE']) ?>"
                                     alt="">
                            <? } ?>
                            <figcaption>
                                <?= htmlspecialcharsBack($arItem['PROPERTIES']['effectopis1']['VALUE']['TEXT']); ?>
                            </figcaption>
                        </figure>
                    </div>
                <? }
                if ($arItem['PROPERTIES']['effectopis2']['VALUE']) { ?>
                    <div class="card-capability">
                        <figure>
                            <? if (CFile::GetPath($arItem['PROPERTIES']['effectimg2']['VALUE'])) { ?>
                                <img src="<?= CFile::GetPath($arItem['PROPERTIES']['effectimg2']['VALUE']) ?>"
                                     alt="">
                            <? } ?>
                            <figcaption>
                                <?= htmlspecialcharsBack($arItem['PROPERTIES']['effectopis2']['VALUE']['TEXT']); ?>
                            </figcaption>
                        </figure>
                    </div>
                <? }
                if ($arItem['PROPERTIES']['effectopis3']['VALUE']) { ?>
                    <div class="card-capability">
                        <figure>
                            <? if (CFile::GetPath($arItem['PROPERTIES']['effectimg3']['VALUE'])) { ?>
                                <img src="<?= CFile::GetPath($arItem['PROPERTIES']['effectimg3']['VALUE']) ?>"
                                     alt="">
                            <? } ?>
                            <figcaption>
                                <?= htmlspecialcharsBack($arItem['PROPERTIES']['effectopis3']['VALUE']['TEXT']); ?>
                            </figcaption>
                        </figure>
                    </div>
                <? }
                if ($arItem['PROPERTIES']['effectopis4']['VALUE']) { ?>
                    <div class="card-capability">
                        <figure>
                            <? if (CFile::GetPath($arItem['PROPERTIES']['effectimg4']['VALUE'])) { ?>
                                <img src="<?= CFile::GetPath($arItem['PROPERTIES']['effectimg4']['VALUE']) ?>"
                                     alt="">
                            <? } ?>
                            <figcaption>
                                <?= htmlspecialcharsBack($arItem['PROPERTIES']['effectopis4']['VALUE']['TEXT']); ?>
                            </figcaption>
                        </figure>
                    </div>
                <? }
                if ($arItem['PROPERTIES']['effectopis5']['VALUE']) { ?>
                    <div class="card-capability">
                        <figure>
                            <? if (CFile::GetPath($arItem['PROPERTIES']['effectimg5']['VALUE'])) { ?>
                                <img src="<?= CFile::GetPath($arItem['PROPERTIES']['effectimg5']['VALUE']) ?>"
                                     alt="">
                            <? } ?>
                            <figcaption>
                                <?= htmlspecialcharsBack($arItem['PROPERTIES']['effectopis5']['VALUE']['TEXT']); ?>
                            </figcaption>
                        </figure>
                    </div>
                <? }
                if ($arItem['PROPERTIES']['effectopis6']['VALUE']) { ?>
                    <div class="card-capability">
                        <figure>
                            <? if (CFile::GetPath($arItem['PROPERTIES']['effectimg6']['VALUE'])) { ?>
                                <img src="<?= CFile::GetPath($arItem['PROPERTIES']['effectimg6']['VALUE']) ?>"
                                     alt="">
                            <? } ?>
                            <figcaption>
                                <?= htmlspecialcharsBack($arItem['PROPERTIES']['effectopis6']['VALUE']['TEXT']); ?>
                            </figcaption>
                        </figure>
                    </div>
                <? }
                if ($arItem['PROPERTIES']['effectopis7']['VALUE']) { ?>
                    <div class="card-capability">
                        <figure>
                            <? if (CFile::GetPath($arItem['PROPERTIES']['effectimg7']['VALUE'])) { ?>
                                <img src="<?= CFile::GetPath($arItem['PROPERTIES']['effectimg7']['VALUE']) ?>"
                                     alt="">
                            <? } ?>
                            <figcaption>
                                <?= htmlspecialcharsBack($arItem['PROPERTIES']['effectopis7']['VALUE']['TEXT']); ?>
                            </figcaption>
                        </figure>
                    </div>
                <? }
                if ($arItem['PROPERTIES']['effectopis8']['VALUE']) { ?>
                    <div class="card-capability">
                        <figure>
                            <? if (CFile::GetPath($arItem['PROPERTIES']['effectimg8']['VALUE'])) { ?>
                                <img src="<?= CFile::GetPath($arItem['PROPERTIES']['effectimg8']['VALUE']) ?>"
                                     alt="">
                            <? } ?>
                            <figcaption>
                                <?= htmlspecialcharsBack($arItem['PROPERTIES']['effectopis8']['VALUE']['TEXT']); ?>
                            </figcaption>
                        </figure>
                    </div>
                <? }
                if ($arItem['PROPERTIES']['effectopis9']['VALUE']) { ?>
                    <div class="card-capability">
                        <figure>
                            <? if (CFile::GetPath($arItem['PROPERTIES']['effectimg9']['VALUE'])) { ?>
                                <img src="<?= CFile::GetPath($arItem['PROPERTIES']['effectimg9']['VALUE']) ?>"
                                     alt="">
                            <? } ?>
                            <figcaption>
                                <?= htmlspecialcharsBack($arItem['PROPERTIES']['effectopis9']['VALUE']['TEXT']); ?>
                            </figcaption>
                        </figure>
                    </div>
                <? } ?>
            </div>
        </section>
    <?php } ?>

    <?php if ($arItem['PROPERTIES']['showresult']['VALUE_XML_ID'] == 1) { ?>
        <section class="sec-results container mb-8">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10"><h2>Результаты проекта</h2></div>
                <div class="col-12 col-xl-9">
                    <p class="fs-14 mb-5"><?= htmlspecialcharsBack($arItem['PROPERTIES']['resultopis']['VALUE']['TEXT']); ?></p>
                    <ul>
                        <? if ($arItem['PROPERTIES']['resultopis1']['VALUE']['TEXT']) { ?>
                            <li>
                                <? if (CFile::GetPath($arItem['PROPERTIES']['resultimg1']['VALUE'])) { ?>
                                    <img src="<?= CFile::GetPath($arItem['PROPERTIES']['resultimg1']['VALUE']) ?>"
                                         alt="">
                                <? } ?>
                                <p> <?= htmlspecialcharsBack($arItem['PROPERTIES']['resultopis1']['VALUE']['TEXT']); ?></p>
                            </li>
                        <? } ?>

                        <?

                        if ($arItem['PROPERTIES']['resultopis2']['VALUE']['TEXT']) { ?>
                            <li>
                                <? if (CFile::GetPath($arItem['PROPERTIES']['resultimg2']['VALUE'])) { ?>
                                    <img src="<?= CFile::GetPath($arItem['PROPERTIES']['resultimg2']['VALUE']) ?>"
                                         alt="">
                                <? } ?>
                                <p> <?= htmlspecialcharsBack($arItem['PROPERTIES']['resultopis2']['VALUE']['TEXT']); ?></p>
                            </li>
                        <? } ?>
                        <? if ($arItem['PROPERTIES']['resultopis3']['VALUE']['TEXT']) { ?>
                            <li>
                                <? if (CFile::GetPath($arItem['PROPERTIES']['resultimg3']['VALUE'])) { ?>
                                    <img src="<?= CFile::GetPath($arItem['PROPERTIES']['resultimg3']['VALUE']) ?>"
                                         alt="">
                                <? } ?>
                                <p> <?= htmlspecialcharsBack($arItem['PROPERTIES']['resultopis3']['VALUE']['TEXT']); ?></p>
                            </li>
                        <? } ?>
                        <? if ($arItem['PROPERTIES']['resultopis4']['VALUE']['TEXT']) { ?>
                            <li>
                                <? if (CFile::GetPath($arItem['PROPERTIES']['resultimg4']['VALUE'])) { ?>
                                    <img src="<?= CFile::GetPath($arItem['PROPERTIES']['resultimg4']['VALUE']) ?>"
                                         alt="">
                                <? } ?>
                                <p> <?= htmlspecialcharsBack($arItem['PROPERTIES']['resultopis4']['VALUE']['TEXT']); ?></p>
                            </li>
                        <? } ?>
                        <? if ($arItem['PROPERTIES']['resultopis5']['VALUE']['TEXT']) { ?>
                            <li>
                                <? if (CFile::GetPath($arItem['PROPERTIES']['resultimg5']['VALUE'])) { ?>
                                    <img src="<?= CFile::GetPath($arItem['PROPERTIES']['resultimg5']['VALUE']) ?>"
                                         alt="">
                                <? } ?>
                                <p> <?= htmlspecialcharsBack($arItem['PROPERTIES']['resultopis5']['VALUE']['TEXT']); ?></p>
                            </li>
                        <? } ?>
                        <? if ($arItem['PROPERTIES']['resultopis6']['VALUE']['TEXT']) { ?>
                            <li>
                                <? if (CFile::GetPath($arItem['PROPERTIES']['resultimg6']['VALUE'])) { ?>
                                    <img src="<?= CFile::GetPath($arItem['PROPERTIES']['resultimg6']['VALUE']) ?>"
                                         alt="">
                                <? } ?>
                                <p> <?= htmlspecialcharsBack($arItem['PROPERTIES']['resultopis6']['VALUE']['TEXT']); ?></p>
                            </li>
                        <? } ?>
                        <? if ($arItem['PROPERTIES']['resultopis7']['VALUE']['TEXT']) { ?>
                            <li>
                                <? if (CFile::GetPath($arItem['PROPERTIES']['resultimg7']['VALUE'])) { ?>
                                    <img src="<?= CFile::GetPath($arItem['PROPERTIES']['resultimg7']['VALUE']) ?>"
                                         alt="">
                                <? } ?>
                                <p> <?= htmlspecialcharsBack($arItem['PROPERTIES']['resultopis7']['VALUE']['TEXT']); ?></p>
                            </li>
                        <? } ?>
                        <? if ($arItem['PROPERTIES']['resultopis8']['VALUE']['TEXT']) { ?>
                            <li>
                                <? if (CFile::GetPath($arItem['PROPERTIES']['resultimg8']['VALUE'])) { ?>
                                    <img src="<?= CFile::GetPath($arItem['PROPERTIES']['resultimg8']['VALUE']) ?>"
                                         alt="">
                                <? } ?>
                                <p> <?= htmlspecialcharsBack($arItem['PROPERTIES']['resultopis8']['VALUE']['TEXT']); ?></p>
                            </li>
                        <? } ?>
                        <? if ($arItem['PROPERTIES']['resultopis9']['VALUE']['TEXT']) { ?>
                            <li>
                                <? if (CFile::GetPath($arItem['PROPERTIES']['resultimg9']['VALUE'])) { ?>
                                    <img src="<?= CFile::GetPath($arItem['PROPERTIES']['resultimg9']['VALUE']) ?>"
                                         alt="">
                                <? } ?>
                                <p> <?= htmlspecialcharsBack($arItem['PROPERTIES']['resultopis9']['VALUE']['TEXT']); ?></p>
                            </li>
                        <? } ?>
                        <? if ($arItem['PROPERTIES']['resultopis10']['VALUE']['TEXT']) { ?>
                            <li>
                                <? if (CFile::GetPath($arItem['PROPERTIES']['resultimg10']['VALUE'])) { ?>
                                    <img src="<?= CFile::GetPath($arItem['PROPERTIES']['resultimg10']['VALUE']) ?>"
                                         alt="">
                                <? } ?>
                                <p> <?= htmlspecialcharsBack($arItem['PROPERTIES']['resultopis10']['VALUE']['TEXT']); ?></p>
                            </li>
                        <? } ?>
                    </ul>
                </div>
            </div>
        </section>
    <?php } ?>
    <?php if ($arItem['PROPERTIES']['showcases']['VALUE_XML_ID'] == 1) { ?>
        <section class="container mb-8">
            <div class="row justify-content-center mb-4">
                <div class="col-12 col-lg-10"><h2>Ознакомиться с другими кейсами</h2></div>
            </div>
            <ul class="grid-cols-2 mb-5">
                <? if ($arItem['PROPERTIES']['casename1']['VALUE']) { ?>
                    <li class="big">
                        <div class="case-grid">
                            <? if (CFile::GetPath($arItem['PROPERTIES']['caseimg1']['VALUE'])) { ?>
                                <div class="img">
                                    <img src="<?= CFile::GetPath($arItem['PROPERTIES']['caseimg1']['VALUE']) ?>"
                                         alt="<?= $arItem['PROPERTIES']['casename1']['VALUE'] ?>">
                                </div>
                            <? } ?>


                            <div class="text">
                                <h5><?= $arItem['PROPERTIES']['casename1']['VALUE'] ?></h5>
                                <p><?= htmlspecialcharsBack($arItem['PROPERTIES']['caseopis1']['VALUE']['TEXT']); ?></p>
                            </div>

                            <div class="info">
                                <div>
                                    <div class="accent"><?= $arItem['PROPERTIES']['casejob1']['VALUE'] ?></div>
                                    <p>Реализация работы</p>
                                </div>
                                <div class="ms-sm-5 ps-md-5">
                                    <div class="accent"><?= $arItem['PROPERTIES']['casespeed1']['VALUE'] ?></div>
                                    <p>Cкорость работы</p>
                                </div>
                            </div>

                            <? if (CFile::GetPath($arItem['PROPERTIES']['caselogo1']['VALUE'])) { ?>
                                <div class="logo">
                                    <img src="<?= CFile::GetPath($arItem['PROPERTIES']['caselogo1']['VALUE']) ?>"
                                         alt="<?= $arItem['PROPERTIES']['casename1']['VALUE'] ?>">
                                </div>
                            <? } ?>


                            <a href="/case/<?= $arItem['PROPERTIES']['caselink1']['VALUE'] ?>" class="more"><span>подробнее</span></a>
                        </div>
                    </li>
                <? } ?>
                <? if ($arItem['PROPERTIES']['casename2']['VALUE']) { ?>
                    <li class="mini">
                        <div class="case">
                            <div class="text">
                                <h5><?= $arItem['PROPERTIES']['casename2']['VALUE'] ?></h5>
                                <p><?= htmlspecialcharsBack($arItem['PROPERTIES']['caseopis2']['VALUE']['TEXT']); ?></p>
                            </div>
                            <div class="info">
                                <div>
                                    <? if (CFile::GetPath($arItem['PROPERTIES']['caselogo2']['VALUE'])) { ?>
                                        <img src="<?= CFile::GetPath($arItem['PROPERTIES']['caselogo2']['VALUE']) ?>"
                                             alt="<?= $arItem['PROPERTIES']['casename2']['VALUE'] ?>">
                                    <? } ?>
                                </div>
                                <div>
                                    <a href="/case/<?= $arItem['PROPERTIES']['caselink1']['VALUE'] ?>"
                                       class="more"><span>подробнее</span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                <? } ?>
                <? if ($arItem['PROPERTIES']['casename3']['VALUE']) { ?>
                    <li class="mini">
                        <div class="case">
                            <div class="text">
                                <h5><?= $arItem['PROPERTIES']['casename3']['VALUE'] ?></h5>
                                <p><?= htmlspecialcharsBack($arItem['PROPERTIES']['caseopis3']['VALUE']['TEXT']); ?></p>
                            </div>
                            <div class="info">
                                <div>
                                    <? if (CFile::GetPath($arItem['PROPERTIES']['caselogo3']['VALUE'])) { ?>
                                        <img src="<?= CFile::GetPath($arItem['PROPERTIES']['caselogo3']['VALUE']) ?>"
                                             alt="<?= $arItem['PROPERTIES']['casename3']['VALUE'] ?>">
                                    <? } ?>
                                </div>
                                <div>
                                    <a href="/case/<?= $arItem['PROPERTIES']['caselink3']['VALUE'] ?>"
                                       class="more"><span>подробнее</span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                <? } ?>
            </ul>
        </section>
    <?php } ?>

<? } ?>
<?
$this->__component->arResult["CACHED_TPL"] = @ob_get_contents();
ob_get_clean();
?>