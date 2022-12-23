        <section class="sec-working-days py-4 py-md-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-11 d-flex justify-content-between align-items-center">
                        <img src="<?=SITE_TEMPLATE_PATH?>/imgs/logo.svg" alt="Verter" class="logo d-sm-none">
                        <img src="<?=SITE_TEMPLATE_PATH?>/imgs/verter-logo.png" alt="logo" class="d-none d-sm-block">

                        <div class="text-end">
                            <a href="tel:<?=get_data('phone')?>" class="d-block fs-13 fw-7 mb-1"><?=get_data('phone')?></a>
                            <div class="fs-07"><?=get_data('time')?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="f-menu">
                <div>
                    <h6 class="main-color"><a href="/">Склад <svg class="icon" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <line x1="15" y1="16" x2="19" y2="12"></line>
                                <line x1="15" y1="8" x2="19" y2="12"></line>
                            </svg></a></h6>
                    <nav>
                        <ul class="list-unstyled">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "footer1",
                                array(
                                    "COMPONENT_TEMPLATE" => "menu",
                                    "ROOT_MENU_TYPE" => "bot1",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "bot1",
                                    "USE_EXT" => "N",
                                    "DELAY" => "N",
                                    "ALLOW_MULTI_SELECT" => "N"
                                ),
                                false
                            );?>
                        </ul>
                    </nav>
                </div>
                <div>
                    <h6 class="main-color"><a href="/">Продажи <svg class="icon" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <line x1="15" y1="16" x2="19" y2="12"></line>
                                <line x1="15" y1="8" x2="19" y2="12"></line>
                            </svg></a></h6>
                    <nav>
                        <ul class="list-unstyled">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "footer1",
                                array(
                                    "COMPONENT_TEMPLATE" => "menu",
                                    "ROOT_MENU_TYPE" => "bot2",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "bot2",
                                    "USE_EXT" => "N",
                                    "DELAY" => "N",
                                    "ALLOW_MULTI_SELECT" => "N"
                                ),
                                false
                            );?>
                        </ul>
                    </nav>
                </div>
                <div>
                    <h6 class="main-color"><a href="/">Производство <svg class="icon" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <line x1="15" y1="16" x2="19" y2="12"></line>
                                <line x1="15" y1="8" x2="19" y2="12"></line>
                            </svg></a></h6>
                    <nav>
                        <ul class="list-unstyled">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "footer1",
                                array(
                                    "COMPONENT_TEMPLATE" => "menu",
                                    "ROOT_MENU_TYPE" => "bot3",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "bot3",
                                    "USE_EXT" => "N",
                                    "DELAY" => "N",
                                    "ALLOW_MULTI_SELECT" => "N"
                                ),
                                false
                            );?>
                        </ul>
                    </nav>
                </div>
                <div>
                    <h6 class="main-color">О Verter <svg class="icon" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <line x1="15" y1="16" x2="19" y2="12"></line>
                                <line x1="15" y1="8" x2="19" y2="12"></line>
                            </svg></h6>
                    <nav>
                        <ul class="list-unstyled">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "footer1",
                                array(
                                    "COMPONENT_TEMPLATE" => "menu",
                                    "ROOT_MENU_TYPE" => "bot4",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "bot4",
                                    "USE_EXT" => "N",
                                    "DELAY" => "N",
                                    "ALLOW_MULTI_SELECT" => "N"
                                ),
                                false
                            );?>
                        </ul>
                    </nav>
                </div>
                <div>
                    <nav>
                        <ul class="list-unstyled">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "footer2",
                                array(
                                    "COMPONENT_TEMPLATE" => "menu",
                                    "ROOT_MENU_TYPE" => "bot5",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "bot5",
                                    "USE_EXT" => "N",
                                    "DELAY" => "N",
                                    "ALLOW_MULTI_SELECT" => "N"
                                ),
                                false
                            );?>
                        </ul>
                    </nav>
                </div>
                <div class="d-lg-none">
                    <div class="mb-2">Verter в соцсетях:</div>
                    <div class="social">
                        <a href="<?=get_data('dzen')?>" class="ms-lg-3"><img src="<?=SITE_TEMPLATE_PATH?>/imgs/icons/dzen.svg" alt="dzen"></a>
                        <a href="<?=get_data('telega')?>" class="ms-2 ms-sm-3"><img src="<?=SITE_TEMPLATE_PATH?>/imgs/icons/telegram.svg" alt="telegram"></a>
                        <a href="<?=get_data('vk')?>" class="ms-2 ms-sm-3"><img src="<?=SITE_TEMPLATE_PATH?>/imgs/icons/vk.svg" alt="vk"></a>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-xl-11 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="<?=SITE_TEMPLATE_PATH?>/imgs/logo.svg" alt="verter" class="logo">
                        <div class="ms-3 ms-xl-4">
                            <div>
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    ".default",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => "/include/footer/1.php"
                                    )
                                );?>
                            </div>
                            <div class="fs-07 light-color lh-12">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    ".default",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => "/include/footer/2.php"
                                    )
                                );?>
                            </div>
                        </div>
                    </div>
                    <div class="social d-none d-lg-flex">
                        <span>Verter в соцсетях:</span>
                        <a href="<?=get_data('dzen')?>" class="ms-3"><img src="<?=SITE_TEMPLATE_PATH?>/imgs/icons/dzen.svg" alt="dzen"></a>
                        <a href="<?=get_data('telega')?>" class="ms-3"><img src="<?=SITE_TEMPLATE_PATH?>/imgs/icons/telegram.svg" alt="telegram"></a>
                        <a href="<?=get_data('vk')?>" class="ms-3"><img src="<?=SITE_TEMPLATE_PATH?>/imgs/icons/vk.svg" alt="vk"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu">
        <div class="offcanvas-body">
            <nav>
                <ul class="list-unstyled">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "top1",
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
            <a href="tel:<?=get_data('phone')?>" class="d-block fs-12 fw-5 mt-5 text-center"><?=get_data('phone')?></a>
            <div class="fs-09 fw-3 mt-5 mb-2">Verter в соцсетях:</div>
            <div class="social justify-content-center">
                <a href="<?=get_data('dzen')?>" class="ms-lg-3"><img src="<?=SITE_TEMPLATE_PATH?>/imgs/icons/dzen-white.svg" alt="dzen"></a>
                <a href="<?=get_data('telega')?>" class="ms-3"><img src="<?=SITE_TEMPLATE_PATH?>/imgs/icons/telegram-white.svg" alt="telegram"></a>
                <a href="<?=get_data('vk')?>" class="ms-3"><img src="<?=SITE_TEMPLATE_PATH?>/imgs/icons/vk-white.svg" alt="vk"></a>
            </div>
        </div>
    </div>

    <script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/sliders.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
</body>

</html>