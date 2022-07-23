<link rel="stylesheet" href="public/css/reset.css">
<link rel="stylesheet" href="public/css/resetPass.css">

<div id="wrapper">
    <form action="" method="POST">
        <h1>Lấy lại mật khẩu</h1>        
        <label for="email">Nhập email:</label>
        <input type="email" name="email" id="email" placeholder="email">
        <?  echo form_error('email') ?>
        <input type="submit" name="btn_reset_value" value="Đồng ý">
        <? echo form_error('account') ?>
    </form>
</div>