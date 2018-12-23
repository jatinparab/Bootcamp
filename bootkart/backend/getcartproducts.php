<?php 
//include 'conn.php';

function getcart($id){
    include 'conn.php';
    $sql = "SELECT * FROM cart WHERE userid='$id'";
    $res = $conn->query($sql);
    $cart = array();
    while($row=$res->fetch_assoc()){
        array_push($cart,$row);
    }
    return $cart;
}
?>