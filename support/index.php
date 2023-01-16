<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Поддержка");
?>

    <section class="sec-support container mb-8">
        <ul class="list-unstyled justify-content-center row row-cols-sm-2 row-cols-lg-3 g-3 gx-md-4 gx-xxl-5 gy-md-4">
            <li>
                <div class="box">
                    <img src="/local/templates/verter/imgs/img-16.png" alt="чат">
                    <div>
                        <h3>Написать в&nbsp;чат</h3>
                        <p>На связи с вами 24/7</p>
                    </div>
                    <div>
                        <a href="javascript:void(0)" onclick="b24Chat();" class="more">написать</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <img src="/local/templates/verter/imgs/img-17.png" alt="техподдержки">
                    <div>
                        <h3>Служба техподдержки</h3>
                    </div>
                    <div>
                        <a href="javascript:void(0)" onclick="b24Form();" class="more">отправить</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <img src="/local/templates/verter/imgs/img-18.png" alt="Справка">
                    <div>
                        <h3>Справка <br/>по продуктам</h3>
                        <p>F.A.Q.</p>
                    </div>
                    <div>
                        <a href="/" class="more">подробнее</a>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <section class="container mb-8">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-11 col-xl-10">
                <h2>Инструменты <br/>диагностики и помощи</h2>
                <ul class="list-unstyled sup-list">
                    <li>
                        <img src="/local/templates/verter/imgs/icons/icon-3.png" alt="Диагностика продуктов Verter">
                        <p>Диагностика продуктов Verter</p>
                    </li>
                    <li>
                        <img src="/local/templates/verter/imgs/icons/icon-4.png" alt="Удаленное подключение">
                        <p>Удаленное подключение</p>
                    </li>
                    <li>
                        <img src="/local/templates/verter/imgs/icons/icon-5.png" alt="Статус обращения">
                        <p>Статус обращения</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

<?
$APPLICATION->IncludeComponent(
    "verter:main.feedback",
    "form-functions",
    array(
        "AJAX_MODE" => "Y",
        "EVENT_MESSAGE_ID" => array(),
        "OK_TEXT" => "Ваше сообщение отправлено.",
        "REQUIRED_FIELDS" => array("NAME", "EMAIL", "PHONE"),
        "USE_CAPTCHA" => "N"
    )
); ?>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>