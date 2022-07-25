<?php

require '../connect.php';

$id = $_POST['id'];
$name = $_POST['name_products'];
$details = $_POST['details_products'];
$img = $_POST['link_img'];

$sql = "update manufacturers
        set
        name = '$name',
        details = '$details',
        image = '$img'
        where id = '$id'
";

$conn->query($sql);

$conn->close();