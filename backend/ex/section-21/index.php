<?php
require "db/connect.php";
require "lib/database.php";
require "lib/template.php";
require "lib/user.php";
require "lib/url.php";
require "lib/paging.php";
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
