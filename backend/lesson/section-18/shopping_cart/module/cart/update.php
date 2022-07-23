<?php
if(isset($_POST['btn_submit'])){
    update_cart($_POST['qty']);
    redirect("?mod=cart&act=show");
}