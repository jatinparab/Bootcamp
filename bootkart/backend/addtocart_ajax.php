<?php 
include 'conn.php';
$data = $_POST;
$userid = $data['userid'];
$productid = $data['productid'];
//print_r($data);
$sql = "INSERT INTO cart(userid,productid) value ('$userid','$productid')";
if($conn->query($sql)){
    echo 'success';
}else{
    $conn->error;
}

?>