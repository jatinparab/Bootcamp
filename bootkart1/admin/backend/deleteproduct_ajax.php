<?php
    include 'conn.php';
    $data = $_POST; //data from AJAX JS
    $id = $data['productid'];

    $sql = "DELETE FROM products WHERE id='$id'";
    $result = $conn -> query($sql);
    if($result){
        echo 'success';
    }
?>


https://m.do.co/c/1d9c6302a930