<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hình thức thanh toán</title>
</head>
<body>
    <?php 
        if(isset($_POST['btn_register'])){
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
        }
    ?>
    <form action="" method="POST">
        <h1>Hình thức thanh toán</h1>
        <select name="purchase" id="">
        <option value="">---Chọn---</option>
        <option value="at_this">Trực tiếp</option>
        <option value="online">Online</option>
        </select><br><br>
        <input type="submit" name="btn_register" value="Đặt hàng">
    </form>
</body>
</html>