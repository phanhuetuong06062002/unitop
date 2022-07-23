<?php 
function is_username($username){
    $pattern = '/^[A-Za-z0-9!@#$%^&*()_+.]{6,32}$/';
    if(!preg_match($pattern, $_POST['username'])) {
            return false;
    }
    return true;
}
function is_password($password){
    $pattern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if(!preg_match($pattern, $password)){
        return false;
    }
    return true;
}
function is_email($email){
    //truongvshieu01@gmail.com
    $pattern = "/^[\w_.]{6,32}@([\w]{2,12})(.[a-zA-Z]{2,12})+$/";
    if(!preg_match($pattern,$email)){
        return false;
    }
    return true;
}
function is_phone_number($number_phone){
    $pattern = "/^(09|05|07)([0-9]+){8,9}$/";
    if(!preg_match($pattern,$number_phone)){
        return false;
    }
    return true;
}
function form_error($label_field){
    global $error;
    if(!empty($error[$label_field])){
        return "<p class=\"error\">{$error[$label_field]}</p>";
    }
    return false;
}
function set_value($label_field){
    global $$label_field;
    if(!empty($$label_field)){
        return false;
    }
    return true;
}