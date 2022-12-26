$(document).on('click', '.link_more', function(){

    var targetContainer = $('.loadmore_wrap'),          //  Контейнер, в котором хранятся элементы
        url =  $('.link_more').attr('data-url');    //  URL, из которого будем брать элементы


    if (url !== undefined) {
        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'html',
            success: function(data){
                console.log(data);
                //  Удаляем старую навигацию
                $('.btn_more').remove();

                var elements = $(data).find('.div-article'),  //  Ищем элементы
                    pagination = $(data).find('.btn_more');//  Ищем навигацию

                targetContainer.append(elements);   //  Добавляем посты в конец контейнера
                targetContainer.append(pagination); //  добавляем навигацию следом

            }
        })
    }
});

$(document).on('click', '.link_more2', function(){

    var targetContainer = $('.loadmore_wrap2'),          //  Контейнер, в котором хранятся элементы
        url =  $('.link_more2').attr('data-url');    //  URL, из которого будем брать элементы


    if (url !== undefined) {
        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'html',
            success: function(data){
                console.log(data);
                //  Удаляем старую навигацию
                $('.btn_more2').remove();

                var elements = $(data).find('.div-webinar'),  //  Ищем элементы
                    pagination = $(data).find('.btn_more2');//  Ищем навигацию

                targetContainer.append(elements);   //  Добавляем посты в конец контейнера
                targetContainer.append(pagination); //  добавляем навигацию следом

            }
        })
    }
});

$(document).on('click', '.link_more3', function(){

    var targetContainer = $('.loadmore_wrap3'),          //  Контейнер, в котором хранятся элементы
        url =  $('.link_more3').attr('data-url');    //  URL, из которого будем брать элементы


    if (url !== undefined) {
        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'html',
            success: function(data){
                console.log(data);
                //  Удаляем старую навигацию
                $('.btn_more3').remove();

                var elements = $(data).find('.div-new'),  //  Ищем элементы
                    pagination = $(data).find('.btn_more3');//  Ищем навигацию

                targetContainer.append(elements);   //  Добавляем посты в конец контейнера
                targetContainer.append(pagination); //  добавляем навигацию следом

            }
        })
    }
});

$(document).on('click', '.link_more4', function(){

    var targetContainer = $('.loadmore_wrap4'),          //  Контейнер, в котором хранятся элементы
        url =  $('.link_more4').attr('data-url');    //  URL, из которого будем брать элементы


    if (url !== undefined) {
        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'html',
            success: function(data){
                console.log(data);
                //  Удаляем старую навигацию
                $('.btn_more4').remove();

                var elements = $(data).find('.div-scope'),  //  Ищем элементы
                    pagination = $(data).find('.btn_more4');//  Ищем навигацию

                targetContainer.append(elements);   //  Добавляем посты в конец контейнера
                targetContainer.append(pagination); //  добавляем навигацию следом

            }
        })
    }
});

$(document).on('click', '.link_more5', function(){

    var targetContainer = $('.loadmore_wrap5'),          //  Контейнер, в котором хранятся элементы
        url =  $('.link_more5').attr('data-url');    //  URL, из которого будем брать элементы


    if (url !== undefined) {
        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'html',
            success: function(data){
                console.log(data);
                //  Удаляем старую навигацию
                $('.btn_more5').remove();

                var elements = $(data).find('.div-cases'),  //  Ищем элементы
                    pagination = $(data).find('.btn_more5');//  Ищем навигацию

                targetContainer.append(elements);   //  Добавляем посты в конец контейнера
                targetContainer.append(pagination); //  добавляем навигацию следом

            }
        })
    }
});

