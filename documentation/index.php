<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Документация");
?>
<?

$id = intval($_GET['eid']);
$search = htmlspecialchars($_GET['search']);



$GLOBALS['search_result']=$search;

if($search){
?>
  <section class="sec-docs-head">
            <img alt="" src="/local/templates/verter/imgs/bg/bg-7.jpg" class="bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-9">
                    <h1>Поиск</h1>
                    <form action="/documentation/" method="get">
                        <input type="text" name="search" placeholder="Поиск" value="<?=$GLOBALS['search_result']?>">
                        <button type="submit" class="btn-1 ms-4">Найти</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-docs">
        <nav>

            <ol>
                <?php
                CModule::IncludeModule("iblock");
                $IBLOCK_ID = 29;
                $arFilter = array(
                    'IBLOCK_ID' => $IBLOCK_ID,
                    'GLOBAL_ACTIVE' => 'Y');
                $obSection = CIBlockSection::GetTreeList($arFilter);
                $cat = array();
                $arSelect = array(
                    "ID", "NAME", "SORT", "IBLOCK_SECTION_ID", "PROPERTY_name_cat", "XML_ID"
                );
                global $arFieldsq;
                $arFilter = array("IBLOCK_ID" => 29, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
                $res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);

                while ($ob = $res->GetNextElement()) {
                    $arFieldsq = $ob->GetFields();
                    ?>
                    <?
                    $cat[$arFieldsq['ID']] = $arFieldsq;
                    // $item[] = array("ID" => $arFields['ID'], "NAME" => $arFields['NAME'], "parent" => $arFields['SECTION_ID'], "SORT" =>$arFields['SORT']);
                }
                while ($arResult = $obSection->GetNext()) {
//                $arItem[] = array("ID" => $arResult['ID'], "NAME" => $arResult['NAME'], "LVL" => $arResult['DEPTH_LEVEL'], "parent" => $arResult['IBLOCK_SECTION_ID'], "SORT" =>$arResult['SORT']);
//                $cats[] = $arResult['IBLOCK_SECTION_ID'];
                    $cat[$arResult['ID']] = $arResult;
                }

                ?>

                <?

                function getTree($dataset)
                {
                    $tree = array();

                    foreach ($dataset as $id => &$node) {
                        if (!$node['IBLOCK_SECTION_ID']) {
                            $tree[$id] = &$node;
                        } else {
                            $dataset[$node['IBLOCK_SECTION_ID']]['childs'][$id] = &$node;
                        }

                    }
                    return $tree;
                }

                $tree = getTree($cat);

                //Шаблон для вывода меню в виде дерева
                function tplMenu($category)
                {
                    if ($category['XML_ID']) {
                        if ($category['PROPERTY_NAME_CAT_VALUE']) {
                            $menu = '<li>  <div class="group"><a href="/documentation/' . $category['ID'] . '">' . $category['PROPERTY_NAME_CAT_VALUE'] . '</a>';
                        } else {
                            $menu = '<li>  <div class="group"><a href="/documentation/' . $category['ID'] . '">' . $category['NAME'] . '</a>';

                        }
                    } else {
                        if (isset($category['childs'])) {
                            $menu = '<li>  <div class="group" data-bs-toggle="collapse" data-bs-target="#list-' . $category["ID"] . '"
                                    aria-expanded="false">' . $category['NAME'] . '';
                        } else {
                            $menu = '<li>  <div class="group">' . $category['NAME'] . '';
                        }
                    }
                    if (isset($category['childs'])) {
                        $menu .= ' <button type="button" data-bs-toggle="collapse" data-bs-target="#list-' . $category["ID"] . '"
                                    aria-expanded="false"></button>';
                        $menu .= '</div>';
                    }
                    $menu .= '</div>';
                    if (isset($category['childs'])) {
                        $menu .= '<ol class="collapse" id="list-' . $category["ID"] . '">' . showCat($category['childs']) . '';
                    } else {
                        $menu .= '<ol class="collapse" id="list-' . $category["ID"] . '">';
                    }


                    $menu .= '</ol>';
                    $menu .= '</div></li>';

                    return $menu;
                }


                function showCat($data)
                {
                    $string = '';
                    usort($data, function ($a, $b) {
                        return ($a['SORT'] - $b['SORT']);
                    });
                    foreach ($data as $item) {

                        $string .= tplMenu($item);
                    }


                    return $string;
                }

                $cat_menu = showCat($tree);

                echo '' . $cat_menu . '';

                ?>

            </ol>

        </nav>
        <section class="sec-docs-area-search">
            <div class="container mb-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-9 col-xxl-8">
                        <div class="doc-mar">
                      <?

                      CModule::IncludeModule("iblock");
                      $arSelect = array(
                          "ID",
                          "NAME",
                          "IBLOCK_ID",
                      );
                      //WHERE
                      $arFilters = array(
                          "ACTIVE" => "Y",
                          "IBLOCK_ID" => 29,
                          "ACTIVE_DATE" => "Y",
                          "ACTIVE" => "Y",
                          "CHECK_PERMISSIONS" => "Y",
                          "?SEARCHABLE_CONTENT" => $search
                      );
                      //ORDER BY
                      $arSort = array(
                          "ID" => "DESC",
                      );
echo '<h4>Результаты поиска:</h4>';
                      $count=0;
                      $arResult["ITEMS"] = array();
                      $rsElements = CIBlockElement::GetList($arSort, $arFilters, false, false, $arSelect);
                      while($obElement = $rsElements->GetNextElement())
                      {
                          $arItem = $obElement->GetFields();
                          $count++;
                          echo '<a class="group doc-search-item" href="/documentation/'.$arItem['id'].'">'.$arItem['NAME'].'</a><br>';
                      }
if($count==0){
    echo '<p>К сожалению по вашему запросу ничего не найдено</p>';
}
                      ?>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </section>
    <?php

}
else {
global $arNewsFilter;
if(intval($id)!=0) {
    $arNewsFilter = array("ID" => $id);
    $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "documentation",
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
            "FILTER_NAME" => "arNewsFilter",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "29",
            "IBLOCK_TYPE" => "products",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "1",
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
            "PROPERTY_CODE" =>  array("link_name", "osn"),
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
    );


} else {
    global $osnFilter;
    $osnFilter = array("PROPERTY_osn_VALUE"=>"Да");

    $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "documentation",
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
            "FILTER_NAME" => "osnFilter",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "29",
            "IBLOCK_TYPE" => "products",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "1",
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
            "PROPERTY_CODE" =>  array("link_name", "osn"),
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
            "STRICT_SECTION_CHECK" => "N",
        )
    );

} }
 ?>



<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>