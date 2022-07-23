<?php


if (!empty($_POST['btn_login'])) {
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = "Username không được để trống";
    } else {
        $username = $_POST['username'];
    }
    if (empty($_POST['password'])) {
        $error['password'] = "Password không được để trống";
    } else {
        $password = $_POST['password'];
    }
    $info_user = array('user_name' => 'admin', 'password' => 'admin!@#');
    if (empty($error)) {
        if ($username == $info_user['user_name'] && $password == $info_user['password']) {
            $redirect_to = $_POST['redirect_to'];
            header('Location: ' . $redirect_to);
        }
    } else {
        if (isset($username) && isset($password)) {
            if ($username != $info_user['user_name'] && $password != $info_user['password']) {
                $error['account'] = "Tk đăng nhập không hợp lệ";
            }
        }
        print_r($error);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý dữ liệu ngầm hidden field</title>
</head>

<body>
    <form action="" method="POST">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="hidden" name="redirect_to" value="cart.php">
        <input type="submit" name="btn_login" value="Đăng nhập">
    </form>
</body>

</html>