<?php
    $list_even = array(0,2,4,6,8);
    echo "<pre>";
    print_r($list_even[0]);
    echo "</pre>";

    echo "<hr>";
    $myUser = array(
        'id' => 1,
        'lastname' => 'Trường',
        'university' => 'FPT university',
        'email' =>'truongvshieu01@gmail.com.vn',
    );
    $myUser['class'] = 'KTPM';
    echo "<pre>";
    print_r($myUser);
    echo "</pre>";

    echo "<hr>";
    $list_even = array(10,8,6,4,2,0);
    sort($list_even);
    $x = 0;
    foreach($list_even as $value){
        echo $value."<br>";
    }
    
?>