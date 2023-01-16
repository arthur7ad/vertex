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
                    <h6 class="main-color"><a href="/storage/">Склад <svg class="icon" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
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
                    <h6 class="main-color"><a href="/showroom/">Продажи <svg class="icon" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
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
                    <h6 class="main-color"><a href="/production/">Производство <svg class="icon" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
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
        <script>
            (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
            })(window,document,'https://cdn-ru.bitrix24.ru/b24009318/crm/site_button/loader_2_slyw1o.js');
        </script>
        <a href="javascript:void(0)" onclick="chatbut();" rel="noopener noreferrer"><div class="chat-button"><svg class="icon-widget" width="26" height="27" xmlns="http://www.w3.org/2000/svg">
                    <path class="b24-crm-button-chat-icon" d="M25.99 7.744a2 2 0 012 2v11.49a2 2 0 01-2 2h-1.044v5.162l-4.752-5.163h-7.503a2 2 0 01-2-2v-1.872h10.073a3 3 0 003-3V7.744zM19.381 0a2 2 0 012 2v12.78a2 2 0 01-2 2h-8.69l-5.94 6.453V16.78H2a2 2 0 01-2-2V2a2 2 0 012-2h17.382z" fill=" #FFFFFF" fill-rule="evenodd"></path>
                </svg></div></a>
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            ".default",
            Array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => "/include/footer/chat.php"
            )
        );?>
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/chat.css" rel="stylesheet"/>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/sliders.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/more.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/chat.js"></script>
</body>

</html>