<?php

$conn = mysqli_connect("localhost", "root", "", "bootkart1");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
?>