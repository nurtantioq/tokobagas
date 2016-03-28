(function () {
    $('#province').change(function () {
        var provinceId = $(this).val();

        var url = $(this).data('url');
        console.log(url);

        var promise = $.ajax({
            url: url,
            type: 'POST',
            data: {
                province_id: provinceId
            }
        });

        promise.done(function(response) {
            $('#city').html(response);
        });

        var asd = $('#lol').val(provinceId);
    });
})();
