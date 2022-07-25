<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
</head>
<body>
    <?php 
        require '../menu.php';
        require '../connect.php';

        $sql_products = "select products.*,manufacturers.name as manufacturer_name from products
                        join manufacturers on products.manufacturer_id = manufacturers.id
        ";
        $products = $conn->query($sql_products);

    ?>
    <h1>Quản lý sản phẩm</h1>
    <a href="../root">
        Quay lại trang admin
    </a>
    <br>
    <a href="form_insert.php">
        Thêm sản phẩm mới
    </a>
    <table border="1px" width="100%">
        <tr>
            <th>Mã</th>
            <th>Tên sản phẩm</th>
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Nhà sản xuất</th>
            <th>Sửa</th>
            <th>Xoá</th>
        </tr>
        <?php foreach ($products as $each) { ?>
            <tr>
                <td><?php echo $each['id'] ?></td>
                <td><?php echo $each['name'] ?></td>
                <td>
                    <img src="photos/<?php echo $each['image'] ?>" alt="ảnh" height="100px">
                </td>
                <td><?php echo $each['price'] ?></td>
                <td><?php echo $each['manufacturer_name'] ?></td>
                <td>
                    <a href="form_edit.php?id=<?php echo $each['id'] ?>">
                        Sửa
                    </a>
                </td>
                <td>
                    <a href="process_delete.php?id=<?php echo $each['id'] ?>">
                        Xoá
                    </a>
                </td>
            </tr>
        <?php }?>
    </table>
</body>
</html>