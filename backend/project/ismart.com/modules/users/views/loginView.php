<link rel="stylesheet" href="public/css/reset.css">
<link rel="stylesheet" href="public/css/login.css">

<div id="wrapper">
    <form action="" method="POST">
        <h1>Đăng nhập</h1>
        <label for="username">Tên tài khoản</label>
        <input type="text" name="username" id="username" placeholder="username" value="<? echo set_value('username') ?>">
        <? echo form_error('username');?>
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password" placeholder="password" value="<? echo set_value('password') ?>">
        <? echo form_error('password'); ?>
        <input type="checkbox" name="remember_me" id="remember_me">
        <label for="remember_me">Ghi nhớ đăng nhập</label>
        <input type="submit" name="btn_login" value="Đăng Nhập">
        <a class="btn_reg" href="?mod=users&action=reg">Đăng ký</a>
        <? echo form_error('account') ?>
    </form>
    <a href="?mod=users&action=resetPass">Quên mật khẩu</a>
</div>