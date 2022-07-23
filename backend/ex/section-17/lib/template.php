<?php
function get_header($style = '')
{
    if (!empty($style)) {
        $path = "inc/header-{$style}.php";
    }else{
        $path = "inc/header.php";
    }
    if(file_exists($path)){
        require $path;
    }else{
        echo "Đường dẫn không tồn tại";
    }
}
