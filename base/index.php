<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("База знаний");
?>

    <section class="sec-base-main">
        <ul class="nav nav-tabs" id="base" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link bg active" data-bs-toggle="tab" data-bs-target="#articles" type="button" role="tab" aria-selected="true">Статьи</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link bg" data-bs-toggle="tab" data-bs-target="#webinars" type="button" role="tab" aria-selected="false">Вебинары</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link bg" data-bs-toggle="tab" data-bs-target="#news" type="button" role="tab" aria-selected="false">Новости</button>
            </li>
        </ul>
    </section>
    <div class="tab-content pt-2 pt-sm-4 pt-lg-5 mb-8" id="tabs-base">
        <!-- Статьи -->
        <div class="tab-pane fade show active" id="articles" role="tabpanel">
            <section class="container mb-4 mb-lg-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11 col-xl-10">
                        <div class="filter">
                            <div class="fw-7 pt-2 me-4 mb-3 mb-lg-0">Фильтр:</div>
                            <ul class="list-unstyled flex-1 d-flex flex-wrap">
                                <li><button type="button" class="btn-5 active">Маркировка</button></li>
                                <li><button type="button" class="btn-5">Маркировка остатков</button></li>
                                <li><button type="button" class="btn-5">Маркировка выпуска</button></li>
                                <li><button type="button" class="btn-5">Ввод в оборот</button></li>
                                <li><button type="button" class="btn-5">Агрегация в короба</button></li>
                                <li><button type="button" class="btn-5">Отгрузка клиенту</button></li>
                                <li><button type="button" class="btn-5">Вывод из оборота</button></li>
                                <li><button type="button" class="btn-5">Дистрибуция</button></li>
                                <li><button type="button" class="btn-5">Маркировка в рознице</button></li>
                                <li><button type="button" class="btn-5">Все</button></li>
                            </ul>
                        </div>
                    </div>
            </section>

            <section class="sec-main-base mb-8">
                <!-- <div class="title">База знаний</div> -->
                <div class="container">
                    <div class="main-base-grid">
                        <div>
                            <figure class="gradient">
                                <img src="/local/templates/verter/imgs/base/box_1.png" alt="Маркировка остатков, ивентаризация">
                                <figcaption>Маркировка остатков, ивентаризация</figcaption>
                            </figure>
                            <p>Перед получением кодов маркировки datamatrix, необходимо провести инвентаризацию на складе</p>
                            <a href="" class="more">подробнее</a>
                        </div>
                        <div>
                            <figure>
                                <img src="/local/templates/verter/imgs/base/sticker.png" alt="Маркировка остатков, получение кодов маркировки">
                                <figcaption>Маркировка остатков, получение кодов маркировки</figcaption>
                            </figure>
                            <p>Перед получением кодов маркировки datamatrix, необходимо провести инвентаризацию на складе</p>
                            <a href="" class="more">подробнее</a>
                        </div>
                        <div>
                            <figure>
                                <img src="/local/templates/verter/imgs/base/box_2.png" alt="Маркировка остатков, получение кодов маркировки">
                                <figcaption>Маркировка остатков, получение кодов маркировки</figcaption>
                            </figure>
                            <p>Перед получением кодов маркировки datamatrix, необходимо провести инвентаризацию на складе</p>
                            <a href="" class="more">подробнее</a>
                        </div>
                        <div>
                            <figure class="gradient">
                                <img src="/local/templates/verter/imgs/base/box_3.png" alt="Маркировка остатков, получение кодов маркировки">
                                <figcaption>Маркировка остатков, получение кодов маркировки</figcaption>
                            </figure>
                            <p>Перед получением кодов маркировки datamatrix, необходимо провести инвентаризацию на складе</p>
                            <a href="" class="more">подробнее</a>
                        </div>
                        <div>
                            <figure class="bg-img">
                                <img src="/local/templates/verter/imgs/base/scanner.png" alt="Маркировка остатков, получение кодов маркировки">
                                <figcaption>Маркировка остатков, получение кодов маркировки</figcaption>
                            </figure>
                            <p>Перед получением кодов маркировки datamatrix, необходимо провести инвентаризацию на складе</p>
                            <a href="" class="more">подробнее</a>
                        </div>
                        <div>
                            <figure class="bg-img">
                                <img src="/local/templates/verter/imgs/base/scanner.png" alt="Маркировка остатков, получение кодов маркировки">
                                <figcaption>Маркировка остатков, получение кодов маркировки</figcaption>
                            </figure>
                            <p>Перед получением кодов маркировки datamatrix, необходимо провести инвентаризацию на складе</p>
                            <a href="" class="more">подробнее</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Вебинары -->
        <div class="tab-pane fade" id="webinars" role="tabpanel">
            <section class="container mb-4 mb-lg-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11 col-xl-10">
                        <div class="filter">
                            <div class="fw-7 pt-2 me-4 mb-3 mb-lg-0">Фильтр:</div>
                            <ul class="list-unstyled flex-1 d-flex flex-wrap">
                                <li><button type="button" class="btn-5 active">Маркировка</button></li>
                                <li><button type="button" class="btn-5">Маркировка остатков</button></li>
                                <li><button type="button" class="btn-5">Маркировка выпуска</button></li>
                                <li><button type="button" class="btn-5">Ввод в оборот</button></li>
                                <li><button type="button" class="btn-5">Агрегация в короба</button></li>
                                <li><button type="button" class="btn-5">Отгрузка клиенту</button></li>
                                <li><button type="button" class="btn-5">Вывод из оборота</button></li>
                                <li><button type="button" class="btn-5">Дистрибуция</button></li>
                                <li><button type="button" class="btn-5">Маркировка в рознице</button></li>
                                <li><button type="button" class="btn-5">Все</button></li>
                            </ul>
                        </div>
                    </div>
            </section>

            <section class="sec-main-base mb-8">
                <div class="title">База знаний</div>
                <div class="container">
                    <div class="webinars-grid">
                        <div>
                            <div class="webinar-card">
                                <time>
                                    <span>23 августа</span>
                                    <br><span class="fw-7">16:00</span>
                                </time>
                                <h5>Базовые принципы финансового учета</h5>
                                <div class="speaker">
                                    <img src="/local/templates/verter/imgs/photo.png" alt="Дмитрий Зайцев" class="photo">
                                    <div class="flex-1">
                                        <h6>Дмитрий Зайцев</h6>
                                        <p>Инвестор, управляющий активами</p>
                                    </div>
                                </div>
                            </div>
                            <p>Этот вебинар Дмитрия Зайцева дополнит содержание модуля по финансовой грамотности</p>
                            <a href="" class="more">подробнее</a>
                        </div>
                        <div>
                            <div class="webinar-card">
                                <img src="/local/templates/verter/imgs/img-14.png" alt="bg" class="bg">
                                <time>
                                    <span>11 марта</span>
                                    <br><span class="fw-7">18:30</span>
                                </time>
                                <h5>Ключевые направления интернет-маркетинга</h5>
                                <div class="speaker">
                                    <img src="/local/templates/verter/imgs/photo.png" alt="Юлиана Гордон" class="photo">
                                    <div class="flex-1">
                                        <h6>Юлиана Гордон</h6>
                                        <p>Член совета директоров интернет-магазина AIZEL</p>
                                    </div>
                                </div>
                            </div>
                            <p>Этот вебинар дополнит содержание модуля, посвященного интернет-маркетингу</p>
                            <a href="" class="more">подробнее</a>
                        </div>
                        <div>
                            <div class="webinar-card">
                                <div class="bg-grad"></div>
                                <time>
                                    <span>11 марта</span>
                                    <br><span class="fw-7">18:30</span>
                                </time>
                                <h5>Ключевые направления интернет-маркетинга</h5>
                                <div class="speaker">
                                    <img src="/local/templates/verter/imgs/photo.png" alt="Юлиана Гордон" class="photo">
                                    <div class="flex-1">
                                        <h6>Юлиана Гордон</h6>
                                        <p>Член совета директоров интернет-магазина AIZEL</p>
                                    </div>
                                </div>
                            </div>
                            <p>Этот вебинар дополнит содержание модуля, посвященного интернет-маркетингу</p>
                            <a href="" class="more">подробнее</a>
                        </div>
                        <div>
                            <div class="webinar-card">
                                <time>
                                    <span>23 августа</span>
                                    <br><span class="fw-7">16:00</span>
                                </time>
                                <h5>Базовые принципы финансового учета</h5>
                                <div class="speaker">
                                    <img src="/local/templates/verter/imgs/photo.png" alt="Дмитрий Зайцев" class="photo">
                                    <div class="flex-1">
                                        <h6>Дмитрий Зайцев</h6>
                                        <p>Инвестор, управляющий активами</p>
                                    </div>
                                </div>
                            </div>
                            <p>Этот вебинар Дмитрия Зайцева дополнит содержание модуля по финансовой грамотности</p>
                            <a href="" class="more">подробнее</a>
                        </div>
                        <div>
                            <div class="webinar-card">
                                <img src="/local/templates/verter/imgs/img-15.png" alt="bg" class="bg">
                                <time>
                                    <span>23 августа</span>
                                    <br><span class="fw-7">16:00</span>
                                </time>
                                <h5>Базовые принципы финансового учета</h5>
                                <div class="speaker">
                                    <img src="/local/templates/verter/imgs/photo.png" alt="Дмитрий Зайцев" class="photo">
                                    <div class="flex-1">
                                        <h6>Дмитрий Зайцев</h6>
                                        <p>Инвестор, управляющий активами</p>
                                    </div>
                                </div>
                            </div>
                            <p>Этот вебинар Дмитрия Зайцева дополнит содержание модуля по финансовой грамотности</p>
                            <a href="" class="more">подробнее</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Новости -->
        <div class="tab-pane pt-lg-5 fade" id="news" role="tabpanel">
            <section class="sec mb-8">
                <div class="container pt-1">
                    <ul class="gx-4 gy-4 gy-sm-5 row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 list-unstyled">
                        <li>
                            <div class="news-preview">
                                <h5>Улучшение печати - в "продажи" 1.4.9.4</h5>
                                <p>Появилась поддержка новых групп маркированного товара</p>
                                <a href="/" class="more">Подробнее</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-preview">
                                <h5>Интегрирован Seuic AutolD Q9C</h5>
                                <p>Завершена интеграция термина сбора данных</p>
                                <a href="/" class="more">Подробнее</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-preview">
                                <h5>Интегрирован Martech ALPHA</h5>
                                <p>Появилась поддержка новых групп маркированного товара</p>
                                <a href="/" class="more">Подробнее</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-preview">
                                <h5>Улучшение печати - в "продажи" 1.4.9.4</h5>
                                <p>Появилась поддержка новых групп маркированного товара</p>
                                <a href="/" class="more">Подробнее</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-preview">
                                <h5>Интегрирован Seuic AutolD Q9C</h5>
                                <p>Завершена интеграция термина сбора данных</p>
                                <a href="/" class="more">Подробнее</a>
                            </div>
                        </li>
                        <li>
                            <div class="news-preview">
                                <h5>Интегрирован Martech ALPHA</h5>
                                <p>Появилась поддержка новых групп маркированного товара</p>
                                <a href="/" class="more">Подробнее</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>

    <section class="sec-working-days py-4 py-md-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-11 d-flex justify-content-between align-items-center">
                    <img src="/local/templates/verter/imgs/logo.svg" alt="Verter" class="logo d-sm-none">
                    <img src="/local/templates/verter/imgs/verter-logo.png" alt="logo" class="d-none d-sm-block">

                    <div class="text-end">
                        <a href="tel:+74950184105" class="d-block fs-13 fw-7 mb-1">+7 495 018 41 05</a>
                        <div class="fs-07">Рабочие дни с ПН - ПТ / 10:00 - 18:00</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>