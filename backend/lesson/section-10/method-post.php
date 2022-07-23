<?php
if(!empty($_POST)){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "<strong>Tài khoản là:</strong>"."<p class = \"red\">".$username."</p><br>";
    echo "<strong>Mật khẩu là:</strong>"."<p class = \"red\">".$password."</p><br>";
}
?>
<style>
    .red{
        color:red;
        display:inline;
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truyền dữ liệu form lên sever</title>
</head>

<body>
    <form action="" method="POST">
        <label for="username">Tên đăng nhập</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="password">mật khẩu</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" name="btn_login" value="Đăng nhập">
    </form>
</body>

</html>