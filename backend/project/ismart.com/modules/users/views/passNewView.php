<link rel="stylesheet" href="public/css/reset.css">
<link rel="stylesheet" href="public/css/update_new_pass.css">

<div id="wrapper">
    <form action="" method="POST">
        <h1>Đăng nhập</h1>
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password" placeholder="password" value="<? echo set_value('password') ?>">
        <?php echo form_error('password'); ?>
        <input type="submit" name="btn_update_new_pass" value="Lưu">
    </form>
</div>