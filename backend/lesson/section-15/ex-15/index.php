<?php
if (isset($_POST['btn_add'])) {
    $upload_dir = "uploads/";
    $upload_file = $upload_dir . $_FILES['file']['name'];
    $error = array();
    $type_allow = array('png', 'jpg', 'jpeg', 'gif', 'pdf');
    $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    //1
    if (!in_array(strtolower($type), $type_allow)) {
        $error['file_type'] = "File không đúng định dạng";
    } else {
        //2
        $type_size = $_FILES['file']['size'];
        if ($type_size > 21000000) {
            $error['file_size'] = "File vượt quá kích cỡ";
        }
        //4
        if (file_exists($upload_file)) {
            $file_name = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
            $new_file_name = $file_name . "-Copy.";
            $new_upload_file = $upload_dir . $new_file_name . $type;
            $k = 1;
            while (file_exists($new_upload_file)) {
                $new_file_name = $file_name . "Copy-($k).";
                $k++;
                $new_upload_file =  $upload_dir . $new_file_name . $type;
            }
            $upload_file = $new_upload_file;
        }
    }
    if (empty($error)) {
        move_uploaded_file($_FILES['file']['tmp_name'], $upload_file);
        echo "Ảnh đại diện:<img style =\"width:50px; height:50px \" src=\"$upload_file\"/>"
        ."<h3>{$_POST['title_post']}</h3>"
        ."<h4>{$_POST['post_content']}<h4>";
    }
}

?>
<html>

<head>
    <title>Bài tập phần 15</title>
    <script src="ckeditor/ckeditor.js"></script>
</head>

<body>
    <style>
        #content {
            width: 960px;
            margin: 0px auto;

        }
    </style>
    <div id="content">
        <h1>Tích hợp Ckeditor vào website</h1>
        <form enctype="multipart/form-data" method="post">
            <h2>Chọn ảnh đại diện:</h2><br><input type="file" name="file" id="">
            <h2>Nhập tiêu đề bài viết:</h2><br><input type="text" name="title_post" id="">
            <h2>Nhập chi tiết bài viết</h2>
            <textarea class="ckeditor" name="post_content"></textarea>
            <br>
            <input type="submit" value="Thêm dữ liệu" name="btn_add" />
        </form>
        <div class="post_content">
            <?php if (isset($post_content)) echo $post_content; ?>
        </div>
    </div>
</body>

</html>