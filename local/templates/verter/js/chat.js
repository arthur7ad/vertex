var chatw = document.getElementsByClassName("menu-chat-wrapper")[0];
var chatcall = document.getElementsByClassName("menu-chat-cal")[0];


function chatbut() {
    chatw.classList.remove('d-block');
    chatcall.classList.remove('d-block');
    if (document.querySelector(".bx-livechat-control-btn-close")) {
        document.querySelector('.bx-livechat-control-btn-close').click();
    }
    if (document.querySelector(".b24-window-panel")) {
        document.querySelector('.b24-window-panel button').click();
    }

    if (chatw.classList.contains('d-block')) {
        chatw.classList.remove('d-block');
    } else {
        chatw.classList.add('d-block');
    }
}

function call() {
    chatw.classList.remove('d-block');
    chatcall.classList.remove('d-block');
    if (document.querySelector(".bx-livechat-control-btn-close")) {
        document.querySelector('.bx-livechat-control-btn-close').click();
    }
    if (document.querySelector(".b24-window-panel")) {
        document.querySelector('.b24-window-panel button').click();
    }


    if (chatcall.classList.contains('d-block')) {
        chatcall.classList.remove('d-block');
    } else {
        chatcall.classList.add('d-block');
    }
}

function closechat() {
    chatcall.classList.remove('d-block');
    if (document.querySelector(".bx-livechat-control-btn-close")) {
        document.querySelector('.bx-livechat-control-btn-close').click();
    }
    if (document.querySelector(".b24-window-panel")) {
        document.querySelector('.b24-window-panel button').click();
    }


    chatw.classList.remove('d-block');
}

function closechat2() {
    chatw.classList.remove('d-block');
    if (document.querySelector(".bx-livechat-control-btn-close")) {
        document.querySelector('.bx-livechat-control-btn-close').click();
    }
    if (document.querySelector(".b24-window-panel")) {
        document.querySelector('.b24-window-panel button').click();
    }


    chatcall.classList.remove('d-block');
}


function b24Form() {
    chatw.classList.remove('d-block');
    chatcall.classList.remove('d-block');
    if (document.querySelector(".bx-livechat-control-btn-close")) {
        document.querySelector('.bx-livechat-control-btn-close').click();
    }



    document.getElementsByClassName("b24-widget-button-crmform")[0].click();
}

function b24Chat() {
    chatw.classList.remove('d-block');
    chatcall.classList.remove('d-block');
    if (document.querySelector(".b24-window-panel")) {
        document.querySelector('.b24-window-panel button').click();
    }

    chatw.classList.remove("d-block");
    document.getElementsByClassName("b24-widget-button-openline_livechat")[0].click();
}