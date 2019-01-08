<?php
$conn = mysqli_connect("localhost", "admin", "7cf87c75c09f12b3b18cd7524a5230755372edaf0619f414", "bootkart1");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
?>