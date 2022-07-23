<?php require 'lib/template.php';
get_header();
// num_per_page,total_row, num_page, page , start

//Số lượng bảng ghi
$total_row = db_num_rows("SELECT * FROM `tbl_users`");
//Số lượng bảng ghi trên 1 trang
$num_per_page = 3;
//Số lượng trang
$num_page = ceil($total_row / $num_per_page);
//Số trang hiện hành
$page = isset($_GET['page']) ? $_GET['page'] : 1;
//Số trang bắt đầu
$start = ($page - 1) * $num_per_page;
//echo "page hiện hành:".$page."<br>"."Số trang bắt đầu:$start"."<br>"."Số lượng trang trên 1 bảng ghi:".$num_per_page;


?>

<div id="content">
    <a href="?mod=user&act=add">Thêm mới</a>
    <?php
    $list_users = get_user($start, $num_per_page);
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
            foreach ($list_users as $users) {
                $users['url_update'] = "?mod=user&act=update&user_id={$users['user_id']}";
                $users['url_delete'] = "?mod=user&act=delete&user_id={$users['user_id']}";
            ?>
                <tr>
                    <td><?php echo $start; ?></td>
                    <td><?php echo $users['user_id'] ?></td>
                    <td><?php echo $users['fullname'] ?></td>
                    <td><?php echo $users['email'] ?></td>
                    <td><?php echo show_gender($users['gender']) ?></td>
                    <td><a href="<?php echo "?mod=user&act=update&user_id={$users['user_id']}" ?>">Sữa</a>|<a href="<?php echo "?mod=user&act=delete&user_id={$users['user_id']}" ?>">Xóa</a>
                </tr>
            <?php $start++;
            } ?>
        </tbody>
    </table>
    <i>Có <strong><?php echo $total_row; ?></strong> thành viên</i>
    <div class="pagging">
        <?  echo get_pagging($num_page,$page, "?mod=user&act=main"); 
        ?>
    </div>
    <div class="clear-fix"></div>
</div>
<?php get_footer(); ?>