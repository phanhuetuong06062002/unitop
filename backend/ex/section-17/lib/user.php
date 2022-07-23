<?
function show_gender($gender){
    $list_gender = array(
        'female' => 'Nữ',
        'male' => 'Nam',
    );
    if(array_key_exists($gender,$list_gender)){
        return $list_gender[$gender];
    }
}