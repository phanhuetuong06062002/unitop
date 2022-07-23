<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="public/css/login.css">
</head>
<style>

</style>
<?php

if (isset($_POST['btn_login'])) {
    $error = array();
    if (!empty($_POST['username'])) {
        if (!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32)) {
            $error['username'] = "Username có các kí từ từ 6 đến 32";
        } else {
            if (is_username($_POST['username'])) {
                $username = $_POST['username'];
            } else {
                $error['username'] = "Username chứa các kí tự từ A-Z 0-9 và các kí tự đặc biệt";
            }
        }
    } else {
        $error['username'] = "Username không được bỏ trống";
    }
    if (!empty($_POST['password'])) {
        $password = $_POST['password'];
        $pattern = '/^([A-Z]){1}([a-z0-9!@#$%^&*()_+.]){5,31}$/';
        if (is_password($_POST['password'])) {
            $password = $_POST['password'];
        } else {
            $error['password'] = "Password phải có kí tự đầu in hoa và có số kí tự từ 6 đến 32";
        }
    } else {
        $error['password'] = "Password không được bỏ trống";
    }

    if (empty($error)) {
        if (check_login($username, $password)) {
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $username;
            if(isset($_POST['remember_me'])){
                setcookie('is_login',true,time()+3600);
                setcookie('user_login',$username, time() + 3600);
            }
            if(!empty($_COOKIE['is_login'])){
                $_SESSION['is_login'] = $_COOKIE['is_login'];
                $_SESSION['user_login'] = $_COOKIE['user_login'];
            }
            redirect_to("?page=home");
        } else {
            $error['account'] = "Tài khoản đăng nhập không tồn tại";
        }
    }

    // }else{
    //     echo "<pre>";
    //     print_r($error);
    //     echo "</pre>";
    // }
}
?>

<body>
    <div id="wrapper">
        <div id="form-login">
            <form action="" method="POST">
                <h1 class="form-heading">Form đăng nhập</h1>
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <input class="form-input" type="text" name="username" placeholder="Tên đăng nhập">
                </div>
                <?php echo form_error('username') ?>
                <div class="form-group">
                    <i class="fas fa-unlock"></i>
                    <input class="form-input" placeholder="Mật khẩu" type="password" name="password" id="">
                    <div class="eye">
                        <i class="fas fa-eye"></i>
                    </div>
                    <?php echo form_error('password') ?>
                </div>
                <a href="">Quên mật khẩu</a>
                <div class="form-group">
                    <input type="checkbox" name="remember_me" value="1" id="remember_me"><label for="remember_me">Ghi nhớ đăng nhập</label>
                </div>
                <input class="form-submit" type="submit" name="btn_login" value="Đăng nhập" class="form-submit">
                <?php echo form_error('account') ?>
            </form>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js">

</script>
<script>
    $(function() {
        $('.eye').click(function() {
            $(this).children('i').toggleClass('fa-eye fa-eye-slash');
            $(this).toggleClass('open');
            if ($(this).hasClass('open')) {
                $(this).prev().attr('type', 'text');
            } else {
                $(this).prev().attr('type', 'password');
            }
        });
    });
</script>

</html>