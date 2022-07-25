<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require '../connect.php';

        $id = $_GET['id'];
        $sql = "select * from manufacturers
                where id = '$id'
        ";
        $result = $conn->query($sql);
        $product = mysqli_fetch_array($result);

    ?>
    <form action="process_update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
        Tên sản phẩm:
        <input type="text" name="name_products" value="<?php echo $product['name']; ?>">
        <br>
        Thông tin chi tiết:
        <textarea name="details_products" cols="30" rows="10">
            <?php echo $product['details']; ?>
        </textarea>
        <br>
        Link ảnh:
        <input type="text" name="link_img" value="<?php echo $product['image']; ?>">
        <br>
        <button>Thêm</button>
    </form>

    <?php $conn->close(); ?>
</body>
</html>