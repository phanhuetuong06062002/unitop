<?php
get_header();
?>
<?
// $sql = "SELECT * FROM `tbl_users`";
// $result = mysqli_query($conn, $sql);
// $num_row = mysqli_num_rows($result);
//$list_users = array();
// if ($num_row > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         $list_users[] = $row;
//     }
//}
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$num_row = db_num_rows("SELECT * FROM `tbl_users`");
$total_row = $num_row;
$num_per_page = 3;
$num_page = ceil($total_row/$num_per_page);
$start = ($page -1)*$num_per_page;
$list_users = get_users('tbl_users',"$start","$num_per_page");
?>
<div id="wp-content">
    <h6>Thêm thành viên: <a href="?mod=user&act=add">Thêm mới</a> </h6>
    <style>
        table td,
        table th {
            width: 150px;
            border: 1px solid #000;
            text-align: center;
        }

        table th {
            border-bottom: 2px solid #000;
        }

        ul#paging {
            list-style: none;
            float: right;
        }

        ul#paging li {
            display: inline-block;
            padding: 2px;
        }

        ul#paging li a {
            padding: 5px;
            border: 1px solid #ccc;
            text-decoration: none;
        }

        ul#paging li.active a {
            border: 1px solid orange;
            color: orange;
        }
    </style>
    <table>
        <thead>
            <tr>
                <th>Stt</th>
                <th>id</th>
                <th>username</th>
                <th>fullname</th>
                <th>password</th>
                <th>email</th>
                <th>gender</th>
                <th>manipulation</th>
            </tr>
        </thead>
        <?
        $temp = $start;
        foreach ($list_users as $user) {
            $user['url_update'] = "?mod=user&act=update&id={$user['id']}";
            $user['url_delete'] = "?mod=user&act=delete&id={$user['id']}";
        ?>
            <tbody>
                <tr>
                    <td><? echo $temp; ?></td>
                    <td><? echo $user['id'] ?></td>
                    <td><? echo $user['username'] ?></td>
                    <td><? echo $user['fullname'] ?></td>
                    <td><? echo $user['password'] ?></td>
                    <td><? echo $user['email'] ?></td>
                    <td><? echo show_gender($user['gender']) ?></td>
                    <td><a href="<? echo $user['url_update'] ?>">Sửa</a>|<a href="<? echo $user['url_delete'] ?>">Xóa</a></td>
                </tr>
            </tbody>
        <? $temp++;
        } ?>
    </table>
    <p>có <? echo $num_row ?> thành viên</p>
   <? echo get_paging($start,$page,$num_page) ?>
</div>