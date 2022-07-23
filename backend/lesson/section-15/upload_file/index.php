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
    show_array($_FILES);
    $upload_dir = "uploads/";
    $upload_file= $upload_dir.$_FILES['file']['name'];
    if(move_uploaded_file($_FILES['file']['tmp_name'],$upload_file)){
        echo "<a href = \"$upload_file\">{$_FILES['file']['name']}</a>";
    }else{
        echo "Upload file không thành công";
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