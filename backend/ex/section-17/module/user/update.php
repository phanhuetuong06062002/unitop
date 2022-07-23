<?php
get_header('product');
$id = (int)($_GET['id']);
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
    if (empty($error)) {
        $data = array(
            "fullname" => $fullname,
            "gender" => $gender,
        );
        if (db_update("tbl_users",$data,"id ={$id}")) {
            $alert['add_success'] = "đã cập nhật thành công";
        } else {
            echo "Lỗi:" . $sql . "<br>"
            . mysqli_error($conn);
        }
    }
}
$sql = "SELECT `fullname`,`gender` FROM `tbl_users` WHERE `id` =$id";
$result = mysqli_query($conn,$sql);
$user = mysqli_fetch_assoc($result);
?>
<div id="wp-content">
    <h1>Cập nhật dữ liệu</h1>
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

        p.alert-success {
            margin-top: 10px;
            color: green;
        }
    </style>
    <form action="" method="POST" id="form-add-member">
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" id="fullname" value="<? if (!empty($user['fullname'])) echo $user['fullname'] ?>" placeholder=" fullname">
        <? if (!empty($error['fullname'])) echo "<p class='error'>{$error['fullname']}</p>" ?>
        <label for="gender">Chọn giới tính</label>
        <select name="gender" id="gender">
            <option value="">------</option>
            <option value="female" <? if (isset($user['gender']) && $user['gender'] == "female") echo "selected = 'selected'" ?>>Nữ</option>
            <option value="male" <? if (isset($user['gender']) && $user['gender'] == "male") echo "selected = 'selected'" ?>>Nam</option>
        </select>
        <? if (!empty($error['gender'])) echo "<p class='error'>{$error['gender']}</p>" ?>
        <input type="submit" name="btn_submit" value="Cập nhật dữ liệu">
        <? if (!empty($alert['update_success'])) echo "<p class='alert-success'>{$alert['update_success']}</p>" ?>
    </form>
</div>