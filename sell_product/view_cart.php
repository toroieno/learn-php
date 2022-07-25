<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
</head>
<body>
    <a href="index.php">
        Trang chủ
    </a>
    <?php 
        if (empty($_SESSION['cart'])){
            echo "giỏ hàng trống";
        }else{
            $cart = $_SESSION['cart'];
    ?>
    
    <?php 
        if (isset($_SESSION['name'])){?>
            <h1>
                Giỏ hàng của bạn <?php echo $_SESSION['name']; ?>
            </h1>
    <?php } else {?>
        <div style="height:100px;"></div>
    <?php }?>
    
    <table border="1px" width="100%">
        <tr>
            <th>Ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
            <th>Xoá</th>
        </tr>
        <?php foreach ($cart as $id => $each) { ?>
            <tr>
                <td><img src="admin/products/photos/<?php echo $each['image']; ?>" alt="ảnh sản phẩm" height="100px"></td>
                <td><?php echo $each['name']; ?></td>
                <td><?php echo $each['price']; ?></td>
                <td>
                    <a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=decre" style="text-decoration:none;">-</a>
                    <?php echo $each['quantity']; ?>
                    <a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=incre" style="text-decoration:none;">+</a>
                </td>
                <td><?php echo $each['price'] * $each['quantity']; ?></td>
                <td>
                    <a href="delete_product_in_cart.php?id=<?php echo $id ?>">Xoá</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <h3>
        Tổng tiền tất cả sản phẩm đã chọn: 
        <?php 
            $sum = 0;
            foreach ($cart as $id => $each){
                $sum_tmp = $each['price'] * $each['quantity'];
                $sum += (int)($sum_tmp);
            }
            echo $sum;
        ?>
    </h3>
    <h4>Thông tin người nhận:</h4>
    <?php 
        require 'admin/connect.php';
        
        $token = $_COOKIE['user'];
        $sql = "select name,phone_number,address from users
                where token = '$token'
        ";
        $result = $conn->query($sql);
        $user = mysqli_fetch_array($result);
    ?>
    <form action="#">
        Tên người nhận:
        <input type="text" name="name" value="<?php echo $user['name']; ?>">
        <br>
        Số điện thoại:
        <input type="text" name="phone_number" value="<?php echo $user['phone_number']; ?>">
        <br>
        Địa chỉ:
        <input type="text" name="address" value="<?php echo $user['address']; ?>">
        <br>
        <button>Đặt hàng</button>
    </form>
    <?php } ?>
</body>
</html>