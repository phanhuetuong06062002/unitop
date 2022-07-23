<?php
if (isset($_POST['btn_login'])) {
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = 'tên ko trống';
    } else {
        $username = $_POST['username'];
        echo $username;
    }
    if (empty($_POST['password'])) {
        $error['password'] = 'mật khẩu ko bỏ trống';
    } else {
        $password = $_POST['password'];
        echo $password;
    }
}
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
    <form action=" " method="POST">
        <label for="username">Tên</label>
        <input type="text" name="username" id="username">
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password">
        <input type="hidden" name="redirect_to" value="game.php">
        <input type="submit" name="btn_login" value="Đăng nhập">
    </form>
</body>

</html>