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

function is_login()
{
    if (isset($_SESSION['is_login']))
        return true;
    return false;
}

function  user_login()
{
    if (!empty($_SESSION['user_login']))
        return true;
    return false;
}

function get_info_user($field = '')
{
    $list_users = db_fetch_array("SELECT * FROM `tbl_users_section-28`");
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
