<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Производсто");
?>

        <section class="sec-product-main">
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "proiz_banner",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("",""),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "19",
                    "IBLOCK_TYPE" => "products",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("title_block","link",""),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            );?>
        </section>

        <section class="sec-products mb-8 container">
            <ul class="products-grid">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "products_el",
                    Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "N",
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array("",""),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "20",
                        "IBLOCK_TYPE" => "products",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "20",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Новости",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array("link","",""),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N"
                    )
                );?>
            </ul>
        </section>

    <section class="sec-scope mb-8 container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-11 col-xl-10">
                <h2>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/include/main/3.php"
                        )
                    ); ?> </h2>
            </div>
            <div class="col-12 col-md-11 col-lg-10 col-xl-9">
                <div class="row mb-5">
                    <div class="col-12 col-lg-10">
                        <p class="fs-14">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/include/main/4.php"
                                )
                            ); ?>
                        </p>
                    </div>
                </div>
                <ul class="list-unstyled row row-cols-3 row-cols-sm-4 row-cols-lg-5 g-4 g-xl-5 justify-content-center">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "oblast",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "Y",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(0 => "", 1 => "",),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "4",
                            "IBLOCK_TYPE" => "verter",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "100",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(0 => "", 1 => "",),
                            "SET_BROWSER_TITLE" => "Y",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "Y",
                            "SET_META_KEYWORDS" => "Y",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N"
                        )
                    ); ?>
                </ul>
            </div>
        </div>
    </section>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#capabilities" type="button" role="tab"
                    aria-selected="true">Возможности
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tariffs" type="button" role="tab"
                    aria-selected="false">Тарифы
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cases" type="button" role="tab"
                    aria-selected="false">Кейсы
            </button>
        </li>
    </ul>
    <div class="tab-content mb-8" id="myTabContent">
        <!-- Возможности продукта -->
        <div class="tab-pane fade show active" id="capabilities" role="tabpanel">
            <section class="tab-top mb-0">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-10">
                            <h2>Возможности продукта</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tab-top sticky-block pt-2 mb-0" data-start="start-1" data-end="end-1">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-11">
                            <?

                            // Получаем массив $arResult['GROUP'] в котором содержатся данные об элементах свойства-справочника
                            if (CModule::IncludeModule('highloadblock')) {
                                $ID_GROUP = '2'; // ID highload-блока справочника
                                $hldata = Bitrix\Highloadblock\HighloadBlockTable::getById($ID_GROUP)->fetch();
                                $hlentity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hldata);
                                $hlDataClass = $hldata["NAME"] . "Table";

                                $result = $hlDataClass::getList(array(
                                    "select" => array("ID", "UF_NAME", "UF_XML_ID"), // Поля для выборки
                                    "order" => array("UF_SORT" => "ASC"),
                                    "filter" => array(),
                                ));
                                while ($res = $result->fetch()) {
                                    $arResult['GROUP'][] = $res;
                                }
                            }

                            // Функция для получения количества элементов в указанной рубрике
                            function getElementsCount($xml_id)
                            {
                                $rsData = CIBlockElement::GetList(
                                    array('SORT' => 'ASC'),
                                    array(
                                        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
                                        '=PROPERTY_SECTION' => $xml_id // SECTION - символьный код свойства
                                    ),
                                    false,
                                    false,
                                    array('NAME', 'IBLOCK_ID', 'CODE')
                                );
                                return $rsData->SelectedRowsCount();
                            }

                            ?>
                            <div class="bx-news-list-filter-wrap list-unstyled d-flex flex-wrap filtr1-wrap">
                                <? foreach ($arResult['GROUP'] as $group): ?> <label class="btn-4 btn-padding"> <input
                                            type="checkbox" value="<?= $group['UF_XML_ID'] ?>" name="filtr1"
                                            class="filtr1"> <span
                                            class="bx-filter-param-text"><?= $group['UF_NAME']; ?> </span> </label>
                                <? endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tab-top pt-1" id="start-1">
                <h3>Адресный склад</h3>
            </section>
            <section class="container mb-8">
                <div class="grid-0" id="news">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "scope",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "Y",
                            "AJAX_OPTION_JUMP" => "Y",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "N",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "N",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array("", ""),
                            "FILTER_NAME" => "groupFilter",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "12",
                            "IBLOCK_TYPE" => "products",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "N",
                            "INSTANT_RELOAD" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "20",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array("link", ""),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N"
                        )
                    ); ?>
                </div>
                <button type="button" class="btn-2 mt-4 mx-auto" id="all-check">все функции</button>
            </section>
            <section class="sec-benefits mt-5 mb-8" id="end-1">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "plus",
                    array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array("", ""),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "17",
                        "IBLOCK_TYPE" => "products",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "20",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Новости",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array("plus1", "plus2", "plus3", "plus4", "plus5", "plus6", "plus7", "plus8", "plus9", "plus10", ""),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N"
                    )
                ); ?> </section>
            <section class="sec-implemented container mb-8">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <h2>Уже внедрено</h2>
                    </div>
                    <div class="position-relative">
                        <div class="swiper-1">
                            <div class="swiper-wrapper">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:news.list",
                                    "implemented",
                                    array(
                                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                        "ADD_SECTIONS_CHAIN" => "Y",
                                        "AJAX_MODE" => "N",
                                        "AJAX_OPTION_ADDITIONAL" => "",
                                        "AJAX_OPTION_HISTORY" => "N",
                                        "AJAX_OPTION_JUMP" => "N",
                                        "AJAX_OPTION_STYLE" => "Y",
                                        "CACHE_FILTER" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_TYPE" => "A",
                                        "CHECK_DATES" => "Y",
                                        "DETAIL_URL" => "",
                                        "DISPLAY_BOTTOM_PAGER" => "Y",
                                        "DISPLAY_DATE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PICTURE" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "DISPLAY_TOP_PAGER" => "N",
                                        "FIELD_CODE" => array("", ""),
                                        "FILTER_NAME" => "",
                                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                        "IBLOCK_ID" => "15",
                                        "IBLOCK_TYPE" => "products",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                        "INCLUDE_SUBSECTIONS" => "Y",
                                        "MESSAGE_404" => "",
                                        "NEWS_COUNT" => "20",
                                        "PAGER_BASE_LINK_ENABLE" => "N",
                                        "PAGER_DESC_NUMBERING" => "N",
                                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                        "PAGER_SHOW_ALL" => "N",
                                        "PAGER_SHOW_ALWAYS" => "N",
                                        "PAGER_TEMPLATE" => ".default",
                                        "PAGER_TITLE" => "Новости",
                                        "PARENT_SECTION" => "",
                                        "PARENT_SECTION_CODE" => "",
                                        "PREVIEW_TRUNCATE_LEN" => "",
                                        "PROPERTY_CODE" => array("speedwork", "imwork", "link", ""),
                                        "SET_BROWSER_TITLE" => "N",
                                        "SET_LAST_MODIFIED" => "N",
                                        "SET_META_DESCRIPTION" => "N",
                                        "SET_META_KEYWORDS" => "N",
                                        "SET_STATUS_404" => "N",
                                        "SET_TITLE" => "N",
                                        "SHOW_404" => "N",
                                        "SORT_BY1" => "ACTIVE_FROM",
                                        "SORT_BY2" => "SORT",
                                        "SORT_ORDER1" => "DESC",
                                        "SORT_ORDER2" => "ASC",
                                        "STRICT_SECTION_CHECK" => "N"
                                    )
                                ); ?>
                            </div>
                            <div class="swiper-pagination">
                            </div>
                            <div class="swiper-button-prev">
                            </div>
                            <div class="swiper-button-next">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <? $APPLICATION->IncludeComponent(
                "verter:main.feedback",
                "",
                array(
                    "AJAX_MODE" => "Y",
                    "EMAIL_TO" => "test@test.ru",
                    "EVENT_MESSAGE_ID" => array(),
                    "OK_TEXT" => "Ваше сообщение отправлено.",
                    "REQUIRED_FIELDS" => array("NAME", "EMAIL", "PHONE"),
                    "USE_CAPTCHA" => "N"
                )
            ); ?>
        </div>
        <!-- Тарифы -->
        <div class="tab-pane fade" id="tariffs" role="tabpanel">
            <section class="tab-top pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-11">
                            <h2 class="mb-4">Тарифы <span class="fw-3">Verter.Склад</span></h2>
                        </div>
                        <div class="col-12 col-xl-10">
                            <h5 class="fw-4 mb-4">Подберите для себя самый оптимальный тариф</h5>
                            <div class="d-sm-flex align-items-center">
                                <div class="me-sm-5">
                                    <div class="fs-12 mb-3">
                                        Срок действия лицензии:
                                    </div>
                                    <div class="custom-select">
                                        <button type="button"></button>
                                        <ul class="custom-select-options">
                                            <li><label> <input type="radio" name="limitations" value="на 12 месяцев"
                                                               hidden="" checked="">
                                                    <div>
                                                        на 12 месяцев
                                                    </div>
                                                </label></li>
                                            <li><label> <input type="radio" name="limitations" value="на 3 года"
                                                               hidden="">
                                                    <div>
                                                        на 3 года
                                                    </div>
                                                </label></li>
                                            <li><label> <input type="radio" name="limitations" value="безлимитная"
                                                               hidden="">
                                                    <div>
                                                        безлимитная
                                                    </div>
                                                </label></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-3 mt-sm-0">
                                    <div class="fs-12 mb-3">
                                        Количество ТСД:
                                    </div>
                                    <div class="input-number-group">
                                        <input type="number" placeholder="0" class="flex-1">
                                        <button type="button" class="plus"><img alt="plus"
                                                                                src="/local/templates/verter/imgs/icons/plus-white.svg">
                                        </button>
                                        <button type="button" class="minus"><img alt="minus"
                                                                                 src="/local/templates/verter/imgs/icons/minus-white.svg">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-grid mt-4 mt-lg-5">
                    <div class="table-grid-row">
                        <div>
                        </div>
                        <div>
                        </div>
                        <div class="hover-effect">
                            <h5 class="fw-7">Стандарт</h5>
                            <p class="fw-4 mb-2">
                                Для эффективной работы небольших компаний
                            </p>
                            <div class="fs-12 fw-7 mb-2">
                                5 ТСД
                            </div>
                            <div class="fs-20 fw-7">
                                89 900 ₽
                            </div>
                            <p class="fw-4">
                                2 490 ₽ за 1 ТСД
                            </p>
                            <button type="button" class="btn-1 w-100 mt-3">купить</button>
                            <button type="button" class="btn-3 w-100 mt-3">бесплатно</button>
                        </div>
                        <div class="hover-effect">
                            <h5 class="fw-7">Профи</h5>
                            <p class="fw-4 mb-2">
                                Для эффективной работы небольших компаний
                            </p>
                            <div class="fs-12 fw-7 mb-2">
                                5 ТСД
                            </div>
                            <div class="fs-20 fw-7">
                                139 900 ₽
                            </div>
                            <p class="fw-4">
                                1 990 ₽ за 1 ТСД
                            </p>
                            <button type="button" class="btn-1 w-100 mt-3">купить</button>
                            <button type="button" class="btn-3 w-100 mt-3">бесплатно</button>
                        </div>
                        <div class="hover-effect">
                            <h5 class="fw-7">Корп</h5>
                            <p class="fw-4 mb-2">
                                Для эффективной работы небольших компаний
                            </p>
                            <div class="fs-12 fw-7 mb-2">
                                5 ТСД
                            </div>
                            <div class="fs-20 fw-7">
                                189 900 ₽
                            </div>
                            <p class="fw-4">
                                1 590 ₽ за 1 ТСД
                            </p>
                            <button type="button" class="btn-1 w-100 mt-3">купить</button>
                            <button type="button" class="btn-3 w-100 mt-3">бесплатно</button>
                        </div>
                    </div>
                    <div class="table-grid-row">
                        <div>
                            1
                        </div>
                        <div>
                            <button type="button" id="list-1" class="more" onclick="toggleList(this)"></button>
                            Работа с ТСД
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                    </div>
                    <div class="table-grid-row list-1" data-level="2">
                        <div>
                            1.1
                        </div>
                        <div>
                            <button type="button" id="list-1-1" class="more" onclick="toggleList(this)"></button>
                            Управление топологией склада
                        </div>
                        <div class="hover-effect">
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                    </div>
                    <div class="table-grid-row list-1-1" data-level="3">
                        <div>
                            1.1.1
                        </div>
                        <div>
                            Хранение информации о структуре склада (зоны, стеллажи, ячейки)
                        </div>
                        <div class="hover-effect">
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                    </div>
                    <div class="table-grid-row list-1-1" data-level="3">
                        <div>
                            1.1.2
                        </div>
                        <div>
                            Учет мультиячеек (когда в одной ячейке может находится товар с разных складов)
                        </div>
                        <div class="hover-effect">
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                    </div>
                    <div class="table-grid-row list-1-1" data-level="3">
                        <div>
                            1.1.3
                        </div>
                        <div>
                            Присвоение адресов и генерация штрихкодов
                        </div>
                        <div class="hover-effect">
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                    </div>
                    <div class="table-grid-row list-1-1" data-level="3">
                        <div>
                            1.1.4
                        </div>
                        <div>
                            Печать этикеток со штрихкодом ячейки
                        </div>
                        <div class="hover-effect">
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                    </div>
                    <div class="table-grid-row list-1" data-level="2">
                        <div>
                            1.2
                        </div>
                        <div>
                            Инвентаризация товара
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                    </div>
                    <div class="table-grid-row list-1" data-level="2">
                        <div>
                            1.3
                        </div>
                        <div>
                            Приёмка товара
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                    </div>
                    <div class="table-grid-row list-1" data-level="2">
                        <div>
                            1.4
                        </div>
                        <div>
                            Размещение в зоне хранения
                        </div>
                        <div class="hover-effect">
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                    </div>
                    <div class="table-grid-row list-1" data-level="2">
                        <div>
                            1.5
                        </div>
                        <div>
                            Комплектация заказа
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                    </div>
                    <div class="table-grid-row list-1" data-level="2">
                        <div>
                            1.6
                        </div>
                        <div>
                            Отгрузка
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                    </div>
                    <div class="table-grid-row list-1" data-level="2">
                        <div>
                            1.7
                        </div>
                        <div>
                            Перемещение товара между ячейками
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                    </div>
                    <div class="table-grid-row">
                        <div>
                            2
                        </div>
                        <div>
                            <button type="button" id="list-2" class="more" onclick="toggleList(this)"></button>
                            WMS
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                    </div>
                    <div class="table-grid-row list-2" data-level="2">
                        <div>
                            2.1
                        </div>
                        <div>
                            WMS
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                    </div>
                    <div class="table-grid-row list-2" data-level="2">
                        <div>
                            2.2
                        </div>
                        <div>
                            WMS
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                    </div>
                    <div class="table-grid-row">
                        <div>
                            3
                        </div>
                        <div>
                            Модуль для 1С
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                    </div>
                    <div class="table-grid-row">
                        <div>
                            4
                        </div>
                        <div>
                            Центр мониторнга
                        </div>
                        <div class="hover-effect">
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                    </div>
                    <div class="table-grid-row">
                        <div>
                            5
                        </div>
                        <div>
                            Инфомат
                        </div>
                        <div class="hover-effect">
                        </div>
                        <div class="hover-effect">
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                    </div>
                    <div class="table-grid-row">
                        <div>
                            6
                        </div>
                        <div>
                            Электронная очередь
                        </div>
                        <div class="hover-effect">
                        </div>
                        <div class="hover-effect">
                        </div>
                        <div class="hover-effect">
                            <i class="bi bi-check-lg"></i>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Кейсы -->
        <div class="tab-pane fade" id="cases" role="tabpanel">
            <section class="tab-top mb-0">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-11">
                            <h2>Где внедренно</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tab-top sticky-block pt-2" data-start="start-2" data-end="end-2">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-11">
                            <?

                            // Получаем массив $arResult['GROUP'] в котором содержатся данные об элементах свойства-справочника
                            if (CModule::IncludeModule('highloadblock')) {
                                $ID_GROUP2 = '3'; // ID highload-блока справочника
                                $hldata2 = Bitrix\Highloadblock\HighloadBlockTable::getById($ID_GROUP2)->fetch();
                                $hlentity2 = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hldata2);
                                $hlDataClass2 = $hldata2["NAME"] . "Table";

                                $result2 = $hlDataClass2::getList(array(
                                    "select" => array("ID", "UF_NAME", "UF_XML_ID"), // Поля для выборки
                                    "order" => array("UF_SORT" => "ASC"),
                                    "filter" => array(),
                                ));
                                while ($res2 = $result2->fetch()) {
                                    $arResult2['GROUP'][] = $res2;
                                }
                            }

                            ?>
                            <div class="bx-news-list-filter-wrap list-unstyled d-flex flex-wrap filtr2-wrap">
                                <? foreach ($arResult2['GROUP'] as $group2): ?><? if ($group2['UF_XML_ID'] != 'Brw31YCO') { ?>
                                    <label class="btn-4 btn-padding"> <input type="checkbox"
                                                                             value="<?= $group2['UF_XML_ID'] ?>"
                                                                             name="filtr-cases" class="filtr-cases">
                                        <span class="bx-filter-param-text"><?= $group2['UF_NAME']; ?> </span> </label>
                                <? } ?><? endforeach; ?> <label class="btn-4 alc"> <input type="checkbox"
                                                                                          name="allcases"
                                                                                          class="allcases-in"> <span
                                            class="bx-filter-param-text allcases">Все кейсы</span> </label>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container mb-sm-5" id="start-2">
                <ul class="grid-cols-2 mb-5" id="cases-list">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "cases",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "Y",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "N",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array("", ""),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "13",
                            "IBLOCK_TYPE" => "products",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "20",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array("speedwork", "imwork", "link", "tags_cases", ""),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "ASC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N"
                        )
                    ); ?>
                </ul>
            </section>
            <section class="container pt-5 mb-8" id="end-2">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h2>География внедрения продуктов от Verter</h2>
                        <img alt="map" src="/local/templates/verter/imgs/map.png"
                             class="img-fluid d-block mx-auto pt-4">
                        <button type="button" class="btn-2 fs-12 mt-4 mt-sm-5 mx-auto all-check-cases">все кейсы
                        </button>
                    </div>
                </div>
            </section>
            <? $APPLICATION->IncludeComponent(
                "verter:main.feedback",
                "",
                array(
                    "AJAX_MODE" => "Y",
                    "EMAIL_TO" => "test@test.ru",
                    "EVENT_MESSAGE_ID" => array(),
                    "OK_TEXT" => "Ваше сообщение отправлено.",
                    "REQUIRED_FIELDS" => array("NAME", "EMAIL", "PHONE"),
                    "USE_CAPTCHA" => "N"
                )
            ); ?>
        </div>
    </div>
    <section class="sec-base mb-8">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <h2>База знаний</h2>
                </div>
            </div>
        </div>
        <div class="slider-wrap">
            <div class="position-absolute top-0 start-0 w-100 h-100">
                <div class="container h-100">
                    <div class="box h-100 w-100">
                    </div>
                </div>
            </div>
            <div class="swiper-1">
                <div class="swiper-wrapper">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "knowledgebase",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "Y",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "N",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array("", ""),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "16",
                            "IBLOCK_TYPE" => "products",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "20",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array("title1", "about1", "title2", "about2", ""),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "ASC",
                            "SORT_ORDER2" => "DESC",
                            "STRICT_SECTION_CHECK" => "N"
                        )
                    ); ?>
                </div>
                <div class="swiper-pagination">
                </div>
                <div class="swiper-button-prev">
                </div>
                <div class="swiper-button-next">
                </div>
            </div>
        </div>
        <a href="" class="btn-2 mx-auto mt-4 mt-lg-5">все статьи</a></section>
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/filtr.js"></script><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>