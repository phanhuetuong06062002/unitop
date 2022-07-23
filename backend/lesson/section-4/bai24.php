<?php
 echo "<pre>";
    #mảng 1 chiều
    $my_array = array(1, 4, 9);
   
    print_r($my_array) ;
    // mảng nhiều chiều
    $array_my = array(
        1 => array(
            'id' => 1,
            'name' => 'toại'
        ),
        2 => array(
            'id' => 2,
            'name' => 'danh'
        )
        );
   print_r($array_my);
    
?>