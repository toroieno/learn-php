<?php

require '../connect.php';

$id = $_GET['id'];

$sql = "delete from manufacturers
        where id = '$id' ";

$conn->query($sql);

$conn->close();