<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio checkbox</title>
</head>

<body>
    <?php
    function show_gender($gender){
        $list_gender = array(
            'female' => 'Nữ',
            'male' => 'Nam',
        );
        if(array_key_exists($gender,$list_gender)){
            return $list_gender[$gender];
        }
    }
    if (!empty($_POST['btn_register'])) {
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        echo show_gender($_POST['gender']);
    }else{
        echo "Bạn chưa chọn giới tính";
    }
    ?>
    <h1>Đăng ký</h1>
    <form action="" method="POST">
        <label for="male">Nam</label>
        <input type="radio"  name="gender" value="male"  id="male" checked="checked">
        <label for="female">Nữ</label>
        <input type="radio"  name="gender" value="female"  id="female">
        <input type="submit" name="btn_register" value="register">
    </form>
</body>

</html>