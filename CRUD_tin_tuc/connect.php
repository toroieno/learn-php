<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "tin_tuc";

//create connection
$conn = new mysqli($servername,$username,$password,$database);

// //check connection
// if ($conn->connect_error){
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connection successfully";

// set utf8
$conn->query("SET character_set_results = 'utf8', 
character_set_client = 'utf8', 
character_set_connection = 'utf8', 
character_set_database = 'utf8', 
character_set_server = 'utf8'");