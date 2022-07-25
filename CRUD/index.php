<!DOCTYPE html>
<html>
    <head>
        <title>
            Trang chủ
        </title>
    </head>
    <body>
        <h1>
            Trang chủ
        </h1>
        <a href="form_insert.php">
            nhập thêm thông tin mới
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

            $sql = "select * from info_student";
            $result = $conn->query($sql);
        ?>


        <table border="1" width="100%">
            <tr>
                <th>Mã</th>
                <th>Tên</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
                <th>Sở thích</th>
                <th>Ảnh</th>
            </tr>
            <?php foreach($result as $ket_qua){ ?>
            <tr>
                <td> 
                    <a href="show.php?ma=<?php echo $ket_qua['ma']?>">
                        <?php echo $ket_qua['ma']?>
                    </a>
                </td>
                <td> <?php echo $ket_qua['ten']?></td>
                <td> <?php echo $ket_qua['gioi_tinh']?></td>
                <td> <?php echo $ket_qua['ngay_sinh']?></td>
                <td> <?php echo $ket_qua['so_thich']?></td>
                <td> 
                    <img src="<?php echo $ket_qua['anh']?>" alt="ảnh" height="100">
                </td>
            </tr>
            <?php } ?>
            
        </table>
        
        <?php $conn->close(); ?>
    </body>
</html>