<?php 
include 'conn.php';
$sql = "SELECT * FROM PRODUCTS";
$res = $conn->query($sql);
$products = array();
while($row = $res->fetch_assoc()){
    array_push($products,$row);
}

function test($products,$category){
    $filtered_products = array();
    foreach($products as $product){
        //echo 'yya'.$product;
        if($product['category'] == $category){
            array_push($filtered_products,$product);
        }
    }
    return $filtered_products;
}
?>