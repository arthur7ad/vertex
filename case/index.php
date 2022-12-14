<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
?>
<?

$id = intval($_GET['eid']);
global $arNewsFilter;
$arNewsFilter = array("ID" => $id);

$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "cases-detailed",
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
        "IBLOCK_ID" => "21",
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
        "PROPERTY_CODE" => array("opis_banner", "logo", "title1", "opis1", "title2", "opis2", "showcaz", "title_table1", "title_table2", "opis_table1", "opis_table2", "table1", "table2", "showprod", "product1_img", "product2_img", "product3_img", "product4_img", "product5_img", "product6_img", "product1_title", "product2_title", "product3_title", "product4_title", "product5_title", "product6_title", "product1_opis", "product2_opis", "product3_opis", "product4_opis", "product5_opis", "product6_opis", "product1_link", "product2_link", "product3_link", "product4_link", "product5_link", "product6_link", "showrev", "name_review1", "status_review1", "link_review1", "foto_review1", "review1", "name_review2", "status_review2", "link_review2", "foto_review2", "review2", "name_review3", "status_review3", "link_review3", "foto_review3", "review3", "name_review4", "status_review4", "link_review4", "foto_review4", "review4", "name_review5", "status_review5", "link_review5", "foto_review5", "review5", "opisstep", "namestep1", "opisstep1", "showeffect", "effectimg1", "effectimg2", "effectimg3", "effectimg4", "effectimg5", "effectimg6", "effectimg7", "effectimg8", "effectimg9", "effectopis1", "effectopis2", "effectopis3", "effectopis4", "effectopis5", "effectopis6", "effectopis7", "effectopis8", "effectopis9", "showresult", "resultopis", "resultimg1", "resultimg2", "resultimg3", "resultimg4", "resultimg5", "resultimg6", "resultimg7", "resultimg8", "resultimg9", "resultimg10", "resultopis1", "resultopis2", "resultopis3", "resultopis4", "resultopis5", "resultopis6", "resultopis7", "resultopis8", "resultopis9", "resultopis10", "showcases", "casename1", "caseopis1", "caselogo1", "caseimg1", "casejob1", "casespeed1", "caselink1", "casename2", "caseopis2", "caselogo2", "caselink2", "casename3", "caseopis3", "caselogo3", "caselink3","showform",),
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

    <? $APPLICATION->IncludeComponent(
        "verter:main.feedback",
        "form-case",
        array(
            "AJAX_MODE" => "Y",
            "EMAIL_TO" => "test@test.ru",
            "EVENT_MESSAGE_ID" => array(),
            "OK_TEXT" => "Ваше сообщение отправлено.",
            "REQUIRED_FIELDS" => array("NAME", "EMAIL", "PHONE"),
            "USE_CAPTCHA" => "N"
        )
    ); ?>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>