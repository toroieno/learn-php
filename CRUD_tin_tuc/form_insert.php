<!DOCTYPE html>
<html>
    <head>
        <title>
            Thêm bài viết mới
        </title>
        <link rel="stylesheet" type="text/css" href="css/form_insert.css">
        <script type="text/javascript" src="js/validate_insert.js"></script>
    </head>
    <body>
        <div class="container">
        <form method="post" action="process_insert.php">
            <div class="news_title">
                <span>Tiêu đề:</span>
                <br>
                <input type="text" name="news_title" id="news_title">
                <span id="error_title"></span>
            </div>
            <div class="news_content">
                <span>Nội dung:</span>
                <br>
                <textarea name="news_content" id="news_content" cols="30" rows="10"></textarea>
            </div>
            <div class="news_img">
                <span>Link ảnh:</span>
                <br>
                <input type="text" name="news_img" id="news_img">
            </div>
            <button name="add_news" id="add_news" onclick="return check()">Thêm</button>
        </form>
        </div>
    </body>
</html>