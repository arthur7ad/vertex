<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
ob_start();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$GLOBALS['SEARCH'] = $arResult["SEARCH"];
$this->setFrameMode(true);
?>

<? foreach ($arResult["ITEMS"] as $k => $arItem) { ?>

    <?php
    $APPLICATION->SetTitle($arItem['NAME']);

    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));


    ?>


    <section class="sec-docs-head">
        <? if ($arItem['PREVIEW_PICTURE']['SRC']) { ?>
            <img alt="<?= $arItem['NAME'] ?>" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" class="bg">
        <? } else { ?>
            <img alt="" src="/local/templates/verter/imgs/bg/bg-7.jpg" class="bg">
            <? } ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-9">
                    <h1><?= $arItem['NAME'] ?></h1>
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
        <section class="sec-docs-area">
            <div class="container mb-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-9 col-xxl-8">
                            <?= htmlspecialcharsBack($arItem['DETAIL_TEXT']) ?>
                    </div>
                </div>
            </div>

        </section>
    </section>
<? } ?>
<?
$this->__component->arResult["CACHED_TPL"] = @ob_get_contents();
ob_get_clean();
?>