<?php

require '../connect.php';

$name = $_POST['name'];
$image = $_FILES['image'];
$price = $_POST['price'];
$description = $_POST['description'];
$manufacturer_id = $_POST['manufacturer_id'];

$folder = 'photos/';
$file_extention = explode('.', $image['name'])[1];
$file_name = time() . '.' . $file_extention;
$path_file = $folder . $file_name;

//die($path_file);
move_uploaded_file($image['tmp_name'], $path_file);

$sql = "insert into products(name,image,price,description,manufacturer_id)
        values('$name','$file_name','$price','$description','$manufacturer_id')
";
$conn->query($sql);

echo 'add product successfully!';

$conn->close();
