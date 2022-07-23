$(document).ready(function () {
    $("input.num-order").change(function () {
        var id = $(this).attr('data-id');
        var qty = $(this).val();
        var data = {
            'id': id,
            'qty': qty
        };
        console.log(data);
        $.ajax({
            url: '?mod=cart&act=update_ajax', //Trang sử lí,mặc định là trang hiện tại
            method: 'POST', //Post hoặc Get , mặc định là Get
            data: data, //Dữ liệu truyền lên serve
            dataType: 'json', //html ,text ,script, json 
            success: function (data) {
                $("#sub-total-"+id).text(data.sub_total);
                $("#total-price span").text(data.total);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
});