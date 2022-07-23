<?
session_start();
ob_start();
//Thêm data
require 'data/page.php';
require 'data/product.php';
//lib
require 'lib/url.php';
require 'lib/cart.php';
require 'lib/data.php';
require 'lib/template.php';
require 'lib/page.php';
require 'lib/product.php';
require 'lib/format.php';
// show_array($list_product);
//module/home/main <=> ?mod=home&act=main.
$mod = (!empty($_GET['mod'])) ? $_GET['mod'] : 'home';
$act = (!empty($_GET['act'])) ? $_GET['act'] : 'main';
$path = "module/{$mod}/{$act}.php";
if(file_exists($path)){
    require "$path";
}
