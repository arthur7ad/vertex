<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
?>
    <br><br><br><br><br><br><br>
<?php
CModule::IncludeModule("iblock");
$IBLOCK_ID = 29;
$arFilter = array(
    'IBLOCK_ID' => $IBLOCK_ID,
    'GLOBAL_ACTIVE' => 'Y');

$obSection = CIBlockSection::GetTreeList($arFilter);
$arItem = array();
$cats = array();
$cat = array();
while ($arResult = $obSection->GetNext()) {
    $arItem[] = array("ID" => $arResult['ID'], "NAME" => $arResult['NAME'], "LVL" => $arResult['DEPTH_LEVEL'], "parent" => $arResult['IBLOCK_SECTION_ID']);
    $cats[] = $arResult['IBLOCK_SECTION_ID'];
    $cat[$arResult['ID']] = $arResult;
}

?>

<?

function getTree($dataset) {
    $tree = array();

    foreach ($dataset as $id => &$node) {
        //Если нет вложений
        if (!$node['IBLOCK_SECTION_ID']){
            $tree[$id] = &$node;
        }else{
            //Если есть потомки то перебераем массив
            $dataset[$node['IBLOCK_SECTION_ID']]['childs'][$id] = &$node;
        }
    }
    return $tree;
}

$tree = getTree($cat);

//Шаблон для вывода меню в виде дерева
function tplMenu($category){
    $menu = '<li>
        <a href="#" title="'. $category['NAME'] .'">'.
        $category['NAME'].'</a>';

        if(isset($category['childs'])){
        $menu .= '<ul>'. showCat($category['childs']) .'</ul>';
    }

    $arSelect = array(
        "ID", "NAME"
    );
    $arFilter = array("IBLOCK_ID" => 29, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "SECTION_ID" => $category["ID"]);
    $res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);

    while ($ob = $res->GetNextElement()) {
        $arFields = $ob->GetFields();
        ?>

        <?  $menu .= '<li>'.$arFields["NAME"].'</li>'; ?>

        <?
    }

    $menu .= '</li>';

    return $menu;
}

/**
 * Рекурсивно считываем наш шаблон
 **/
function showCat($data){
    $string = '';
    foreach($data as $item){
        $string .= tplMenu($item);
    }
    return $string;
}

//Получаем HTML разметку
$cat_menu = showCat($tree);

//Выводим на экран
echo '<ul>'. $cat_menu .'</ul>';

?>



    <br><br><br><br><br>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>