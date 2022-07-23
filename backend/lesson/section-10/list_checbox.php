<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list_checkbox</title>
</head>

<body>
    <?php 
        if(!empty($_POST['btn_register'])){
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
            if(!empty($_POST['cat'])){ 
                //cách 1 
                // $item = "";      
                // foreach($_POST['cat'] as $value){
                //    $item .= $value . "<br>";
                // }    
                // echo $item;

                //cách 2
                $list_value = implode(",",$_POST['cat']);
                echo $list_value;
            }
        }
    ?>
    <h1>nhận dữ liệu từ list checkbox</h1>
    <h1>Chọn danh mục</h1>
    <form action="" method="POST">
        <input type="checkbox" name="cat[]" value="0" id="sport">
        <label for="sport">Thể thao</label><br>
        <input type="checkbox" name="cat[]" value="1" id="read_book">
        <label for="read_book">Đọc sách</label><br><br>
        <input type="submit" name="btn_register" value="Submit">
    </form>
</body>

</html>