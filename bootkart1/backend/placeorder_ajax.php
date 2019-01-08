<?php
    include 'conn.php';
    $data = $_POST; //data from AJAX JS
    $userid = $data['userid'];
    $productid = $data['productid'];
    $sql = "INSERT INTO orders(userid,productid) VALUES ('$userid','$productid')";
    $sql2 = "DELETE FROM cart WHERE userid='$userid' AND productid='$productid'";
    $result = $conn -> query($sql);
    $result2 = $conn -> query($sql2);
    if($result && $result2){
        echo 'success';
    }
?>