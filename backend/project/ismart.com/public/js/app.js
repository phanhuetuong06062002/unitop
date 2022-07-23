$(document).ready(function () {
    $('input#num_order').change(function () {
        var price = $('span#price').text();
        var num_order = $(this).val();
        var data = {
            price: price,
            num_order: num_order,
        }
        $.ajax({
            url: '?mod=order&controller=index&action=update',
            method: 'GET',
            data: data,
            dataType: 'json',
            success: function (data) {
                $('span.total').html("<strong>"+data.total+"</strong>")
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });

    });
});