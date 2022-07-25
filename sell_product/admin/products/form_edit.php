<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
</head>
<body>
    <?php 
        require '../menu.php';
        require '../connect.php';

        $id = $_GET['id'];
        $sql = "select * from products
                where id = '$id'
        ";
        $result = $conn->query($sql);
        $product = mysqli_fetch_array($result);

        $sql_manufacturers = "select * from manufacturers";
        $manufacturers = $conn->query($sql_manufacturers);

        //$manufacturer = mysqli_fetch_array($result);
    ?>

    <h1>Thêm sản phẩm mới</h1>
    <form action="process_edit.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
        Tên 
        <input type="text" name="name" value="<?php echo $product['name'] ?>">
        <br>
        Đổi ảnh mới
        <input type="file" name="image_new" >
        <br>
        Ảnh cũ:
        <img src="photos/<?php echo $product['image'] ?>" alt="ảnh cũ" height="100px">
        <input type="hidden" name="image_old" value="<?php echo $product['image'] ?>">
        <br>
        Giá
        <input type="number" name="price" value="<?php echo $product['price'] ?>">
        <br>
        Mô tả
        <textarea name="description"><?php echo $product['description'] ?></textarea>
        <br>
        Nhà sản xuất
        <select name="manufacturer_id">
            <?php foreach($manufacturers as $manufacturer) { ?>
                <option  value="<?php echo $manufacturer['id']; ?>"
                <?php if ($manufacturer['id'] == $product['manufacturer_id']){ ?>
                    selected
                <?php } ?>
                >
                    <?php echo $manufacturer['name']; ?>
                </option>
            <?php } ?>
        </select>
        <br>
        <button>Sửa</button>
    </form>
</body>
</html>