<?php
echo "<pre>";
//print_r($_GET);

function show_array($arr){
    if(is_array($arr)){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
}

if(isset($_GET['btn_search'])){
 print_r($_GET);
   echo $_GET['q'];
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="?mod=product&act=detail&id=1920">Click</a>
    <?php
    if(!empty($_GET['mod'])){
    $mod = $_GET['mod'];
    $act = $_GET['act'];
    $id = $_GET['id'];
    show_array($_GET);
    echo $mod."-".$act."-".$id;
    }
    ?>
    <form action="" method="GET">
        <label for="q">Tìm kiếm</label>
        <input type="search" name="q" id="q">
        <input type="submit" name="btn_search" value="tìm kiếm">
    </form>
</body>

</html>