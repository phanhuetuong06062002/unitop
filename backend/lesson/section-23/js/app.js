$(document).ready(function () {
    $("input[type=\"number\"]").change(function () {
        var price = $('#price').text();
        var num_order = $(this).val();
        var data = {
            price: price,
            num_order: num_order
        };
        $.ajax({
            url: 'process.php', //Trang sử lí,mặc định là trang hiện tại
            method: 'POST', //Post hoặc Get , mặc định là Get
            data: data, //Dữ liệu truyền lên serve
            dataType: 'json', //html ,text ,script, json 
            success: function (data) {
                $("span#total").html("<strong>"+data.total+"</strong>");
            },
            error: function(xhr,ajaxOptions,thrownError){
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
});