<?php 
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME', 'laravelpro');
    $db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if($db->connect_error){
        die("Kết nối thất bại:" .$db->connect_error);
    }
    echo "Kết nối thành công";
    
    
