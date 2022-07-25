<?php
    session_start();
    if (empty($_SESSION['name'])){
        header('location:signin.php?error=Đăng nhập đi bạn!');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang người dùng</title>
</head>
<body>
    <?php
        if (isset($_SESSION['name']))
        {?>
            <span>Đây là trang người dùng. Xin chào bạn</span> 
        <?php
            echo $_SESSION['name'];
        }?>
    
    <a href="signout.php">
        Đăng xuất rồi á bro!
    </a>
</body>
</html>