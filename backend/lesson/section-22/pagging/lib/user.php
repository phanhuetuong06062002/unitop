<?php
function get_user($start=1,$end=10,$where=""){
    if(!empty($where)) $where = "WHERE".$where;
    $result = db_fetch_array("SELECT * FROM `tbl_users` $where LIMIT {$start},{$end}");
    return $result;
}