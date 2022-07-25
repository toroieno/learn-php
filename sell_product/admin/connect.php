<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'sell_products';

$conn = new mysqli($server,$username,$password,$database);

//check connection
if ($conn->connect_error){
    die("Connection error!". $conn->connect_error);
}
//echo 'Connection Successfully!';

//set utf8
mysqli_set_charset($conn,'utf8');
