$('form').submit(function() {
    var form = $(this);
    var mail = $('.emaill');
    var name = $('.name');
    var city = $('#city');
    var district = $('#district');
    var region = $('#region');
    var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;

    form.find('.error').remove();

    if (name.val() === '') {
        name.before('<div class="error">Введите имя</div>');
    } else if (mail.val() === '' ) {
        mail.before('<div class="error">Введите емайл</div>');
    } else if(!pattern.test(mail.val())) {
        mail.before('<div class="error">Введите введите корректный емайл</div>');
    }else  if (city.val() === null) {
         region.before('<div class="error">Выберите Область затем Город</div>');
    } else {

    $.ajax({
        url: 'register',
        type: 'POST',
        data: ({email: mail.val(),
            name: name.val(),
            city: city.val(),
            district: district.val()
        }),
        dataType: "json",
        success: function (html) {
           if (html === true) {
               alert('Вы зарегестрировались')
           } else {
               $('.js-overlay-user-info').fadeIn()
               $("<p class='cont'>" + html['name'] + "</p>").prependTo(".user-info")
               $("<p class='cont'>" + html['email'] + "</p>").prependTo(".user-info")
               $("<p class='cont'>" + html['ter_address'] + "</p>").prependTo(".user-info")
           }
            $('.js-close-user-info').click(function () {
                $('.js-overlay-user-info').fadeOut();
            });
        }
    });
    }
    return false;
});
