<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process_insert.php" method="post">
        Tên sản phẩm:
        <input type="text" name="name_products">
        <br>
        Thông tin chi tiết:
        <textarea name="details_products" cols="30" rows="10"></textarea>
        <br>
        Link ảnh:
        <input type="text" name="link_img">
        <br>
        <button>Thêm</button>
    </form>
</body>
</html>