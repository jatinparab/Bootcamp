<?php 
//include 'conn.php';

function get_details($id){
    include 'conn.php';
    $sql = "SELECT * FROM PRODUCTS WHERE id='$id'";
    $res = $conn->query($sql);
    return $res->fetch_assoc();
}
?>