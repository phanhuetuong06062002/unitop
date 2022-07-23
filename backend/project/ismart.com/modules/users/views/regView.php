<link rel="stylesheet" href="public/css/reset.css">
<link rel="stylesheet" href="public/css/reg.css">

<div id="wrapper">
    <form action="" method="POST">
        <h1>Đăng ký</h1>
        <input type="text" name="fullname" id="fullname" placeholder="fullname" value="<? echo set_value('fullname') ?>">
        <? echo form_error('fullname') ?>
        <input type="text" name="username" id="username" placeholder="username" value="<? echo set_value('username') ?>">
        <? echo form_error('username') ?>
        <input type="password" name="password" id="password" placeholder="password" value="">
        <? echo form_error('password') ?>
        <input type="email" name="email" id="email" placeholder="email" value="<? echo set_value('email') ?>">
        <? echo form_error('email') ?>
        <a href="?mod=users&action=login">Đăng nhập</a>
        <input type="submit" name="btn_reg" value="Đăng ký">
        <? echo form_error('account') ?>
    </form>
</div>