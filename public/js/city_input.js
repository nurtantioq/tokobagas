(function () {
    $('#btn-city').click(function () {
        var cityId = $('#city').val();
        var url = $(this).data('url');

        var promise = $.ajax({
            url: url,
            type: 'POST',
            data: {
                city_id: cityId
            }
        });

        promise.done(function (response) {
            $('#city-input').val(response);
        });
    });
})();
