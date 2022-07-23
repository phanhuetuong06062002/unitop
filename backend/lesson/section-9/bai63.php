<?php
$arr_1 = array(1, 5, 7, 8);
$arr_3 = array(7, 8);
$arr_2 = array(
     array(
        'id' => 1,
        'name' => 'toại',
        'class' => '12b'
    ),
     array(
        'id' => 2,
        'name' => 'danh',
        'class' => '12vv'
    )
);
echo "<pre>";
echo array_search(8, $arr_1);
