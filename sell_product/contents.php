<style>
    #product {
        width:33%;
        height:150px;
        background-color:tomato;
        float:left;
        border: 1px solid black;
    }
</style>

<div class="contents">
    <?php 
        require 'admin/connect.php';

        $sql = "select * from products";
        $result = $conn->query($sql);
    
    ?>

    <?php foreach ($result as $each) { ?>
        <div id="product">
            <?php echo $each['name']; ?>
            <br>
            <img src="admin/products/photos/<?php echo $each['image']; ?>" alt="ảnh sản phẩm" height="80px">
            <br>
            <a href="product_details.php?id=<?php echo $each['id'] ?>">
                xem chi tiết >>>
            </a>
            <br>
            <a href="add_to_cart.php?id=<?php echo $each['id']; ?>">
                thêm vào giỏ hàng
            </a>
        </div>
    <?php } ?>
</div>