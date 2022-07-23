
<?php 
$mod = isset($_GET['mod']) ? $_GET['mod'] : 'home';
$act = isset($_GET['act']) ? $_GET['act'] : 'main';
$path = "module/$mod/{$act}.php";

if(file_exists($path)){
    require $path;
}
?>
