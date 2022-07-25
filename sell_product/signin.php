<?php 
    session_start();
    if (isset($_COOKIE['user'])){
        header('location:index.php?signin=Bạn đã đăng nhập rồi!');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <?php
        if (isset($_GET['error'])){
            $error = $_GET['error'];
            echo $error;
        }
    ?>
    <form action="process_signin.php" method="post">
        Tài khoản:
        <input type="text" name="user_name">
        <br>
        Mật khẩu:
        <input type="password" name="password">
        <br>
        <button>Đăng nhập</button>
    </form>
</body>
</html>