<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$path = "./pages/{$page}.php";

require './inc/header.php';

if (file_exists($path)) {
    require "{$path}";
} else {
    require "./modules/404.php";
}

require './inc/footer.php';
?>