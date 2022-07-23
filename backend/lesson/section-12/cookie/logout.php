<?php
session_start();
setcookie('is_login', true, time() - 3600 * 3);
setcookie('username', $username, time() - 3600 * 3);
session_destroy();
header('Location: login.php');
?>