<div class="menu-chat-wrapper">
    <div class="menu-chat-wrapper-head">
        <a onclick="closechat()" ; title="Закрыть виджет" class="menu-chat-wrapper-close"></a>
    </div>
    <div class="menu-chat-cont">
        <a href="#"><img src="/local/templates/verter/imgs/icons/chat-1.png"> Справка по продуктам (F.A.Q.)</a>
        <a href="javascript:void(0)" onclick="b24Form();"><img src="/local/templates/verter/imgs/icons/chat-2.png">
            Написать письмо</a>
        <a href="javascript:void(0)" onclick="call();"><img src="/local/templates/verter/imgs/icons/chat-3.png">
            Связаться по телефону</a>
       <? /*
        <a href="#"><img src="/local/templates/verter/imgs/icons/chat-4.png"> Оставить отзыв</a>
        */?>
    </div>

    <div class="menu-chat-btn-cont"><a href="javascript:void(0)" onclick="b24Chat();" class="menu-chat-btn">Написать в
            чат</a></div>
</div>
</div>

<div class="menu-chat-cal">
    <div class="menu-chat-wrapper-head">
        <div class="menu-chat-wrapper-head-title">Заказать звонок</div>
        <a onclick="closechat2()" ; title="Закрыть виджет" class="menu-chat-wrapper-close"></a>
    </div>
    <div class="menu-chat-cont">
        <div class="menu-chat-description">Заказать звонок можно только на мобильны
            номер телефона, время ожидания 10 минут
        </div>
        <div class="chat-form-content">
            <?
            $APPLICATION->IncludeComponent(
                "verter:main.feedback",
                "call",
                array(
                    "AJAX_MODE" => "Y",
                    "EVENT_MESSAGE_ID" => array(),
                    "OK_TEXT" => "Ваше сообщение отправлено.",
                    "REQUIRED_FIELDS" => array("NAME", "PHONE", "TEXT"),
                    "USE_CAPTCHA" => "N",
                    "EVENT_MESSAGE_ID" => array("32")
                )
            ); ?>
        </div>
    </div>

</div>
</div>