<?php require 'lib/template.php';
get_header("red");
?>
<div id="content">
    <?php
    $id = (int)$_GET['id'];
    if ($id == 1) {
        echo "Trang giới thiệu";
    } else if ($id == 2) {
        echo "Trang tin tức";
    } else {
        echo "Trang liên hệ";
    }
    ?>
</div>
<?php get_footer(); ?>