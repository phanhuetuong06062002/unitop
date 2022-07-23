<?php 
require 'db/connect.php';
if(isset($_POST['btn_submit'])){
    if(!empty($_POST['username'])){
        $username = $_POST['username'];
        }
    if (!empty($_POST['password'])){
        $password = $_POST['password'];
        }
    $sql = "SELECT * FROM `tbl_users` WHERE `username`='".mysqli_real_escape_string($conn, $username)."' AND `password` ='". mysqli_real_escape_string($conn, $password)."'";
    $result = mysqli_query($conn,$sql);
    echo $sql."<br>";
    if(mysqli_num_rows($result) > 0){
        echo "Đăng nhập thành công";
    } 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL INJECTION</title>
</head>

<body>
    <h1>Đăng nhập</h1>
    <form action="" method ="POST">
        <label for="fullname">Tên tài khoản</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="password">Mật khẩu</label><br>
        <input type="password" name="password" id="password"><br><br>
        <input type="submit" name="btn_submit" value="Đăng nhập">
    </form>
</body>

</html>