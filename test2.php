<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
?><br>
 <br>
 <br>
 <br>
 <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:search.title",
	"",
	Array(
		"CATEGORY_0" => array("no"),
		"CATEGORY_0_TITLE" => "",
		"CHECK_DATES" => "N",
		"CONTAINER_ID" => "title-search",
		"INPUT_ID" => "title-search-input",
		"NUM_CATEGORIES" => "1",
		"ORDER" => "date",
		"PAGE" => "#SITE_DIR#search/index.php",
		"SHOW_INPUT" => "Y",
		"SHOW_OTHERS" => "N",
		"TOP_COUNT" => "5",
		"USE_LANGUAGE_GUESS" => "Y"
	)
);?><br>
 <br>
 <?php
$IBLOCK_ID = 24;
$arFilter = array(
    'IBLOCK_ID' => $IBLOCK_ID,
    'GLOBAL_ACTIVE' => 'Y');
$arSelect = array(
    "ID", "NAME"
);
$obSection = CIBlockSection::GetTreeList($arFilter);
$arItem = array();
while ($arResult = $obSection->GetNext()) {
     $arItem[] = array("ID" => $arResult['ID'], "NAME" => $arResult['NAME'], "LVL" => $arResult['DEPTH_LEVEL']);

}
?>
<ul>
	 <?
        $arSelect = array();
        $x = 0;
        $arr = array();
        foreach ($arItem as $key => $element) {

            echo '<li>';
            echo $element['LVL'] . $element['NAME'] . '<br>';

            $arFilter = array("IBLOCK_ID" => IntVal($IBLOCK_ID), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "SECTION_ID" => $element["ID"]);
            $res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
            while ($ob = $res->GetNextElement()) {
                $arFields = $ob->GetFields();
                ?> <?= $arFields["NAME"] ?> <?
            }
            echo '</li>';

        }

        ?>
</ul>
 <br>
 <br>
 <br>
 <br>
 <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>