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

$('.all-check-cases').click(function (){
      $(".filtr2-wrap").find(".btn-padding").find("input[type=checkbox]").prop('checked', true);
    $(".filtr2-wrap").find(".alc").find("input[type=checkbox]").prop('checked', true);

    updatecases();
});


$(".filtr-cases").change(function () {
    updatecases();
});
$('.allcases').click(function (){
    if($(".allcases-in").is(":checked")) {

        $(".filtr2-wrap").find(".btn-padding").find("input[type=checkbox]").prop('checked', false);
    } else
    {

        $(".filtr2-wrap").find(".btn-padding").find("input[type=checkbox]").prop('checked', true);
    }

    updatecases();
});