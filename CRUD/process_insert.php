<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "infomation_post";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// set utf8
$conn->query("SET character_set_results = 'utf8', 
            character_set_client = 'utf8', 
            character_set_connection = 'utf8', 
            character_set_database = 'utf8', 
            character_set_server = 'utf8'");

//query
$ten = $_POST['ten'];
$gioi_tinh = $_POST['gioi_tinh'];
$email = $_POST['email'];
$mat_khau = $_POST['mat_khau'];
$ngay_sinh = $_POST['ngay_sinh'];
$so_thich = $_POST['so_thich'];
$chon_anh = $_POST['chon_anh'];
$share_feeling = $_POST['share_feeling'];

$sql = "insert into info_student(ten,gioi_tinh,email,mat_khau,ngay_sinh,so_thich,anh,cam_nghi)
        values('$ten','$gioi_tinh','$email','$mat_khau','$ngay_sinh','$so_thich','$chon_anh','$share_feeling')
";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }



$conn->close();