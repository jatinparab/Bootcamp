<?php
    include 'conn.php';
    $data = $_POST; //data from AJAX JS
    $userid = $data['userid'];
    $productid = $data['productid'];
    $sql = "INSERT INTO cart(userid,productid) VALUES ('$userid','$productid')";
    $result = $conn -> query($sql);
    if($result){
        echo 'success';
    }
?>