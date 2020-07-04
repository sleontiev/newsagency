// Обработка событий

// $(function(){
//     function changeFontColor()
//     {
//         $('#column-center').toggleClass('newStyle');
//     }
//     $('#changeColor').on('keyup', function(event){
//         if(event.which > 48 && event.which < 57)
//             return false;
//         changeFontColor();
//     })
// });

// Обработка событий

// Работа с DOM, изменение, добавление и удаление элементов

$(function(){
    $("#changeButton")
        .css({
            'margin-left': '20px',
            'padding': '10px',
            'border-style': 'none',
            'border-radius': '5%'
        })
        .click(function(){
            $('.news-comments-count').each(function(){
                if($(this).text() > 20)
                    $(this).css('color','red');
            });
        });
});

// Работа с DOM, изменение, добавление и удаление элементов

https://exchangeratesapi.io/