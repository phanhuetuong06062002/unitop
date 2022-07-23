<?php 
session_start();
ob_start();
echo "Đây là trang chủ";
if(!isset($_SESSION['is_login'])){
    header('Location: login.php');
}else{
    echo"<br>";
    print_r($_SESSION);
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
    <a href="logout.php">Đăng xuất</a>
</body>
</html>
