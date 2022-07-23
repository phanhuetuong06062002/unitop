<?php

function show_array($array){
    if(is_array($array)){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}

function check_even($number)
{
    if ($number % 2 == 0) {
        echo "Đây là số chẵn";
    } else {
        echo "Đây không phải là số chẵn";
    }
}
check_even(2);

echo "<hr>";

function sum_mutiple_number(){
    $list_number = func_get_args();
    $t = 0;
    foreach($list_number as $key => $value){
        $t += $value;
    }
    return $t;
}

echo sum_mutiple_number(5,6,7,8,9,10);

echo "<hr>";
$list_number = array(5, 6, 7, 8, 9, 10);
function sum_several_number($list_number = array()){
    $t = 0;
    foreach($list_number as $value){
        $t += $value;
    }
    return $t;
}
echo sum_several_number($list_number);

echo "<hr>";
//<input name = '' value = '' id  = '' class ='' />
function create_input(){
    $name = func_get_arg(0);
    $value = func_get_arg(1);
    $option = func_get_arg(2);
    if(!empty($option)){
        $id = $option['id'];
        $class = $option['class'];
    }
    echo "<input name = '$name' value = '$value' id  = '$id' class ='$class' />";
}
create_input('input_name','input_value',$option = array('id'=>'input_id','class'=>'input_class'));