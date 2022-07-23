<?php
function construct(){

}

function indexAction(){
    $cat_id = $_GET['cat_id'];
    if($cat_id == 1){
        load_view('smart_phone');
    }
    if($cat_id == 2){
        load_view('laptop');
    }
}