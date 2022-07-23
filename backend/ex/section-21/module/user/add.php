<?php
get_header();
?>
<?

if (isset($_POST['btn_submit'])) {
    $error = array();
    $alert = array();
    //Kiểm tra fullname
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "fullname không được để trống";
    } else {
        $fullname = $_POST['fullname'];
    }
    //Kiểm tra giới tính
    if (empty($_POST['gender'])) {
        $error['gender'] = "giới tính không được để trống";
    } else {
        $gender = $_POST['gender'];
    }
    //Kiểm tra username
    $pattern = "/^[A-Za-z0-9_\. ]{6,32}$/";
    if (empty($_POST['username'])) {
        $error['username'] = "username không được để trống";
    } else {
        if (!preg_match($pattern, $_POST['username'])) {
            $error['username'] = "username không đúng định dạng";
        } else {
            $username = $_POST['username'];
        }
    }
    //Kiểm tra password
    $pattern = "/^([A-Z]){1}([A-Za-z0-9!@#$%^&*().+]){5,31}$/";
    if (empty($_POST['password'])) {
        $error['password'] = "password không được để trống";
    } else {
        if (!preg_match($pattern, $_POST['password'])) {
            $error['password'] = "password không đúng định dạng";
        } else {
            $password = md5($_POST['password']);
        }
    }
    //Kiểm tra email
    $pattern = "/^([A-Za-z0-9_.]{2,32})@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
    if (empty($_POST['email'])) {
        $error['email'] = "email không được để trống";
    } else {
        if (!preg_match($pattern, $_POST['email'])) {
            $error['email'] = "email không đúng định dạng";
        } else {
            $email = $_POST['email'];
        }
    }
    if (empty($error)) {
        $data = array(
            "username" => $username,
            "fullname" => $fullname,
            "password" => $password,
            "email" => $email,
            "gender" => $gender,
        );
        $insert_user = db_insert("tbl_users", $data);
        if(isset($insert_user)){
            $alert['add_success'] = "Bạn đã thêm thành công";
        }
    }
}
?>
<style>
    #form-add-member {
        width: 960px;
        margin: 100px auto;
        text-align: center;
        background-color: yellow;
        padding: 20px 0px;
    }

    input,
    select {
        border-radius: 10px;
        display: inline-block;
        border: none;
        padding: 8px 54px;
        width: 350px;
    }

    label {
        display: block;
    }

    label {
        margin: 10px 0px;
        font-size: 20px;

    }

    input::placeholder {
        text-align: center;
        font-style: italic;
        font-size: 14px;
    }

    input:last-of-type {
        margin-top: 18px;
        display: block;
        background-color: #3498db;
        margin-left: 304px;
    }

    p.error {
        font-size: 14px;
        margin-top: 5px;
        font-style: italic;
        color: red;
    }
    p.alert-success{
        margin-top: 10px;
        color: green;
    }
</style>
<div id="wp-content">
    <h1>Thêm thành viên</h1>
    <form action="" method="POST" id="form-add-member">
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" id="fullname" value="<? if (!empty($fullname)) echo $fullname ?>" placeholder=" fullname">
        <? if (!empty($error['fullname'])) echo "<p class='error'>{$error['fullname']}</p>" ?>
        <label for="username">Tài Khoản</label>
        <input type="text" name="username" id="username" value="<? if (!empty($username)) echo $username ?>" placeholder="username">
        <? if (!empty($error['username'])) echo "<p class='error'>{$error['username']}</p>" ?>
        <label for="password">Mật Khẩu</label>
        <input type="password" name="password" id="password" placeholder="password">
        <? if (!empty($error['password'])) echo "<p class='error'>{$error['password']}</p>" ?>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<? if (!empty($email)) echo $email ?>" placeholder="email">
        <? if (!empty($error['email'])) echo "<p class='error'>{$error['email']}</p>" ?>
        <label for="gender">Chọn giới tính</label>
        <select name="gender" id="gender">
            <option value="">------</option>
            <option value="female" <? if (isset($gender) && $gender == "female") echo "selected = 'selected'" ?>>Nữ</option>
            <option value="male" <? if (isset($gender) && $gender == "male") echo "selected = 'selected'" ?>>Nam</option>
        </select>
        <? if (!empty($error['gender'])) echo "<p class='error'>{$error['gender']}</p>" ?>
        <input type="submit" name="btn_submit" value="Thêm thành viên">
        <? if(!empty($alert['add_success'])) echo "<p class='alert-success'>{$alert['add_success']}</p>" ?>
    </form>
</div>
