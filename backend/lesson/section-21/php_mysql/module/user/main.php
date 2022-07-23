<?php require 'lib/template.php';
get_header();

?>

<div id="content">
    <a href="?mod=user&act=add">Thêm mới</a>
    <?php
    $list_users = db_fetch_array("SELECT * FROM `tbl_users`");
    ?>

    <style>
        td {
            text-align: center;
            font-size: 30px;
        }
    </style>
    <table border="1">
        <thead>
            <tr>
                <td>STT</td>
                <td>User_id</td>
                <td>Họ tên</td>
                <td>Email</td>
                <td>Giới tính</td>
                <td>Thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $t = 1;
            foreach ($list_users as $users) {
                $users['url_update'] = "?mod=user&act=update&user_id={$users['user_id']}";
                $users['url_delete'] = "?mod=user&act=delete&user_id={$users['user_id']}";
            ?>
                <tr>
                    <td><?php echo $t ?></td>
                    <td><?php echo $users['user_id'] ?></td>
                    <td><?php echo $users['fullname'] ?></td>
                    <td><?php echo $users['email'] ?></td>
                    <td><?php echo show_gender($users['gender']) ?></td>
                    <td><a href="<?php echo "?mod=user&act=update&user_id={$users['user_id']}" ?>">Sữa</a>|<a href="<?php echo "?mod=user&act=delete&user_id={$users['user_id']}" ?>">Xóa</a>
                </tr>
            <?php $t++;
            } ?>
        </tbody>
    </table>
    <i>Có <strong><?php echo db_num_rows("SELECT * FROM `tbl_users`"); ?></strong> thành viên</i>
    <div class="pagging">
        <ul>
            <li><a href="">&lt;</a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href="">5</a></li>
            <li><a href="">&gt;</a></li>
        </ul>
    </div>
    <div class="clear-fix"></div>
</div>
<?php get_footer(); ?>