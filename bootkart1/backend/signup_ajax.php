<?php
    include 'conn.php';
    $data = $_POST; //data from AJAX JS
    $username = $data['username'];
    $password = $data['password'];
    $sql = "INSERT INTO login(username,password) VALUES ('$username','$password')";
    $result = $conn -> query($sql);
    if($result){
        echo 'success';
    }
?>