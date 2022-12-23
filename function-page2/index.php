<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Функция");
?>

    <section class="sec-func-page mb-8">
        <img src="/local/templates/verter/imgs/bg/cube.png" alt="Функция" class="bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-10">
                    <h1 class="mb-0">Поступление товара с&nbsp;маркировкой</h1>
                    <p class="fs-15 ps-5 mt-5">В рамках данного кейса мы рассмотрим процесс приемки маркированного товара в 1С с использованием терминала сбора данных и специализированных рабочих мест</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-function-info container mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-9 col-xxl-8">
                <p><strong class="main-color">Пример:</strong> Наш поставщик (ООО "Производитель обуви") отправил нам автомобиль с партией обуви, а также отразил факт продажи в своём личном кабинете Честного знака</p>

                <h5>Условно, процесс приёмки маркированного товара состоит из следующих этапов:</h5>

                <ol>
                    <li>Получение из личного кабинета Честного Знака информации о поступлении с кодами маркировки</li>
                    <li>Создание в 1С документа приобретения и отправка задания на склад о необходимости провести фактическую приёмку</li>
                    <li>Склад, получив задание с помощью Терминала Сбора Данных (ТСД) осуществляет приёмку</li>
                    <li>Начальник склада, получив событие о том, что приёмка осуществлена, создаёт приходный ордер, тем самым подтверждая приёмку</li>
                    <li>Специалист, отвечающий за взаимодействие с Честным знаком получает информацию, что товар принят и отправляет в Честный знак подтверждение о приёмке</li>
                </ol>

                <h5>Схематично процесс приёмки маркированного товара показан на схеме ниже</h5>

                <img src="/local/templates/verter/imgs/scheme.png" alt="Схематично процесс приёмки маркированного товара показан на схеме ниже" class="img-fluid">

                <p>Как мы видим из схемы, необходимо выполнить минимум 13 операций, часть из которых связаны с передачей данных в ЛК Честного знака</p>
                <p>Проблема заключается в том, что поступлений может быть несколько, в каждом поступлении десятки тысяч единиц маркированного товара, в одной фуре может приходить товар по нескольким накладным.</p>
            </div>

            <div class="col-12 col-lg-10 col-xl-9 mt-5">
                <h2>Задача ИТ-службы сводится к тому, чтобы:</h2>
            </div>
            <div class="col-12 col-lg-10 col-xl-9 col-xxl-8">
                <p>Обеспечить требования Закона об учете маркированного товара, предоставить сотрудникам удобный инструмент для ежедневной работы.</p>
                <h5>Следующая схема показывает как можно выполнить поставленные задачи, используя ряд разработок компании "<span class="main-color">Вертер. Сенсорные технологии</span>":</h5>
                <img src="/local/templates/verter/imgs/scheme2.png" alt="Вертер. Сенсорные технологии" class="img-fluids">
                <p class="fs-08">Схема поступления товара с маркировкой в разрезе подразделений, документов и АРМов</p>
                <h5>На схеме показаны место и роль Автоматизированных Рабочих Мест (АРМ) для 1С и в чем их ключевой функционал, в частности:</h5>
            </div>
        </div>
    </section>

    <section class="sec-function-sliders mb-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-lg-10 col-xl-9">
                    <h2 class="main-color">1. АРМ "Вертер. Интеграция с Честным знаком"</h2>
                </div>
                <div class="col-12 col-lg-10 col-xl-9 col-xxl-8">
                    <div class="swiper-func mb-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/local/templates/verter/imgs/screenshot.png" alt="screenshot">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/templates/verter/imgs/screenshot.png" alt="screenshot">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/templates/verter/imgs/screenshot.png" alt="screenshot">
                            </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="mb-5">Рабочее место сотрудника, отвечающего за взаимодействие с Честным Знаком</div>
                    <p>Данное рабочее место, предназначено для:</p>
                    <ul>
                        <li>Получения из Личного Кабинета (ЛК) Честного знака поступлений</li>
                        <li>Получение из ЛК кодов маркировки отправленных поставщиком</li>
                        <li>Визуальную индикацию статуса обработки поступления</li>
                        <li>Сравнение по каждой поставке, что должно было прийти с тем, что фактически пришло на склад</li>
                        <li>Создание первичных документов 1С</li>
                        <li>Отправка в ЛК Честного знака подтверждения о приёмке (ввод в оборот)</li>
                    </ul>
                </div>
            </div>

            <div class="row justify-content-center mb-5">
                <div class="col-12 col-lg-10 col-xl-9">
                    <h2 class="main-color">2. АРМ "Вертер. Мобильный склад</h2>
                </div>
                <div class="col-12 col-lg-10 col-xl-9 col-xxl-8">
                    <div class="swiper-func mb-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/local/templates/verter/imgs/screenshot.png" alt="screenshot">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/templates/verter/imgs/screenshot.png" alt="screenshot">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/templates/verter/imgs/screenshot.png" alt="screenshot">
                            </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="mb-5">Рабочее место сотрудника, отвечающего за взаимодействие с Честным Знаком</div>
                    <p>Данное рабочее место, предназначено для:</p>
                    <ul>
                        <li>Получения из Личного Кабинета (ЛК) Честного знака поступлений</li>
                        <li>Получение из ЛК кодов маркировки отправленных поставщиком</li>
                        <li>Визуальную индикацию статуса обработки поступления</li>
                        <li>Сравнение по каждой поставке, что должно было прийти с тем, что фактически пришло на склад</li>
                        <li>Создание первичных документов 1С</li>
                        <li>Отправка в ЛК Честного знака подтверждения о приёмке (ввод в оборот)</li>
                    </ul>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-9">
                    <h2 class="main-color">3. Мобильное приложение для ТСД "Вертер. Склад"</h2>
                </div>
                <div class="col-12 col-lg-10">
                    <div class="swiper-func-3 mb-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/local/templates/verter/imgs/smartphone.png" alt="smartphone">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/templates/verter/imgs/smartphone.png" alt="smartphone">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/templates/verter/imgs/smartphone.png" alt="smartphone">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/templates/verter/imgs/smartphone.png" alt="smartphone">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/templates/verter/imgs/smartphone.png" alt="smartphone">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/templates/verter/imgs/smartphone.png" alt="smartphone">
                            </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                <div class="col-12 col-lg-10 col-xl-9 col-xxl-8">
                    <div class="mb-5">Если же отсканировали неправильный товар, то выйдет предупреждение и голосовое сообщение об ошибке</div>
                    <p>Возможности мобильного приложения:</p>
                    <ul>
                        <li>Фактическая приёмка товара с маркировкой на складе</li>
                        <li>Голосовой контроль правильности сканирования DataMatrix</li>
                        <li>Обмен с сервером для получения заданий на приёмку и отправка результатов
                            сканирования</li>
                        <li>Работа как в режиме он-лайн, так и автономно</li>
                        <li>Работа с поступлениями в которых тысячи единиц маркированного товара</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-func-videos container mb-8">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-9">
                <h3 class="fw-7">Пройдемся по основным этапам приемки товара с маркировкой</h3>
            </div>
            <div class="col-12 col-lg-10 col-xl-9 col-xxl-8">
                <h5><span class="main-color">Шаг 1.</span> Загрузка из ЛК Честного знака актуальных поступлений</h5>
                <iframe width="100%" height="320" src="https://www.youtube.com/embed/W9nZ6u15yis" title="Black Screen 10 seconds" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <h5><span class="main-color">Шаг 2.</span> Отправка на ТСД задания о необходимости приёмки товара</h5>
                <iframe width="100%" height="320" src="https://www.youtube.com/embed/W9nZ6u15yis" title="Black Screen 10 seconds" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <h5><span class="main-color">Шаг 3.</span> Приёмка товара с маркировкой с использованием ТСД</h5>
                <iframe width="100%" height="320" src="https://www.youtube.com/embed/W9nZ6u15yis" title="Black Screen 10 seconds" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <h5><span class="main-color">Шаг 4.</span> Получение результатов с ТСД о фактической приёмки</h5>
                <iframe width="100%" height="320" src="https://www.youtube.com/embed/W9nZ6u15yis" title="Black Screen 10 seconds" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <h5><span class="main-color">Шаг 5.</span> Отправка в ЛК Честного знака подтверждения о приёмке маркированного товара</h5>
                <iframe width="100%" height="320" src="https://www.youtube.com/embed/W9nZ6u15yis" title="Black Screen 10 seconds" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section class="sec-callback">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-9 col-xxl-8 offset-lg-1">
                    <div class="row row-cols-md-2 gx-4 gx-lg-5">
                        <div>
                            <h2>Оставить заявку на тести-рование</h2>
                            <p>Наш менеджер свяжется с вами, и расскажет о всех вариантах и возможностях и интеграции</p>
                        </div>
                        <div>
                            <form action="">
                                <input class="mb-3" type="text" placeholder="Как к вам обращаться">
                                <input class="mb-3" type="email" placeholder="Электронная почта">
                                <input class="mb-5" type="tel" placeholder="Телефон">
                                <button type="submit" class="btn-1 mx-auto">отправить</button>
                                <p class="fs-07 faded text-center mt-4">Я согласен на обработку персональных данных и получение информационных сообщений</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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