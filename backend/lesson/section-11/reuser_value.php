<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reuse value</title>
</head>

<body>
    <?php
    if (isset($_POST['register'])) {
        $error = array();
        if (!empty($_POST['full_name'])) {
            $full_name = $_POST['full_name'];
        } else {
            $error['full_name'] = "Full name không được để trống";
        }
        if (!empty($_POST['gender'])) {
            $gender = $_POST['gender'];
        } else {
            $error['gender'] = "Giới tính không được để trống";
        }
    }
    ?>
    <style>
        p.error{
            color:red;
        }
    </style>
    <form action="" method="post">
        <label for="">Họ tên</label><br>
        <input type="text" name="full_name" id="" value="<?php if (!empty($full_name)) echo $full_name ?>"><br>
        <?php if (!empty($error['full_name'])) echo "<p class='error'>{$error['full_name']}</p>"  ?>
        <label for="gender">Giới tính</label><br>
        <select name="gender" id="gender">
            <option value="">---Chọn----</option>
            <option <?php if (!empty($gender) && $gender == 'female') echo "selected = \"selected\"" ?> value="female">Nữ</option>
            <option <?php if (!empty($gender) && $gender == 'male') echo "selected = \"selected\"" ?> value="male">Nam</option>
        </select><br><br>
        <?php if (!empty($error['gender'])) echo "<p class='error'>{$error['gender']}</p>"  ?>
        <?php if (!empty($_POST['gender'])) echo $_POST['gender']; ?>
        <input type="submit" name="register" value="Đăng ký">
    </form>
</body>

</html>