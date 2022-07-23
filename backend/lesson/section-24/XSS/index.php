<?php
require 'db/connect.php';
$alert = array();
$list_user = array();
if (isset($_POST['btn_submit'])) {
    if (!empty($_POST['fullname'])) {
        $fullname = $_POST['fullname'];
    }
    if (!empty($_POST['comment'])) {
        $comment = $_POST['comment'];
    }
    if (!empty($_POST['fullname']) && !empty($_POST['comment'])) {
        $sql = "INSERT INTO `tbl_comment`(`fullname`, `comment`) VALUES ('$fullname','$comment')";
        if (@mysqli_query($conn, $sql)) {
            $alert['success'] = "Đã thêm dữ liệu thành công";
        }
    }
}

$sql = "SELECT * FROM `tbl_comment`";
$result = mysqli_query($conn, $sql);
$list_user = array();
while ($row = mysqli_fetch_array($result)) {
    $list_user[] = $row;
}






// $sql = "SELECT * FROM `tbl_comment`";
// $result = @mysqli_query($conn, $sql);
// while ($row = @mysqli_fetch_array($result)) {
//     $list_user[] = $row;
// }
?>
<style>
    .success {
        color: green;
    }

    .comment {
        margin-top: 15px;
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tấn công DDS</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Tên người dùng</label><br>
        <input type="text" name="fullname" id=""><br>
        <label for="">Comment</label><br>
        <textarea name="comment" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" name="btn_submit" name="comment" value="submit">
    </form>
    <? if (!empty($alert)) echo "<p class=\"success\">{$alert['success']}<p>"; ?>
    <div class="comment">
        <?php foreach ($list_user as $user) { ?>
            <p class="fullname"><?php echo $user['fullname'] ?> <strong class="comment"><?php echo $user['comment'] . "</br>" ?></strong></p>
        <? } ?>
    </div>
</body>

</html>