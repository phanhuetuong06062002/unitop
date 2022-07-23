<?php
require "db/connect.php";
require "db/config.php";
require "db/database.php";
require "lib/template.php";
require "lib/data.php";
require "lib/user.php";

?>
<?
    db_connect($config);
?>
<div id="wp-content">
    
<?php
    $mod = !empty($_GET['mod'])?$_GET['mod']:'home';
    $act = !empty($_GET['act'])?$_GET['act']:'main';
    $path = "module/{$mod}/{$act}.php";
    if(file_exists($path)){
        require "$path";
    } else{
        echo "ko có trang này";
    }
?>

</div>

<?php
require "inc/footer.php";
?>
