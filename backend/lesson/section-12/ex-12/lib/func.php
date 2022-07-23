<?php 
    function get_header($header_file){
        if(file_exists($header_file)){
            require $header_file;
        }
    }
    function get_footer($footer_file){
    if (file_exists($footer_file)) {
        require $footer_file;
    }
    }
    function redirect_to($file){
        header("Location: {$file}");
    }
?>