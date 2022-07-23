<?php 
$file_delete = "uploads/bg.jpeg";
if(@unlink($file_delete)){
    echo "Đã xóa thành công file";
}else{
    echo "File không tồn tại trên hệ thống";
}
