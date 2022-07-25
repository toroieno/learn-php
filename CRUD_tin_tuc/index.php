<!DOCTYPE html>
<html>
    <head>
        <title>
            Trang chủ
        </title>
    </head>
    <body>
        <h1>
            Trang chủ
        </h1>
        <a href="form_insert.php">
            Thêm bài mới
        </a>
        <br>
        <?php 
            require_once 'connect.php';

            //search information
            if (isset($_GET['search_news'])){
                $search_news = $_GET['search_news'];
            }else {
                $search_news = "";
            }

            //pages
            if (isset($_GET['page'])){
                $page = $_GET['page'];
            }else {
                $page = 1;
            }
            $sql_news = "select count(*) from news
                        where news_title like '%$search_news%'
            ";
            $result_array_news = $conn->query($sql_news);
            $result_news = mysqli_fetch_array($result_array_news);
            $news = $result_news['count(*)'];

            $news_in_page = 1;
            $skip_pages = $news_in_page * ($page - 1);
            $pages = ceil($news / $news_in_page);
            //die($pages);

            $sql = "select * from news
                    where news_title like '%$search_news%'
                    limit $news_in_page offset $skip_pages 
            ";
            $result = $conn->query($sql);
        ?>
        <span>
            Tìm kiếm:
        </span>
        <caption>
            <form>
                <input type="search" name="search_news" value="<?php echo $search_news ?>">
            </form>
        </caption>
        <table border="1px" width="100%">
            <tr>
                <th>Mã</th>
                <th>Tiêu đề</th>
                <th>Ảnh</th>
                <th>Sửa</th>
                <th>Xoá</th>
            </tr>
            <tr>
                <?php foreach($result as $rs){ ?>
                    <tr>
                        <td><?php echo $rs['news_ID'] ?></td>
                        <td>
                            <a href="content.php?news_ID=<?php echo $rs['news_ID'] ?>">
                                <?php echo $rs['news_title'] ?>
                            </a>
                        </td>
                        <td>
                            <img src="<?php echo $rs['news_img'] ?>" alt="ảnh" height="100px">
                        </td>
                        <td>
                            <a href="form_edit.php?news_ID=<?php echo $rs['news_ID'] ?>">
                                sửa
                            </a>
                        </td>
                        <td>
                            <a href="process_delete.php?news_ID=<?php echo $rs['news_ID'] ?>">
                                xoá
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tr>
        </table>
        
        <!-- index pages -->
        <?php for($i = 1; $i <= $pages; $i++){ ?>
            <a href="?page=<?php echo $i; ?>&search_news=<?php echo $search_news; ?>" style="text-decoration:none">
                <?php echo $i; ?>
            </a>
        <?php } ?>

        <?php $conn->close() ?>
    </body>
</html>