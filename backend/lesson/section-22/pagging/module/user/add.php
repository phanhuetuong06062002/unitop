<?php require 'lib/template.php';
get_header();
?>
<style>
    label {
        font-size: 25px;
        margin-bottom: 5px;
        display: block;
    }

    input {
        margin-bottom: 5px;
        border-radius: 5px;
        width: 300px;
        height: 20px;
    }

    input[type="submit"] {
        margin-top: 10px;
        display: block;
        font-size: 22px;
        height: 30px;
        background-color: yellow;
    }
</style>
<?php
if (isset($_POST['btn_add_member'])) {
    $error = array();
    $alert = array();
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Không được để trống họ và tên";
    } else {
        $fullname = $_POST['fullname'];
    }
    if (empty($_POST['gender'])) {
        $error['gender'] = "Không được để giới tính";
    } else {
        $gender = $_POST['gender'];
    }
    if (empty($_POST['username'])) {
        $error['username'] = "Không được để trống username";
    } else {
        if (is_username($_POST['username'])) {
            $username = $_POST['username'];
        } else {
            $error['username'] = "Username không đúng định dạng";
        }
    }
    if (empty($_POST['email'])) {
        $error['email'] = "Không được để trống email";
    } else {
        if (is_email($_POST['email'])) {
            $email = $_POST['email'];
        } else {
            $error['email'] = "Email không đúng định dạng";
        }
    }
    if (empty($_POST['password'])) {
        $error['password'] = "Không được để trống password";
    } else {
        if (is_password($_POST['password'])) {
            $password = md5($_POST['password']);
        } else {
            $error['password'] = "Password không đúng định dạng";
        }
    }
    if(empty($error)){

        // $sql = "INSERT INTO `tbl_users`(`fullname`, `username`, `password`, `email`) 
        // VALUES ('$fullname','$username','$password','$email')";  
        $data = array(
            'fullname' => $fullname,
            'username' => $username,
            'password' => $password,
            'email' => $email,
        );
        if(db_insert('tbl_users',$data)){
            $alert['sucess'] = "Đã thêm thành viên thành công";
        }else{
            echo "Lỗi ".mysqli_error($conn);
        }
    }
}

?>
<style>
    .error{
        color:red;
    }
    .sucess{
        color:green;
    }
</style>
<div id="content">
    <form action="" method="post">
        <label for="fullname">Họ và tên</label><br>
        <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname') ?>"><br>
        <?php echo form_error('fullname') ?>
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" value="<?php echo set_value('username') ?>"><br>
        <?php echo form_error('username') ?>
        <label for=" password">Password</label><br>
        <input type="password" name="password" id="password"><br>
        <?php echo form_error('password') ?>
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" value="<?php echo set_value('email') ?>"><br>
        <?php echo form_error('email') ?>
        <label for="gender">Giới tính</label>
        <select name="gender" id="gender">
            <option value="1">--Chọn--</option>
            <option value="female">Nữ</option>
            <option value="male">Nam</option>
        </select>
        <?php echo form_error('gender') ?>
        <input type="submit" name="btn_add_member" value="Đăng ký">
        <p class="sucess"><?php if(isset($alert['sucess'])) echo $alert['sucess']?></p>
    </form>
</div>
<?php get_footer(); ?>