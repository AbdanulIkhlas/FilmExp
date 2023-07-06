<?php
    $conn = new mysqli("localhost", "root", "", "film");
    if($conn->connect_error){
        die("connection failed : " . $conn->connect_error);
    }
?>