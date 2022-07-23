<?php
$user_id = $_GET['user_id'];

// $sql = "DELETE 
//         FROM   `tbl_users`
//         WHERE `user_id` = $user_id";
if(db_delete("tbl_users","user_id={$user_id}")){
    redirect("?mod=user&act=main");
}
