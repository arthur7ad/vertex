<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$content = $arResult["CACHED_TPL"];

$content = preg_replace_callback(
    "/<table/is".BX_UTF_PCRE_MODIFIER,
    function ($matches) {
        ob_start();
        echo '</div></div><section class="sec-updates-2"><div class="simple-table"><table';
        $returnStr = @ob_get_contents();
        ob_get_clean();
        return $returnStr;
    },
    $content);

$content = preg_replace_callback(
    "/<\/table>/is".BX_UTF_PCRE_MODIFIER,
    function ($matches2) {
        ob_start();

        echo '</table></div></section><div class="container"><div class="no-padding">';
        $returnStr = @ob_get_contents();
        ob_get_clean();
        return $returnStr;
    },
    $content);

$content = preg_replace_callback(
    "/#SLIDER_ID_([\d]+)#/is".BX_UTF_PCRE_MODIFIER,
    function ($matches) {
        ob_start();
        global $slidid;
        $slidid = Array("ID" => $matches[1]);



        $GLOBALS["APPLICATION"]->IncludeComponent(
            "bitrix:news.list",
            "slider",
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
                "FILTER_NAME" => "slidid",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "22",
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
                "PROPERTY_CODE" => array("img1", "img2","img3","img4","img5","img6","img7","img8","img9","img10",),
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

        $returnStr = @ob_get_contents();
        ob_get_clean();
        return $returnStr;
    },
    $content);

echo $content;




