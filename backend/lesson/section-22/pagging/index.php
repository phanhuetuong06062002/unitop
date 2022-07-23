<?php 
require 'db/config.php';

require 'lib/user.php';
require 'lib/database.php';
require 'lib/show_gender.php';
require 'lib/url.php';
require 'lib/validation-form.php';
require 'lib/pagging.php';

db_connect($db);

$mod = isset($_GET['mod']) ? $_GET['mod'] : 'home';
$act = isset($_GET['act']) ? $_GET['act'] : 'main';
$path = "module/$mod/{$act}.php";

if(file_exists($path)){
    require $path;
}
?>
