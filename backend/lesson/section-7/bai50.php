<?php
    $arr1 = array(1, 8,9,6);
    foreach($arr1 as $key => $item){
        echo "{$key} => $item<br>";
    }

    $arr2 = array(
        1 => array(
            'id' => 1,
            'name' => 'toại',
            'tuổi' => 19
        ),
        2 => array(
            'id' => 2,
            'name' => 'danh',
            'tuổi' => 28
        )
    );

    unset($arr2[2]['tuổi']);
    echo "<pre>";
    print_r($arr2);

    foreach($arr2 as $key => $value){
        echo " {$key} >>> {$value['name']}"."<br>";

    }
?>