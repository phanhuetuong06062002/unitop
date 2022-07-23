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
        <input type="submit" name="btn_login" value="Đăng Nhập">
        <? echo form_error('account') ?>
    </form>
</div>