<?php
require 'lib/func.php';
session_start();
ob_start();
if (!isset($_SESSION['is_login'])) {
    redirect_to('login.php');
}
?>
<?php 
    get_header('inc/header.php');
?>
        <div id="content">
            Content
        </div>
<?php
get_footer('inc/footer.php');

?>