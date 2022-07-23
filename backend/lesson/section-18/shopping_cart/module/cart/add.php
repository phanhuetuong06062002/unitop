<?php
$id = (int)$_GET['id'];
add_card($id);
show_array($_SESSION['cart']);
redirect("?mod=cart&act=show");




