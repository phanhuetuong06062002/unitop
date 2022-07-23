<?php require 'lib/template.php' ;
 get_header();
?>
<?php 
require 'config/email.php';
require 'lib/email.php';
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$path = "page/{$page}.php";
if(file_exists($path)){
    require $path;
    echo $path;
}else{
    require "page/404.php";
}
?>
<?php get_footer(); ?>