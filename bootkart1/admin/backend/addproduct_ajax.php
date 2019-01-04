<?php
    include 'conn.php';
    $data = $_POST; //data from AJAX JS
    $name = $data['name'];
    $description = $data['description'];
    $price = $data['price'];
    $img = $data['img'];
    $category = $data['category'];
    $sql = "INSERT INTO products(name,price,description,img,category) VALUES ('$name','$price','$description','$img','$category')";
    $result = $conn -> query($sql);
    if($result){
        echo 'success';
    }
?>