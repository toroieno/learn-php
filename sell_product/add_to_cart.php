<?php

session_start();
//unset($_SESSION['cart']);

$id = $_GET['id'];

if (empty($_SESSION['cart'][$id])){
    require 'admin/connect.php';
    $sql  = "select * from products
            where id = '$id'
    ";
    $result = $conn->query($sql);
    $each = mysqli_fetch_array($result);
    $_SESSION['cart'][$id]['name'] = $each['name'];
    $_SESSION['cart'][$id]['image'] = $each['image'];
    $_SESSION['cart'][$id]['price'] = $each['price'];
    $_SESSION['cart'][$id]['quantity'] = 1;
}else{
    $_SESSION['cart'][$id]['quantity']++;
}

echo json_encode($_SESSION['cart']);
//print_r($_SESSION['cart']);
