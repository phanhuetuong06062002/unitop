<?php
    echo "<pre>";
    $list_user = array(
        1 => array(
            'name' => 'TOẠI'
        ),
        2 => array(
            'name' => 'DANH'
        )
    );
    print_r($list_user);
   
    $list_product = array(
        1 => array(
            'stt' => 1,
            'name' => 'mì',
            'giá' => '10 đồng'
        ),
        2 => array(
            'stt' => 2,
            'name' => 'tôm',
            'giá' => '10 đồng'
        )
    );
    print_r($list_product);

    $lastname = 'trường';
    $age = 19;
    $weight = '50kg';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>tôi tên là: <b><?php echo $lastname ?> </b> tuổi: <b><?php echo $age ?></b> cân nặng: <b><?php echo $weight ?></b></p>
</body>
</html>