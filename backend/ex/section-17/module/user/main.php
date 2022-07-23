<?php
get_header();
$sql = "SELECT * FROM `tbl_users`";
$list_users = array();
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $list_users[] = $row;
    }
} else {
    echo "error" . $sql . "<br>" . mysqli_error($conn);
};

?>
<div id="wp-content">
    <h6>Thêm thành viên</h6><a href="?mod=user&act=add">Thêm mới</a>
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
        <? if (!empty($list_users)) {
            $temp = 1;
        ?>
            <tbody>
                <? foreach ($list_users as $user) { 
                    $user['url_update'] = "?mod=user&act=update&id={$user['id']}";
                    $user['url_delete'] = "?mod=user&act=delete&id={$user['id']}";
                    ?>
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
                <? $temp++;
                } ?>
            </tbody>
            <? } ?>
        </table>
        <p>Có tất cả <? echo mysqli_num_rows($result) ?> thành viên</p>
</div>