<!DOCTYPE html>
<html>
    <head>
        <title>
            Sửa bài viết
        </title>
        <link rel="stylesheet" type="text/css" href="css/form_insert.css">
    </head>
    <body>
        <?php 
            require_once 'connect.php';

            $ID = $_GET['news_ID'];
            $sql = "select * from news
                    where news_ID = $ID
            ";
            $result = $conn->query($sql);
            $rs_array = mysqli_fetch_array($result);

        ?>
        <div class="container">
        <form method="post" action="process_edit.php?news_ID=<?php echo $rs_array['news_ID']; ?>">
            <div class="news_title">
                <span>Tiêu đề:</span>
                <br>
                <input type="text" name="news_title" id="news_title" value="<?php echo $rs_array['news_title']; ?>">
            </div>
            <div class="news_content">
                <span>Nội dung:</span>
                <br>
                <textarea name="news_content" id="news_content" cols="30" rows="10">
                    <?php echo $rs_array['news_content']; ?>
                </textarea>
            </div>
            <div class="news_img">
                <span>Link ảnh:</span>
                <br>
                <input type="text" name="news_img" id="news_img" value="<?php echo $rs_array['news_img']; ?>">
            </div>
            <button name="add_news" id="add_news">Thêm</button>
        </form>
        </div>

        <?php $conn->close(); ?>
    </body>
</html>