<?php
//get_header,footer,sidebat.
function get_header($version = ''){
    $path = (!empty($version)) ? "inc/header-$version.php" : "inc/header.php";
    require $path;
}
function get_footer($version = '')
{
    $path = (!empty($version)) ? "inc/footer-$version.php" : "inc/footer.php";
    require $path;
}
function get_sidebar($version = '')
{
    $path = (!empty($version)) ? "inc/sidebar-$version.php" : "inc/sidebar.php";
    require $path;
}