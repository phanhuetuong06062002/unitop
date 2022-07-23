<?php
get_header();
?>
<div id="main-content-wp" class="info-account-page">
    <div class="section" id="title-page">
        <div class="clearfix">
            <a href="?page=add_cat" title="" id="add-new" class="fl-left">Thêm mới</a>
            <h3 id="index" class="fl-left">Cập nhật tài khoản</h3>
        </div>
    </div>
    <div class="wrap clearfix">
        <? echo get_sidebar('users'); ?>
        <div id="content" class="fl-right">
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form action="" method="POST">
                        <label for="display-name">Tên hiển thị</label>
                        <input type="text" name="fullname" value="<? if (!empty($info_user['fullname']))  echo $info_user['fullname'] ?> " id=" display-name">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" name="username" id="username" placeholder="admin" readonly="readonly">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="<? if (!empty($info_user['email']))  echo $info_user['email'] ?> ">
                        <label for=" tel">Số điện thoại</label>
                        <input type="tel" name="num_phone" id="tel" value="<? if (!empty($info_user['num_phone']))  echo $info_user['num_phone'] ?> ">
                        <label for="address">Địa chỉ</label>
                        <textarea name="address" id="address"><? if (!empty($info_user['address']))  echo $info_user['address'] ?></textarea>
                        <button type="submit" name="btn-submit" id="btn-submit">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>