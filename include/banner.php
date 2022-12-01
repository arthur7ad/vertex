<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

$arFilter = Array(
    "IBLOCK_ID"=> 2,
    "ID" => 2
);
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, array("ID", "IBLOCK_ID", "PREVIEW_TEXT", "DETAIL_TEXT", "PROPERTY_PR1", "PREVIEW_PICTURE"));
while($ar_fields = $res->GetNext())
{
    $text1 = $ar_fields["~PREVIEW_TEXT"];
    $text2 = $ar_fields["~DETAIL_TEXT"];
    $file = CFile::ResizeImageGet($ar_fields["PREVIEW_PICTURE"], array('width'=>1650, 'height'=>260), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $fon = CFile::ResizeImageGet($ar_fields["PROPERTY_PR1_VALUE"], array('width'=>600, 'height'=>600), BX_RESIZE_IMAGE_PROPORTIONAL, true);
}
?>


<main>
    <section class="sec-main mb-8">
        <img src="<?=$file['src']?>" alt="verter" class="verter element-animation">
        <div class="container">
            <div class="box-main">
                <div class="text">
                    <h1><?=$text1?></h1>
                    <p class="fs-14 ps-md-5"><?=$text2?>и</p>
                </div>
                <img class="element-animation" src="<?=$fon['src']?>" alt="<?=$text1?>">
            </div>