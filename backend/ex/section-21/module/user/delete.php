<?
$id = (int)($_GET['id']);
$delete_user= db_delete("tbl_users","id={$id}");
if(isset($delete_user)){
    redirect("?mod=user&user=main");
}
