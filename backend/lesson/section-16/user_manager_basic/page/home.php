<?php
ob_start();
require 'lib/template.php';
get_header();
?>
<div id="content">
    Home
<?php  
show_array($_SESSION);
?>
</div>

<?php get_footer(); ?>