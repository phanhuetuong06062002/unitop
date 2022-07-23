<?php
session_start();
setcookie('is_login', true, time() - 3600);
setcookie('user_login', $username, time() - 3600);
session_destroy();
redirect_to("?page=login");