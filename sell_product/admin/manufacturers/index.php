<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý nhà sản xuất</title>
</head>
<body>
    <?php
        require '../menu.php';
        require '../connect.php';

        $search = '';
        if (isset($_GET['search'])){
            $search = $_GET['search'];
        }

        $page = 1;
        if (isset($_GET['page'])){
            $page = $_GET['page'];
        }
        $sql_products = "select count(*) from manufacturers
                        where name like '%$search%'
        ";
        $products = $conn->query($sql_products);
        $sum_products = mysqli_fetch_array($products);
        $sum_pages = $sum_products['count(*)'];

        $limit_products = 1;
        $pages = ceil($sum_pages / $limit_products);
        $skip_products = $limit_products * ($page - 1);
        
        $sql = "select * from manufacturers
                where name like '%$search%'
                limit $limit_products offset $skip_products
        ";
        $result = $conn->query($sql);

    ?>
    <h1>
        Quản lý nhà sản xuất  
    </h1>
    <a href="../root">
        quay lại trang admin
    </a>
    <br>
    <a href="form_insert.php">
        Thêm sản phẩm
    </a>
    <br>
    <span>Tìm kiếm: </span>
    <caption>
        <form>
            <input type="search" name="search">
        </form>
    </caption>
    <table border="1px">
        <tr>
            <th>Mã</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Sửa</th>
            <th>Xoá</th>
        </tr>
        <?php foreach($result as $eachs){ ?>
        <tr>
            <td>
                <?php echo $eachs['id']; ?>
            </td>
            <td>
                <a href="details.php?id=<?php echo $eachs['id']; ?>">
                    <?php echo $eachs['name']; ?>
                </a>
            </td>    
            <td>
                <img src="<?php echo $eachs['image']; ?>" alt="ảnh" height="100px">
            </td>
            <td>
                <a href="form_edit.php?id=<?php echo $eachs['id']; ?>">
                    sửa sản phẩm
                </a>
            </td>
            <td>
                <a href="process_delete.php?id=<?php echo $eachs['id']; ?>">
                    xoá sản phẩm
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
    
    <?php for ($i = 1; $i <= $pages; $i++){ ?>
        <a href="?page=<?php echo $i; ?>">
            <?php echo $i; ?>
        </a>
    <?php } ?>

    <?php mysqli_close($conn); ?>
</body>
</html>