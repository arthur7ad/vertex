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
$arSelect = array(
    "ID", "NAME"
);
$obSection = CIBlockSection::GetTreeList($arFilter);
$arItem = array();
$cats = array();
while ($arResult = $obSection->GetNext()) {
    $arItem[] = array("ID" => $arResult['ID'], "NAME" => $arResult['NAME'], "LVL" => $arResult['DEPTH_LEVEL'], "parent" => $arResult['IBLOCK_SECTION_ID']);
}
?>
    <ul>
        <?
        foreach ($arItem as $key => $element) {

            for ($i = 0; $i <= ($element['LVL'] - 2); $i++)
                echo '<li><ul>';
            echo '<li>';

            echo 'Par:'.$element['parent'] . ' ID:'.$element['ID'] . ' | Название:'. $element['NAME'] . '';
            $arFilter = array("IBLOCK_ID" => IntVal($IBLOCK_ID), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "SECTION_ID" => $element["ID"]);
            $res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);

            while ($ob = $res->GetNextElement()) {
                $arFields = $ob->GetFields();
                ?>

                <?= $arFields["NAME"] ?>

                <?
            }
            echo '</li>';
            for ($i = 0; $i <= ($element['LVL'] - 2); $i++)
                echo '</ul></li>';
        }

        ?>
    </ul>

    <br><br><br><br><br>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>