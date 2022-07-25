<?php

session_start();
unset($_SESSION['name']);

$cookie_name = "user";
$cookie_value = null;
setcookie($cookie_name, $cookie_value, -1);

header('location:index.php?signout=Đăng xuất thành công');