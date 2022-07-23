<?php
require 'lib/template.php';
get_header();
$user_id = $_GET['user_id'];
$alert = array();
if (isset($_POST['btn_update'])) {
    $error = array();
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Họ và tên không được để trống";
    } else {
        $fullname = $_POST['fullname'];
    }
    if (empty($_POST['gender'])) {
        $error['gender'] = "Giới tính không được để trống";
    } else {
        $gender = $_POST['gender'];
    }
    if (empty($error)) {
        // $sql_update = "UPDATE `tbl_users`
        //         SET `fullname` = '$fullname',
        //             `gender` = '$gender'
        //         WHERE `user_id` = '$user_id'";
        // if (mysqli_query($conn, $sql_update)) {
        //     $alert['success'] = "Bạn đã cập nhật thành công";
        // } else {
        //     echo "Lỗi: " . mysqli_error($conn);
        // }
        $data = array(
            'fullname' => $fullname,
            'gender' => $gender,
        );
        if(db_update("tbl_users",$data,"user_id = $user_id")){
            $alert['success'] = "Bạn đã cập nhật thành công";

        };
    }
}
// $sql = "SELECT * 
//             FROM `tbl_users` 
//             WHERE `user_id` = ${user_id}";
// $result = mysqli_query($conn, $sql);
// $user = mysqli_fetch_assoc($result);
$user = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_id` = $user_id");

?>
<style>
    .success {
        color: green
    }
</style>
<div id="content">
    <h3>Chỉnh sửa thông tin</h3>
    <form action="" method="POST">
        <label for="fullname">Họ và tên</label><br>
        <input type="text" name="fullname" id="fullname" value="<?php if (!empty($user['fullname'])) echo $user['fullname']; ?>"><br>
        <label for="">Giới tính</label><br>
        <select name="gender" id="">
            <option value="0">--Chọn--</option>
            <option value="male" <?php if (!empty($user['gender']) && $user['gender'] == "male") echo 'selected=selected' ?>>Nam</option>
            <option value="female" <?php if (!empty($user['gender']) && $user['gender'] == "female") echo 'selected=selected' ?>>Nữ</option>
        </select><br><br>
        <input type="submit" name="btn_update" value="Cập nhật">
    </form>
    <p class="success"> <?php if (!empty($alert['success'])) echo $alert['success'];?></p>

</div>
<?php
get_footer();
?>