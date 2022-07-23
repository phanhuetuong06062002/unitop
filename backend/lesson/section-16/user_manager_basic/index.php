
<?php
ob_start();
session_start();
require "data/user.php";
require "lib/url.php";
require "lib/validation_form.php";
require 'lib/user.php';
$page = !empty($_GET['page']) ? $_GET['page'] : 'home';
$path = "page/{$page}.php";
if(!is_login() && $page != "login")
    redirect_to("?page=login");

if(file_exists($path)){
    require $path;
}else{
    require "page/404.php";
}
