<?php
function show_gender($gender){
    $list_gender = array(
        'male' => 'Nam',
        'female' => 'Nữ',
    );
    if(array_key_exists($gender,$list_gender)){
        return $list_gender[$gender];
    }
}