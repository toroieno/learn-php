<!DOCTYPE html>
<html>
    <head>
        <title>
            Nội dung chi tiết
        </title>
    </head>
    <body>
        <?php 
            require_once 'connect.php';
            
            $ID = $_GET['news_ID'];
            $sql = "select * from news
                    where news_ID = $ID";
            $result = $conn->query($sql);
            $rs_array = mysqli_fetch_array($result);
        ?>
        <h1>
            <?php 
                echo $rs_array['news_title'];
            ?>
        </h1>
        <p style="text-align:center">
            <img src="<?php echo $rs_array['news_img'];?>" alt="ảnh" height="100px" >
        </p>
        <span>
            <?php
                echo nl2br($rs_array['news_content']);
            ?>
        </span>


        <?php $conn->close() ?>
    </body>
</html>