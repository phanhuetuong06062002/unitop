<?php require 'lib/template.php';
get_header("yellow");
?>
<div id="content">
    <?php
    $cat_id = (int)$_GET['cat_id'];
    if ($cat_id == 1) {
        echo "Trang điện thoại";
    }
    if ($cat_id == 2) {
        echo "Trang máy tính";
    }
    ?>
</div>
<?php get_footer(); ?>