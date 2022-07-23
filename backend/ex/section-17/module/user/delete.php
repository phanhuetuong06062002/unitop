<?
$id = (int)($_GET['id']);
db_delete('tbl_users',"id={$id}");
header("LOCATION: ?mod=user&act=main");