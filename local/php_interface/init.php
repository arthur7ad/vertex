<?
function get_data($type)
{
    if($_GET['clear_cache']){unset($_SESSION['data_in']);}
    if (empty($_SESSION['data_in'])) {
        if (CModule::IncludeModule("iblock")) {
            $arFilter = ["IBLOCK_ID" => 1, "ID" => "1"];
            $res = CIBlockElement::GetList(array(), $arFilter, false, false, array("ID", "IBLOCK_ID", "NAME", "PROPERTY_PR1", "PREVIEW_TEXT",
                "PROPERTY_PR2", "PROPERTY_PR3"));
            while ($ar_fields = $res->GetNext()) {
                $_SESSION['data_in'] = $ar_fields;
            }
        }
    }

        if ($type == 'phone'){
            return $_SESSION['data_in']['NAME'];
        }elseif($type == 'telega' && $_SESSION['data_in']['PROPERTY_PR3_VALUE']){
            return "tg://resolve?domain=".$_SESSION['data_in']['PROPERTY_PR3_VALUE'];
        }elseif($type == 'time'){
            return $_SESSION['data_in']['PREVIEW_TEXT'];
        }elseif($type == 'vk'){
            return $_SESSION['data_in']['PROPERTY_PR2_VALUE'];
        }elseif($type == 'dzen'){
            return $_SESSION['data_in']['PROPERTY_PR1_VALUE'];
        }

}
function pre($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

/*AddEventHandler("main", "OnEpilog", "Redirect404");

function Redirect404() {
    if (
        !defined('ADMIN_SECTION') &&
        defined("ERROR_404")
        //defined("PATH_TO_404")
        //file_exists($_SERVER["DOCUMENT_ROOT"] . PATH_TO_404)
    ) {
        //LocalRedirect("/404.php", "404 Not Found");
        global $APPLICATION;
        $APPLICATION->RestartBuffer();
        CHTTP::SetStatus("404 Not Found");
        include($_SERVER["DOCUMENT_ROOT"] . "/local/templates/404/header.php");
        include($_SERVER["DOCUMENT_ROOT"] . "/404.php");
        include($_SERVER["DOCUMENT_ROOT"] . "/local/templates/404/footer.php");
    }
}*/
?>