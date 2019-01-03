<?php 
session_start();
session_destroy();
echo "Successfully Logged Out";
header("Refresh:2; url=index.php");
?>