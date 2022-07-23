<?php

/*
* BIỂU THỨC CHÍNH QUY
* 1.Username : /^[A-Za-z0-9_\.]{6,32}$/
* 2.Password : /^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/
* 3.Email:
/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/
*/

function is_username($username)
{
    $parttern = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (preg_match($parttern, $username))
        return true;
};
function is_password($password)
{
    $parttern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if (preg_match($parttern, $password))
        return true;
};
function is_email($password)
{
    $parttern = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
    if (preg_match($parttern, $password))
        return true;
}
function set_value($label_field)
{
    global $$label_field;
    if (isset($$label_field))
        echo $ $$label_field;
};
function form_error($label_field)
{
    global $error;
    if (isset($error[$label_field])) {
        echo "<span style=\"color:red;\">{$error[$label_field]}</span><br/>";
    }
}
