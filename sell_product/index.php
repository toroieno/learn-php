<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <style>
        *{
            padding:0;
            margin:0;
        }
        .all {
            width:100%;
            height: 1000px;;
            background-color:black;
        }
        .header {
            width:100%;
            height:20%;
            background-color:yellow;
        }
        .contents {
            width: 100%;
            height: 70%;
            background-color:aqua;
        }
        .footer {
            width: 100%;
            height:10%;
            background-color:red;
        }
    </style>
</head>
<body>
    <div class="all">
        <?php 
            require 'header.php'; 
            require 'contents.php';
            require 'footer.php';
        ?>
    </div>
</body>
</html>