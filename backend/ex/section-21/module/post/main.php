<?php
get_header('post');
$page = isset($_GET['page']) ? (int)($_GET['page']) : 1;
$conn = mysqli_connect("localhost", "root", "", "unitop");
if (!$conn) {
    echo "Kết nối thất bại"
        . "lỗi" . mysqli_connect_error();
} else {
    echo "Kết nối thành công";
}
$sql = "SELECT * FROM `tbl_post` WHERE `page`= $page";
$result = mysqli_query($conn, $sql);
$list_post = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $list_post[] = $row;
    }
}


?>
<style>
    ul#list_post {
        list-style-type: none;
        display: block;
        width: 960px;
        margin: 0 auto;
    }

    ul#list_post li {
        margin-top: 20px;
    }

    a[class$="title"] {
        color: #000;
        text-decoration: none;
        display: block;
        margin: 5px 0px;
    }

    ul li div {
        display: flex;
    }

    ul li div>a img {
        width: 180px;
        height: 120px;
    }

    ul li div div.wp-post-desc {
        display: flex;
        flex-direction: column;
        margin-left: 5px;
    }

    ul li div div.wp-post-desc a.little-desc {
        width: 270px;
        color: #000;
        text-decoration: none;
        text-align: justify;
    }

    ul li div div.wp-post-desc p {
        margin-top: 5px;
        color: #786a6a;
    }

    ul#list_page {
        margin-left: 500px;
        margin-top: 50px;
    }

    ul#list_page li {
        display: inline-block;
    }

    ul#list_page li a {
        padding: 10px;
        background-color: #d8cfcf;
        color: #d46522;
    }
</style>
<div id="wp-content">
    <h6>Tin tức</h6>
    <? if (!empty($list_post)) { ?>
        <ul id="list_post">
            <? foreach ($list_post as $item) {?>
                <li>
                    <a href="" class="post-title"><? echo $item['post_title'] ?></a>
                    <div>
                        <a href="" class="post-img">
                            <img src="<? echo $item['post_img'] ?>"></img>
                        </a>
                        <div class="wp-post-desc">
                            <a href="" class="little-desc"><? echo $item['post_desc'] ?></a>
                            <p class="post-time"><? echo $item['post_date'] ?></p>
                        </div>
                    </div>
                </li>
            <? } ?>
        </ul>
    <? } ?>
    <ul id="list_page">
        <li><a href="?mod=post&act=main&page=1">1</a></li>
        <li><a href="?mod=post&act=main&page=2">2</a></li>
        <li><a href="?mod=post&act=main&page=3">3</a></li>
    </ul>
</div>