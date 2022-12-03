<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/logo.svg">
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/fonts/stylesheet.css" rel="stylesheet"/>
</head>

<body>
<?$APPLICATION->ShowPanel();?>
<? if($APPLICATION->GetCurDir()==='/') { ?>
    <header>
        <div class="container-fluid h-100">
            <div class="d-flex align-items-center justify-content-between h-100">
                <a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/imgs/logo.svg" alt="Verter" class="logo ms-4 ms-xl-5"></a>
                <nav class="d-none d-lg-block">
                    <ul class="list-unstyled">
                        <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "top2",
                        array(
                            "COMPONENT_TEMPLATE" => "menu",
                            "ROOT_MENU_TYPE" => "top",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "top",
                            "USE_EXT" => "N",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                        false
                    );?>
                    </ul>
                </nav>
                <a href="tel:<?=get_data('phone')?>" class="d-none d-lg-block fw-5 me-xl-5"><?=get_data('phone')?></a>
                <button type="button" class="burger me-4" onclick="openMenu(this)">
                    <div></div>
                </button>
            </div>
        </div>
    </header>
<?php } else { ?>
    <header class="inner">
        <div class="container-fluid h-100">
            <div class="d-flex align-items-center justify-content-between h-100">
                <a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/imgs/logo-white.svg" alt="Verter" class="logo ms-4 ms-xl-5"></a>
                <nav class="d-none d-lg-block">
                    <ul class="list-unstyled">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "top2",
                            array(
                                "COMPONENT_TEMPLATE" => "menu",
                                "ROOT_MENU_TYPE" => "top",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(
                                ),
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "top",
                                "USE_EXT" => "N",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N"
                            ),
                            false
                        );?>
                    </ul>
                </nav>
                <a href="tel:<?=get_data('phone')?>" class="d-none d-lg-block fw-5 me-xl-5"><?=get_data('phone')?></a>
                <button type="button" class="burger me-4" onclick="openMenu(this)">
                    <div></div>
                </button>
            </div>
        </div>
    </header>
<? } ?>
