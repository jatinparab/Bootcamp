<?php 
include 'conn.php';
$data = $_POST;
$userid = $data['userid'];
$productid = $data['productid'];
//print_r($data);
$sql = "INSERT INTO orders(userid,productid) value ('$userid','$productid')";
$sql2 = "DELETE FROM cart WHERE userid='$userid' AND productid='$productid'";
if($conn->query($sql)){
    if($conn->query($sql2)){
        echo 'success';
    }
}else{
    $conn->error;
}

?>