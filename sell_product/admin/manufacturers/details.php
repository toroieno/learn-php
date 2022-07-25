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
        require '../connect.php';

        $id = $_GET['id'];
        $sql = "select * from manufacturers
                where id = '$id' ";

        $result = $conn->query($sql);
        $product = mysqli_fetch_array($result);
    ?>

    <h1>
        <?php echo $product['name']; ?>
    </h1>
    <img src="<?php echo $product['image']; ?>" alt="ảnh" height="100px">
    <p>
        <?php echo $product['details']; ?>
    </p>

</body>
</html>