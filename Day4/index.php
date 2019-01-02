<?php 
    include 'backend/getproducts.php';
    $products = getallproducts();
    $product = getsingleproduct(4);
    print_r($product);
?>
