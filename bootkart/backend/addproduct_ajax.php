<?php 
include 'conn.php';
$data = $_POST;
$name = $data['name'];
$price = $data['price'];

$description = addslashes($data['description']);
$img = $data['img'];
$category = $data['category'];
//print_r($data);
$sql = "INSERT INTO products(name,price,description,img,category) values ('$name','$price','$description','$img','$category')";

//echo $conn->query($sql);
if($conn->query($sql)){
    echo 'success';
}else{
    $conn->error;
}

?>