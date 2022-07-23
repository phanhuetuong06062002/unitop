<?php
function add_users($data)
{
    return db_insert("tbl_user", $data);
}

function user_exists($username, $email)
{
    $check_user = db_num_rows("SELECT * FROM `tbl_user` WHERE `username` = '$username' or `email` = '$email'");
    //echo $check_user;
    if ($check_user > 0)
        return true;
    return false;
}

function get_list_users()
{
    $result = db_fetch_array("SELECT * FROM `tbl_user`");
    return $result;
}

function get_user_by_id($id)
{
    $item = db_fetch_array("SELECT * FROM `tbl_user` WHERE `id` = $id");
    return $item;
}

function check_token($active_token)
{
    $check_token = db_num_rows("SELECT * FROM `tbl_user` WHERE `active_token` = '$active_token' and `is_active` = '0'");
    if ($check_token > 0)
        return true;
    return false;
}

function active_user($active_token)
{
    return db_update('tbl_user', array('is_active' => 1), "`active_token`='{$active_token}'");
}

function delete_user_not_active()
{
    return db_delete('tbl_user', "`is_active`='0'");
}

function check_user($username, $password)
{
    $check_user = db_num_rows("SELECT * FROM `tbl_user` WHERE `username` = '$username' and `password` = '$password'");
    if ($check_user > 0)
        return true;
    return false;
};

function check_email($email){
    $check_email = db_num_rows("SELECT * FROM `tbl_user` WHERE `email` = '$email'");
    if ($check_email > 0)
        return true;
    return false;
}

function update_reset_pass_token($data,$email){
    return db_update('tbl_user',$data,"`email`='$email'");
}

function update_pass_new($data, $reset_pass_token){
    return db_update('tbl_user',$data,"`reset_pass_token`='$reset_pass_token'");
}
