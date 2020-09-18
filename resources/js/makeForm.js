$(document).ready(function () {

    $('.chosen-select').chosen()

    var region = $('#region');
    var city = $('#city');
    var district = $('#district');

    $('#city_chosen').hide()
    $('#district_chosen').hide()
    city.hide();
    district.hide();

    $('#region').change(function (event) {
        event.preventDefault();
        $.ajax({
            url: '/getcities',
            type: 'POST',
            data: ({reg_id: region.val()}),
            dataType: 'json',
            success: function (html) {
                $(html).each(function () {
                    $("<option>" + this['ter_name'] + "</option>").prependTo(city).val(this['ter_id'])
                });
                city.show()
                city.chosen('destroy').chosen()
                $('#region').change(function () {
                    $('#city option').remove();
                })
            }
        });
    });

    $('#city').change(function (event) {
        event.preventDefault();
        $.ajax({
            url: '/getdistricts',
            type: 'POST',
            data: ({id: city.val()}),
            dataType: 'json',
            success: function (html) {
                $(html).each(function () {
                    $("<option>" + this['ter_name'] + "</option>").prependTo(district).val(this['ter_id'])
                });
                district.show()
                district.chosen('destroy').chosen()
                $('#city').change(function () {
                    $('#district option').remove();
                })
            }
        });
    });
});

