<?php 
    $isAdmin = 0;
    if(isset($_SESSION['isAdmin'])){
        $isAdmin = $_SESSION['isAdmin'];
    }
    if($isAdmin){
        header("Location: admin/home.php");
    }
?>