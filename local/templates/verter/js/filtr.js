function update() {
    var arr = $('.filtr1-wrap input:checkbox:checked').map(function (i, el) {
        return $(el).val();
    }).get();
    var myJsonString = JSON.stringify(arr);
    $.ajax({
        type: "POST",
        url: '/local/ajax/ajax_news.php',
        data: {groupFilterArr: myJsonString, ajax: 1},
        beforeSend: function () {
            // Вывод текста в процессе отправки
            $('#news').html(' <img src="/pre.gif" class="center-pre">');
        },
        success: function (data) {
            // Вывод текста результата отправки
            $('#news').html('' + data + '');
        },
        error: function (jqXHR, text, error) {
            // Вывод текста ошибки отправки
            $('#news').html(error);
        }
    });
}

$('#all-check').click(function () {
    $(".filtr1-wrap").find(".btn-padding").find("input[type=checkbox]").prop('checked', true);
    update();
});

$(".filtr1").change(function () {
    update();
});

function updatecases() {
    var arr2 = $('.filtr2-wrap input:checkbox:checked').map(function (i, el) {
        return $(el).val();
    }).get();
    var myJsonString2 = JSON.stringify(arr2);
    $.ajax({
        type: "POST",
        url: '/local/ajax/ajax_cases.php',
        data: {groupFilterArr: myJsonString2, ajax: 1},
        beforeSend: function () {
            // Вывод текста в процессе отправки
            $('#cases-list').html(' <img src="/pre.gif" class="center-pre">');
        },
        success: function (data) {
            // Вывод текста результата отправки
            $('#cases-list').html('' + data + '');
        },
        error: function (jqXHR, text, error) {
            // Вывод текста ошибки отправки
            $('#cases-list').html(error);
        }
    });
}

$('.all-check-cases').click(function () {
    $(".filtr2-wrap").find(".btn-padding").find("input[type=checkbox]").prop('checked', true);
    $(".filtr2-wrap").find(".alc").find("input[type=checkbox]").prop('checked', true);

    updatecases();
});


$(".filtr-cases").change(function () {
    updatecases();
});
$('.allcases').click(function () {
    if ($(".allcases-in").is(":checked")) {

        $(".filtr2-wrap").find(".btn-padding").find("input[type=checkbox]").prop('checked', false);
    } else {

        $(".filtr2-wrap").find(".btn-padding").find("input[type=checkbox]").prop('checked', true);
    }

    updatecases();
});




function updatearticle() {
    var arr3 = $('.filtr3-wrap input:checkbox:checked').map(function (i, el) {
        return $(el).val();
    }).get();
    var myJsonString3 = JSON.stringify(arr3);
    $.ajax({
        type: "POST",
        url: '/local/ajax/ajax_article.php',
        data: {groupFilterArr: myJsonString3, ajax: 1},
        beforeSend: function () {
            // Вывод текста в процессе отправки
            $('#article-list').html(' <img src="/pre.gif" class="center-pre">');
        },
        success: function (data) {
            // Вывод текста результата отправки
            $('#article-list').html('' + data + '');
        },
        error: function (jqXHR, text, error) {
            // Вывод текста ошибки отправки
            $('#article-list').html(error);
        }
    });
}

$('.all-check-article').click(function () {
    $(".filtr3-wrap").find(".btn-padding").find("input[type=checkbox]").prop('checked', true);
    $(".filtr3-wrap").find(".alc").find("input[type=checkbox]").prop('checked', true);

    updatearticle();
});


$(".filtr-article").change(function () {
    updatearticle();
});
$('.allarticle').click(function () {
    if ($(".allarticle-in").is(":checked")) {

        $(".filtr3-wrap").find(".btn-padding").find("input[type=checkbox]").prop('checked', false);
    } else {

        $(".filtr3-wrap").find(".btn-padding").find("input[type=checkbox]").prop('checked', true);
    }

    updatearticle();
});


function updatewebinar() {
    var arr3 = $('.filtr4-wrap input:checkbox:checked').map(function (i, el) {
        return $(el).val();
    }).get();
    var myJsonString3 = JSON.stringify(arr3);
    $.ajax({
        type: "POST",
        url: '/local/ajax/ajax_webinar.php',
        data: {groupFilterArr: myJsonString3, ajax: 1},
        beforeSend: function () {
            // Вывод текста в процессе отправки
            $('#webinar-list').html(' <img src="/pre.gif" class="center-pre">');
        },
        success: function (data) {
            // Вывод текста результата отправки
            $('#webinar-list').html('' + data + '');
        },
        error: function (jqXHR, text, error) {
            // Вывод текста ошибки отправки
            $('#webinar-list').html(error);
        }
    });
}

$('.all-check-webinar').click(function () {
    $(".filtr4-wrap").find(".btn-padding").find("input[type=checkbox]").prop('checked', true);
    $(".filtr4-wrap").find(".alc").find("input[type=checkbox]").prop('checked', true);

    updatewebinar();
});


$(".filtr-webinar").change(function () {
    updatewebinar();
});
$('.allwebinar').click(function () {
    if ($(".allwebinar-in").is(":checked")) {

        $(".filtr4-wrap").find(".btn-padding").find("input[type=checkbox]").prop('checked', false);
    } else {

        $(".filtr4-wrap").find(".btn-padding").find("input[type=checkbox]").prop('checked', true);
    }

    updatewebinar();
});
