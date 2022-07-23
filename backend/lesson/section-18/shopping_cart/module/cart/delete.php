<?php
$id = $_GET['id'];
delete_cart($id);
redirect("?mod=cart&act=show");