<?php 
include 'conn.php';
$data = $_POST;
$username = $data['username'];
$password = $data['password'];
$sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
$res = $conn -> query($sql);
$row = $res -> fetch_assoc();
if($row){
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['id'] = $row['id'];
    echo 'success';
}else{
    $conn->error;
}

?>