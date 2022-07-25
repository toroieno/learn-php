<?php

require 'admin/connect.php';

$user_name = $_POST['user_name'];
$password = $_POST['password'];


$sql = "select * from users
        where (user_name = '$user_name' or email = '$user_name') and password = '$password'
";
//die($sql);
$result = $conn->query($sql);
$num_row = mysqli_num_rows($result);
//die($result);
if ($num_row == 1){
    session_start();
    $each = mysqli_fetch_array($result);
    $_SESSION['name'] = $each['name'];
    //set cookie
    $cookie_name = "user";
    $cookie_value = $each['token'];
    setcookie($cookie_name, $cookie_value, time() + 60*60*24*30);
    header('location:index.php?signin=Đăng nhập thành công!');
    exit;
}else{
    header('location:signin.php?error=Sai tên hoặc mật khẩu?');
}


$conn->close();