<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>
<body>
    <?php
        if (isset($_GET['error'])){
            $error = $_GET['error'];
    ?>
        <span style="color:red"><?php echo $error; ?></span>
    <?php
        }
    ?>
    <form action="process_signup.php" method="post">
        Tên:
        <input type="text" name="name">
        <br>
        Email:
        <input type="email" name="email">
        <br>
        Tên đăng nhập:
        <input type="text" name="user_name">
        <br>
        Mật khẩu:
        <input type="password" name="password">
        <br>
        Địa chỉ:
        <input type="text" name="address">
        <br>
        Số điện thoại:
        <input type="number" name="phone_number">
        <br>
        <button>Đăng ký</button>
    </form>
</body>
</html>