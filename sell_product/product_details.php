<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
</head>
<body>
    <?php
        require 'admin/connect.php';

        $id = $_GET['id'];
        $sql = "select * from products
                where id = '$id'
        ";
        //die($sql);
        $result = $conn->query($sql);
        $each = mysqli_fetch_array($result);

    ?>
    <h1>
        <?php echo $each['name']; ?>
    </h1>
    <img src="admin/products/photos/<?php echo $each['image']; ?>" alt="ảnh sản phẩm" height="100px">
    <p>
        <?php echo $each['description']; ?>
    </p>

    <?php $conn->close(); ?>
</body>
</html>