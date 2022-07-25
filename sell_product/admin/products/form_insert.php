<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
</head>
<body>
    <?php 
        require '../menu.php';
    ?>
    <h1>Thêm sản phẩm mới</h1>
    <?php
        require '../connect.php';

        $sql = "select * from manufacturers";
        $result = $conn->query($sql);

        //$manufacturer = mysqli_fetch_array($result);
    ?>
    <form action="process_insert.php" method="post" enctype="multipart/form-data">
        Tên 
        <input type="text" name="name">
        <br>
        Ảnh
        <input type="file" name="image">
        <br>
        Giá
        <input type="number" name="price">
        <br>
        Mô tả
        <textarea name="description"></textarea>
        <br>
        Nhà sản xuất
        <select name="manufacturer_id">
            <?php foreach($result as $each) { ?>
                <option  value="<?php echo $each['id']; ?>">
                    <?php echo $each['name']; ?>
                </option>
            <?php } ?>
        </select>
        <br>
        <button>Thêm</button>
    </form>
</body>
</html>