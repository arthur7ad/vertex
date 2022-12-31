<!--<section class="sec-docs-head">-->
<!--    <img src="imgs/bg/bg-7.jpg" alt="Документация" class="bg">-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-12 col-xl-9">-->
<!--                <h1><strong>Verter.Склад</strong> Документация</h1>-->
<!--                <form action="">-->
<!--                    <input type="search" placeholder="Поиск">-->
<!--                    <button type="button" class="btn-1 ms-4">Найти</button>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<br><br><br><br><br><br>
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
            $arItem = array();
            $cats = array();
            $cat = array();
            $item = array();
            $arSelect = array(
                "ID", "NAME", "SORT", "IBLOCK_SECTION_ID",
            );
           GlOBAL $arFieldsq;
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

            function getTree($dataset) {
                $tree = array();

                foreach ($dataset as $id => &$node) {
                    if (!$node['IBLOCK_SECTION_ID']){
                        $tree[$id] = &$node;
                    }else{
                        $dataset[$node['IBLOCK_SECTION_ID']]['childs'][$id] = &$node;
                    }

                }
                return $tree;
            }

            $tree = getTree($cat);

            //Шаблон для вывода меню в виде дерева
            function tplMenu($category){
                $menu = '<li>  <div class="group"><a href="#" title="'. $category['NAME'] .'">'.$category['NAME'].'</a>';
            if(isset($category['childs'])) {
                $menu .= ' <button type="button" data-bs-toggle="collapse" data-bs-target="#list-'.$category["ID"].'"
                                    aria-expanded="false"></button>';
                $menu .= '</div>';
            }
                $menu .= '</div>';
                if(isset($category['childs'])){
                    $menu .= '<ol class="collapse" id="list-'.$category["ID"].'">'. showCat($category['childs']) .'';
                }else {
                    $menu .= '<ol class="collapse" id="list-'.$category["ID"].'">';
                }


                $menu .= '</ol>';
                $menu .= '</div></li>';

                return $menu;
            }


            function showCat($data){
                $string = '';
                usort($data, function($a, $b){
                    return ($a['SORT'] - $b['SORT']);
                });
                foreach($data as $item){

                    $string .= tplMenu($item);
                }


                return $string;
            }
            $cat_menu = showCat($tree);

            echo ''. $cat_menu .'';

            ?>

            </ol>

    </nav>
    <section class="sec-docs-area">
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-9 col-xxl-8">
                    <p><strong class="main-color">Пример:</strong> Наш поставщик (ООО "Производитель обуви") отправил
                        нам автомобиль с партией обуви, а также отразил факт продажи в своём личном кабинете Честного
                        знака</p>

                    <h5>Условно, процесс приёмки маркированного товара состоит из следующих этапов:</h5>

                    <ol>
                        <li>Получение из личного кабинета Честного Знака информации о поступлении с кодами маркировки
                        </li>
                        <li>Создание в 1С документа приобретения и отправка задания на склад о необходимости провести
                            фактическую приёмку
                        </li>
                        <li>Склад, получив задание с помощью Терминала Сбора Данных (ТСД) осуществляет приёмку</li>
                        <li>Начальник склада, получив событие о том, что приёмка осуществлена, создаёт приходный ордер,
                            тем самым подтверждая приёмку
                        </li>
                        <li>Специалист, отвечающий за взаимодействие с Честным знаком получает информацию, что товар
                            принят и отправляет в Честный знак подтверждение о приёмке
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <section class="sec-func-videos container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-9">
                    <h3 class="fw-7">Пройдемся по основным этапам приемки товара с маркировкой</h3>
                </div>
                <!--                <div class="col-12 col-lg-10 col-xl-9 col-xxl-8">-->
                <!--                    <h5><span class="main-color">Шаг 1.</span> Загрузка из ЛК Честного знака актуальных поступлений</h5>-->
                <!--                    <iframe width="100%" height="320" src="https://www.youtube.com/embed/W9nZ6u15yis" title="Black Screen 10 seconds" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                <!---->
                <!--                    <h5><span class="main-color">Шаг 2.</span> Отправка на ТСД задания о необходимости приёмки товара</h5>-->
                <!--                    <iframe width="100%" height="320" src="https://www.youtube.com/embed/W9nZ6u15yis" title="Black Screen 10 seconds" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                <!---->
                <!--                    <h5><span class="main-color">Шаг 3.</span> Приёмка товара с маркировкой с использованием ТСД</h5>-->
                <!--                    <iframe width="100%" height="320" src="https://www.youtube.com/embed/W9nZ6u15yis" title="Black Screen 10 seconds" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                <!---->
                <!--                    <h5><span class="main-color">Шаг 4.</span> Получение результатов с ТСД о фактической приёмки</h5>-->
                <!--                    <iframe width="100%" height="320" src="https://www.youtube.com/embed/W9nZ6u15yis" title="Black Screen 10 seconds" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                <!---->
                <!--                    <h5><span class="main-color">Шаг 5.</span> Отправка в ЛК Честного знака подтверждения о приёмке маркированного товара</h5>-->
                <!--                    <iframe width="100%" height="320" src="https://www.youtube.com/embed/W9nZ6u15yis" title="Black Screen 10 seconds" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                <!--                </div>-->
            </div>
        </section>
    </section>
</section>