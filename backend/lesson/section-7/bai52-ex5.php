//bài 1

<?php
for ($i = 3; $i <= 150; $i += 2) {
    $arr_odd[] = $i;
}
echo "<pre>";
print_r($arr_odd);
?>

//bài 2

<?php
$list_post = array(
    "post_1" => array(
        'id' => 1,
        'post_title' => 'đây là tiêu đề',
        'post_content' => 'đây là một đoạn content rất rất chi là dài nạ, nói về nội dung bài viết nà bạn ạ',
        'post_img' => 'https://1.bp.blogspot.com/-n_bFzL9lPUU/Xp23H9Sk8yI/AAAAAAAAhyA/JYfvZhwguxc8vT_YS3w14Xi3YWf3hxqIQCLcBGAsYHQ/s1600/Hinh-Anh-Dep-Tren-Mang%2B%25282%2529.jpg'
    ),
    "post_2" => array(
        'id' => 2,
        'post_title' => 'bóng đá có gì hay ko',
        'post_content' => 'nếu bạn ko biết đá bóng thì bạn bạn cần phải đi tập đá bóng di nhá, đá bóng tốt cho sức khỏe',
        'post_img' => './img-ex5/2.webp'
    )
);
echo "<pre>";
print_r($list_post);
?>

//bài 3

<?php
$list_product = array(
    "product_1" => array(
        'id' => 1,
        'product_title' => 'chuột mát tính 350',
        'product_content' => 'đây là một mẫu chuột mới nhất với giá bán siêu rẻ và hàng chạy số một ',
        'price' => '200.000đ',
        'product_img' => ''
    ),
    "product_2" => array(
        'id' => 2,
        'product_title' => 'màn hình laptop giá rẻ',
        'product_content' => 'đây là một mẫu màn hình mới nhất với giá bán siêu rẻ và hàng chạy số một ',
        'price' => '500.000đ',
        'product_img' => ''
    )
);
echo "<pre>";
print_r($list_product);
?>

//bài 4
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
    <?php foreach($list_post as $item){ ?>
        <li>
            <h3> <?php echo $item['post_title'] ?> </h3>
            <p>  <?php echo $item['post_content'] ?> </p>
            <img src="  <?php echo $item['post_img'] ?>" alt="">
        </li>
    <?php } ?>    
    </ul>
</body>

</html>