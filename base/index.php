<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("База знаний");

$act = $_GET['act'];
if(empty($act)){
    $act = 'articles';
}

?>

    <section class="sec-base-main">
        <ul class="nav nav-tabs" id="base" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link bg <? if($act=='articles'){?>active<? } ?>" data-bs-toggle="tab" data-bs-target="#articles" type="button" role="tab" aria-selected="true">Статьи</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link bg <? if($act=='webinars'){?>active<? } ?>" data-bs-toggle="tab" data-bs-target="#webinars" type="button" role="tab" aria-selected="false">Вебинары</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link bg <? if($act=='news'){?>active<? } ?>" data-bs-toggle="tab" data-bs-target="#news" type="button" role="tab" aria-selected="false">Новости</button>
            </li>
        </ul>
    </section>
    <div class="tab-content pt-2 pt-sm-4 pt-lg-5 mb-8" id="tabs-base">
        <!-- Статьи -->
        <div class="tab-pane fade <? if($act=='articles'){?>show active<? } ?>" id="articles" role="tabpanel">
            <section class="container mb-4 mb-lg-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11 col-xl-10">
                        <div class="filter">
                            <div class="fw-7 pt-2 me-4 mb-3 mb-lg-0">Фильтр:</div>

                            <?

                            // Получаем массив $arResult['GROUP'] в котором содержатся данные об элементах свойства-справочника
                            if (CModule::IncludeModule('highloadblock')) {
                                $ID_GROUP = '4'; // ID highload-блока справочника
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
                            <div class="bx-news-list-filter-wrap2 list-unstyled d-flex flex-wrap filtr3-wrap">
                                <? foreach ($arResult['GROUP'] as $group): ?><? if ($group['UF_XML_ID'] != 'Brw31YCO') { ?>
                                    <label class="btn-4 btn-padding"> <input type="checkbox"
                                                                             value="<?= $group['UF_XML_ID'] ?>"
                                                                             name="filtr-article" class="filtr-article">
                                        <span class="bx-filter-param-text2"><?= $group['UF_NAME']; ?> </span> </label>
                                <? } ?><? endforeach; ?> <label class="btn-4 alc"> <input type="checkbox"
                                                                                          name="allarticle"
                                                                                          class="allarticle-in"> <span
                                            class="bx-filter-param-text2 allarticle">Все</span> </label>
                            </div>

                        </div>
                    </div>
            </section>

            <section class="sec-main-base mb-8">
                <img src="/local/templates/verter/imgs/bg/baza.png" alt="База знаний" class="title element-animation">
                <!-- <div class="title">База знаний</div> -->
                <div class="container">
                    <div class="main-base-grid loadmore_wrap loadmore_wrap_style" id="article-list">


                        <? $APPLICATION->IncludeComponent("bitrix:news.list", "BD2", Array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                            "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
                            "AJAX_MODE" => "N",	// Включить режим AJAX
                            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                            "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                            "CACHE_TYPE" => "A",	// Тип кеширования
                            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                            "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                            "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                            "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                            "DISPLAY_NAME" => "Y",	// Выводить название элемента
                            "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                            "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                            "FIELD_CODE" => array(	// Поля
                                0 => "",
                                1 => "",
                            ),
                            "FILTER_NAME" => "",	// Фильтр
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                            "IBLOCK_ID" => "7",	// Код информационного блока
                            "IBLOCK_TYPE" => "verter",	// Тип информационного блока (используется только для проверки)
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
                            "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                            "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                            "NEWS_COUNT" => "10",	// Количество новостей на странице
                            "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                            "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                            "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                            "PAGER_TEMPLATE" => "article_more",	// Шаблон постраничной навигации
                            "PAGER_TITLE" => "Новости",	// Название категорий
                            "PARENT_SECTION" => "",	// ID раздела
                            "PARENT_SECTION_CODE" => "",	// Код раздела
                            "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                            "PROPERTY_CODE" => array("PR1", "effect",
                            ),
                            "PAGER_SHOW_ALWAYS" => "Y",
                            "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
                            "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                            "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
                            "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
                            "SET_STATUS_404" => "N",	// Устанавливать статус 404
                            "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                            "SHOW_404" => "N",	// Показ специальной страницы
                            "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                            "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                            "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                            "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                            "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                        ),
                            false
                        ); ?>
                    </div>
                </div>
            </section>
        </div>

        <!-- Вебинары -->
        <div class="tab-pane fade <? if($act=='webinars'){?>show active<? } ?>" id="webinars" role="tabpanel">
            <section class="container mb-4 mb-lg-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11 col-xl-10">
                        <div class="filter">
                            <div class="fw-7 pt-2 me-4 mb-3 mb-lg-0">Фильтр:</div>
                            <?

                            // Получаем массив $arResult['GROUP'] в котором содержатся данные об элементах свойства-справочника
                            if (CModule::IncludeModule('highloadblock')) {
                                $ID_GROUP2 = '5'; // ID highload-блока справочника
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
                            <div class="bx-news-list-filter-wrap2 list-unstyled d-flex flex-wrap filtr4-wrap">
                                <? foreach ($arResult2['GROUP'] as $group2): ?>
                                    <label class="btn-4 btn-padding"> <input type="checkbox"
                                                                             value="<?= $group2['UF_XML_ID'] ?>"
                                                                             name="filtr-webinar" class="filtr-webinar">
                                        <span class="bx-filter-param-text2"><?= $group2['UF_NAME']; ?> </span> </label>
                                <? endforeach; ?> <label class="btn-4 alc"> <input type="checkbox"
                                                                                          name="allwebinar"
                                                                                          class="allwebinar-in"> <span
                                            class="bx-filter-param-text2 allwebinar">Все</span> </label>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="sec-main-base mb-8">
                <img src="/local/templates/verter/imgs/bg/baza.png" alt="База знаний" class="title element-animation">
                <div class="title">База знаний</div>
                <div class="container">
                    <div class="webinars-grid loadmore_wrap2 loadmore_wrap_style" id="webinar-list">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "webinars",
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
                                "IBLOCK_ID" => "27",
                                "IBLOCK_TYPE" => "products",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                "INCLUDE_SUBSECTIONS" => "Y",
                                "MESSAGE_404" => "",
                                "NEWS_COUNT" => "10",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_TEMPLATE" => "webinar_more",
                                "PAGER_TITLE" => "Новости",
                                "PARENT_SECTION" => "",
                                "PARENT_SECTION_CODE" => "",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "PROPERTY_CODE" => array("data", "time", "ava", "name_orator", "opis_orator", "link", "effect", "tags_webinars"),
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
                    </div>
                </div>
            </section>
        </div>

        <!-- Новости -->
        <div class="tab-pane pt-lg-5 fade <? if($act=='news'){?>show active<? } ?>" id="news" role="tabpanel">
            <section class="sec mb-8">
                <div class="container pt-1">
                    <ul class="gx-4 gy-4 gy-sm-5 row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 list-unstyled loadmore_wrap3 loadmore_wrap_style">
                        <?$APPLICATION->IncludeComponent("bitrix:news.list", "news", Array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                            "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
                            "AJAX_MODE" => "N",	// Включить режим AJAX
                            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                            "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                            "CACHE_TYPE" => "A",	// Тип кеширования
                            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                            "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                            "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                            "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                            "DISPLAY_NAME" => "Y",	// Выводить название элемента
                            "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                            "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                            "FIELD_CODE" => array(	// Поля
                                0 => "",
                                1 => "",
                            ),
                            "FILTER_NAME" => "",	// Фильтр
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                            "IBLOCK_ID" => "9",	// Код информационного блока
                            "IBLOCK_TYPE" => "verter",	// Тип информационного блока (используется только для проверки)
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
                            "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                            "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                            "NEWS_COUNT" => "16",	// Количество новостей на странице
                            "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                            "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                            "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                            "PAGER_TEMPLATE" => "news_more",	// Шаблон постраничной навигации
                            "PAGER_TITLE" => "Новости",	// Название категорий
                            "PARENT_SECTION" => "",	// ID раздела
                            "PARENT_SECTION_CODE" => "",	// Код раздела
                            "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                            "PROPERTY_CODE" => array(	// Свойства
                                0 => "PR1",
                                1 => "link",
                            ),
                            "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
                            "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                            "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
                            "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
                            "SET_STATUS_404" => "N",	// Устанавливать статус 404
                            "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                            "SHOW_404" => "N",	// Показ специальной страницы
                            "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                            "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                            "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                            "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                            "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                        ),
                            false
                        );?>
                    </ul>
                </div>
            </section>
        </div>
    </div>


    <script src="<?= SITE_TEMPLATE_PATH ?>/js/filtr.js"></script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>