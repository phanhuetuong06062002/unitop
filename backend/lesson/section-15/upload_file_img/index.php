<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file trên sever</title>
</head>
<?php
require 'lib/data.php';
if (isset($_POST['btn_submit'])) {
/*
    1)đuôi file : jpg,jpeg,png,gif
    2)file size < 20MB
    3)file exist,Xử lí tự đổi tên file khi đã tồn tại
*/
    $upload_dir = "uploads/";
    $upload_file= $upload_dir.$_FILES['file']['name'];
    $error = array();
    $type_allow = array('png','jpg','jpeg','gif','pdf');
    $type = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
    //1
    if(!in_array(strtolower($type),$type_allow)){
        $error['file_type'] = "File không đúng định dạng";
    }else{
        //2
        $type_size = $_FILES['file']['size'];
        if($type_size > 21000000){
            $error['file_size'] = "File vượt quá kích cỡ";
        }
        //4
        if(file_exists($upload_file)){
            $file_name = pathinfo($_FILES['file']['name'],PATHINFO_FILENAME);
            $new_file_name = $file_name."-Copy.";
            $new_upload_file = $upload_dir. $new_file_name.$type;
            $k = 1;
            while(file_exists($new_upload_file)){
                $new_file_name = $file_name. "Copy-($k).";
                $k++;
                $new_upload_file =  $upload_dir. $new_file_name.$type;
            }
            $upload_file = $new_upload_file;
        }
    }
    if(empty($error)){
        if(move_uploaded_file($_FILES['file']['tmp_name'],$upload_file)){
            //echo "<img src = \"$upload_file\"> /";
            echo "<a href = \"$upload_file\">{$_FILES['file']['name']}</a>";
        }
    } else {
        show_array($error);
    }
}
?>

<body>
    <form enctype="multipart/form-data" method="POST">
        <input type="file" name="file" id=""><br><br>
        <input type="submit" name="btn_submit" value="file_submit">
    </form>
</body>

</html>