<?php

require '../connect.php';

$name_products = $_POST['name_products'];
$details_products = $_POST['details_products'];
$link_img = $_POST['link_img'];

$sql = "insert into manufacturers(name,details,image)
        values('$name_products','$details_products','$link_img')
";
//die($sql);
$result = $conn->query($sql);

echo 'insert products successfully!';

$conn->close();