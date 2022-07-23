<?
get_header();
$id = (int)($_GET['id']);
$error = array();
$alert = array();
//Kiểm tra fullname
if (isset($_POST['btn_update'])) {
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
        $update_user = db_update("tbl_users", $data, "id={$id}");
        if (isset($update_user)) {
            $alert["update_success"] = "Cập nhật thành công";
        }
    }
}
// $sql = "SELECT * FROM `tbl_users` WHERE `id` = {$id}";
// $result = mysqli_query($conn,$sql);
// $item = mysqli_fetch_assoc($result);
$item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `id` = {$id}");
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

    p.alert-success {
        margin-top: 10px;
        color: green;
    }

   
</style>
<div id="wp-content">
    <h1>Cập nhật thành viên</h1>
    <form action="" method="POST" id="form-add-member">
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" id="fullname" value="<? if (!empty($item['fullname'])) echo $item['fullname'] ?>" placeholder=" fullname">
        <? if (!empty($error['fullname'])) echo "<p class='error'>{$error['fullname']}</p>" ?>
        <label for="gender">Chọn giới tính</label>
        <select name="gender" id="gender">
            <option value="">------</option>
            <option value="female" <? if (isset($item['gender']) && $item['gender'] == "female") echo "selected = 'selected'" ?>>Nữ</option>
            <option value="male" <? if (isset($item['gender']) && $item['gender'] == "male") echo "selected = 'selected'" ?>>Nam</option>
        </select>
        <? if (!empty($error['gender'])) echo "<p class='error'>{$error['gender']}</p>" ?>
        <input type="submit" name="btn_update" value="Cập nhật thông tin">
        <? if (!empty($alert['update_success'])) echo "<p class='alert-success'>{$alert['update_success']}</p>" ?>
    </form>
    
</div>