$(document).ready(function () {
    $('input#num_order').change(function () {
        var price = $('span#price').text();
        var num_order = $('input#num_order').val();
        var data = {
            price: price,
            num_order: num_order,
        };
        $.ajax({
            url: 'process.php',
            method: 'POST',
            data : data,
            dataType: 'json',
            success:function(data){
                $('span#total').html("<strong>"+data.total+"</strong>");
            },
            error: function(xhr,ajaxOption,thrownError){
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
});