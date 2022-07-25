<?php

require_once 'connect.php';

$ID = $_GET['news_ID'];

$sql = "delete from news
        where news_ID = $ID
";
//die($sql);
$conn->query($sql);
echo 'Delete this news successfully!';

$conn->close();