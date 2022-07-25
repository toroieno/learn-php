<?php

require 'admin/connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];

$sql = "select count(*) from users
        where email = '$email'
";
$result = $conn->query($sql);
$check = mysqli_fetch_array($result)['count(*)'];

if($check == 1){
    header('location:signup.php?error=Trùng email rồi!');
    exit;
}

$token = uniqid("user_",true);
//die($token);
$insert = "insert into users(name,email,user_name,password,token,address,phone_number)
        values('$name','$email','$user_name','$password','$token','$address','$phone_number')
";
//die($insert);
$conn->query($insert);


session_start();
$_SESSION['name'] = $name;
//set cookie
$cookie_name = "user";
$cookie_value = $token;
setcookie($cookie_name, $cookie_value, time() + 60*60*24*30);

//echo 'signup successfully';
header('location:index.php?signin:signin successfully');

$conn->close();