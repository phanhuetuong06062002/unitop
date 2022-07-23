<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

function check_login($username, $password)
{
    global $list_user;
    foreach ($list_user as $key => $user) {
        if ($username == $user['username'] && md5($password) == $user['password']) {
            return true;
        }
    }
    return false;
}

function is_login(){
    if(isset($_SESSION['is_login'])){
        return true;
    }
    return false;
}
function get_info_user($field ='id'){
    global $list_user;
    foreach($list_user as $user){
        if($_SESSION['user_login'] == $user['username']){
            return  $user[$field];
        }
    }
    return false;
}