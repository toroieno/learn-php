<!DOCTYPE html>
<html>
    <head>
        <title>
            Trang chủ
        </title>
    </head>
    <body>
        <h1>
            Cảm nghĩ
        </h1>
        <a href="index.php">
            quay lại trang chủ
        </a>
        <!-- kết nối database -->
        <?php 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "infomation_post";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password,$database);
            
            // // Check connection
            // if ($conn->connect_error) {
            //   die("Connection failed: " . $conn->connect_error);
            // }
            // echo "Connected successfully";
            
            // set utf8
            $conn->query("SET character_set_results = 'utf8', 
                        character_set_client = 'utf8', 
                        character_set_connection = 'utf8', 
                        character_set_database = 'utf8', 
                        character_set_server = 'utf8'");

            $ma = $_GET['ma'];
            $sql = "select * from info_student
                    where ma = $ma
            ";
            $result = $conn->query($sql);
            $bai_nd = mysqli_fetch_array($result);
            
        ?>

        <p>
            <?php echo $bai_nd['cam_nghi'] ?>
        </p>
        
        
        <?php $conn->close(); ?>
    </body>
</html>