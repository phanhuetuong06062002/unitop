<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="<? echo base_url(); ?>">
    <link rel="stylesheet" href="./public/css/reset.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <script src="public/js/jquery-3.6.0.min.js"></script>
    <script src="public/js/app.js"></script>
</head>

<body>
    <div id="wrapper">
        <div id="header" class="header">
            <ul>
                <li><a href="?mod=home&controller=index&action=index">TRANG CHỦ</a></li>
                <li><a href="?mod=page&controller=index&action=detail&id=1">GIỚI THIỆU</a></li>
                <li><a href="?mod=order&controller=index&action=index">ĐƠN HÀNG</a></li>
                <li><a href="?mod=product&controller=index&action=index&cat_id=1">ĐIỆN THOẠI</a></li>
                <li><a href="?mod=product&controller=index&action=index&cat_id=2">MÁY TÍNH</a></li>
                <li><a href="?mod=page&controller=index&action=detail&id=2">LIÊN HỆ</a></li>
            </ul>
            <p>Xin chào: <strong><? echo get_info_user('fullname') ?></strong> <a href="?mod=users&action=logout">(Thoát)</a> </p>
        </div>