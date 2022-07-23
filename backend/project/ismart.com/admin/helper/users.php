<?php
function check_login($username, $password)
{
    global $list_users;
    foreach ($list_users as $user) {
        if ($username == $user['username'] && md5($password) == $user['password']) {
            return true;
        }
    }
    return false;
}

function get_info_user_by_username($username = ''){
    if(!empty($username)){
        $info_user = db_fetch_row("SELECT * FROM `tbl_user` WHERE `username` = '$username'");
        return $info_user;
    }
}

function is_login()
{
    if (isset($_SESSION['is_login']))
        return true;
    return false;
}

function  user_login()
{
    if (!empty($_SESSION['user_login']))
        return $_SESSION['user_login'];
    return false;
}

function get_info_user($field = '')
{
    $list_users = db_fetch_array("SELECT * FROM `tbl_user`");
    if (is_login()) {
        foreach ($list_users as $user) {
            if ($_SESSION['user_login'] == $user['username']) {
                if (array_key_exists($field, $user)) {
                    return $user[$field];
                }
            }
        }
    }
}
function update_info_user($data,$username){
    return db_update('tbl_user',$data,"`username` = '$username'");
}
