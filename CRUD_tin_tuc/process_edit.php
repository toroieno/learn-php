<?php

require_once 'connect.php';

$ID = $_GET['news_ID'];

$news_title = $_POST['news_title'];
$news_content = $_POST['news_content'];
$news_img = $_POST['news_img'];

$sql = "update news
        set
        news_title = '$news_title',
        news_content = '$news_content',
        news_img = '$news_img'
        where news_ID = $ID
";

$conn->query($sql);
echo 'Edit this news successfully!';

$conn->close();