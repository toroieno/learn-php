<?php

require '../connect.php';

$id = $_GET['id'];
$sql = "delete from products
        where id = '$id'
";
$conn->query($sql);

$conn->close();