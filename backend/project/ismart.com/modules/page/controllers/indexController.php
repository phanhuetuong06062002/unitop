<?php
function construct()
{

}

function indexAction(){

}
function detailAction(){
$id = $_GET['id'];
if($id == 1){
load_view('about');
}
if($id == 2){
load_view('contact');
}
}