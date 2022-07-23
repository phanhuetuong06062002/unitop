<?php
function get_header($color='')
{
    $path_header = empty($color)? "inc/header.php" : "inc/header-{$color}.php";
    if(file_exists($path_header)){
        require $path_header;
    }else{
        echo "Ko có file header này";
    }
    
}
function get_footer()
{
    $path_footer = "inc/footer.php";
    if (file_exists($path_footer)) {
        require $path_footer;
    } else {
        echo "không tồn tại file đến {$path_footer}";
    }
}

function get_sidebar()
{
    $path_sidebar = "inc/sidebar.php";
    if (file_exists($path_sidebar)) {
        require $path_sidebar;
    } else {
        echo "không tồn tại file đến {$path_sidebar}";
    }
}

