$(".filtr1").change(function(){
    var arr = $('.filtr1-wrap input:checkbox:checked').map(function(i, el){
        return $(el).val();
    }).get();
    console.log(arr);
    var myJsonString = JSON.stringify(arr);
    console.log(myJsonString);
    $.ajax({
        type: "POST",
        url: '/ajax_news.php',
        data: {groupFilterArr : myJsonString},
        beforeSend: function () {
            // Вывод текста в процессе отправки
            $('#news').html(' <img src="/pre.gif" class="center-pre">');
        },
        success: function (data) {
            // Вывод текста результата отправки
            $('#news').html(''+data+'');
        },
        error: function (jqXHR, text, error) {
            // Вывод текста ошибки отправки
            $('#news').html(error);
        }
    });
});