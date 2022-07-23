<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>
    body {
        background: url('./bg.jpeg');
        background-size: cover;
        background-position-y: -60px;
    }

    input {
        width: 75%;
    }

    #wrapper {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-content: center;
    }

    #form-login {
        max-width: 400px;
        background: black;
        flex-grow: 1;
        padding: 30px 30px 40px;
        box-shadow: 0px 0px 17px 2px rgba(250, 250, 250, 0.8);
        height: 500px;
        margin-top: 100px;
    }

    h1.form-heading {
        font-size: 25px;
        color: #fff;
        margin-bottom: 30px;
        text-align: center;
        text-transform: capitalize;
    }

    .form-group {
        border-bottom: 1px solid #fff;
        margin-top: 15px;
        margin-bottom: 20px;
    }

    .form-input {
        background: transparent;
        border: 0;
        outline: 0;
        font-size: 20px;
        color: #dcdc1c;
    }

    .form-input::placeholder {
        color: #fff;
        opacity: 0.7;
    }

    .form-submit {
        background: transparent;
        border: 1px solid #fff;
        color: #fff;
        width: 100%;
        font-size: 20px;
        text-transform: uppercase;
        margin-top: 20px;

    }

    .form-submit:hover {
        cursor: pointer;
        border-color: blue;
        transition: 0.25s ease-in-out;
    }

    i[class*='fa'] {
        color: violet;
        margin-right: 5px;
    }

    .form-group:nth-of-type(2) {
        position: relative;
    }

    i[class*='eye']:hover {
        cursor: pointer;
    }

    div.eye {
        position: absolute;
        right: 0px;
        top: 7px;
    }

    p.error {
        color: red;
        font-size: 15px;
    }

    label {
        color: #fff;
    }

    div.form-group:last-of-type {
        border: none;
    }

    div.form-group:last-of-type input {
        width: auto;
        margin-right: 5px;
    }
</style>
<?php
require 'validation_form.php';
require 'lib/func.php';
session_start();
ob_start();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

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
        $user = array('username' => 'huetruong', 'password' => 'Phanhuetruong');
        if ($username == $user['username'] && $password == $user['password']) {
            if (isset($_POST['remember_me'])) {
                setcookie('is_login', true, time() + 3600 * 3);
                setcookie('username', $username, time() + 3600 * 3);
            }
            if (isset($_COOKIE['is_login'])) {
                $_SESSION['is_login'] = $_COOKIE['is_login'];
                $_SESSION['user_login'] = $_COOKIE['username'];
            }else{
                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $username;
            }
            redirect_to('index.php');
        } else {
            $error['account'] = "Tài khoản đăng nhập không chính xác";
        }
    }
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
                <div class="form-group">
                    <input type="checkbox" name="remember_me" value="1" id="remember_me"><label for="remember_me">Ghi nhớ đăng nhập</label>
                </div>
                <input class="form-submit" type="submit" name="btn_login" value="Đăng nhập" class="form-submit">
                <?php echo form_error('account'); ?>
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