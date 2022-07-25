<?php

//get information
require_once 'connect.php';

$news_title = $_POST['news_title'];
$news_content = $_POST['news_content'];
$news_img = $_POST['news_img'];

$sql = "insert into news(news_title,news_content,news_img)
        values('$news_title','$news_content','$news_img')";

//die($sql);
$result = $conn->query($sql);
echo 'Insert news successfully!';

$conn->close();