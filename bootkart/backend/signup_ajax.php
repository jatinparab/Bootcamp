
<?php 
include 'conn.php';
$data = $_POST;
$username = $data['username'];
$password = $data['password'];

$query = "INSERT INTO login(username,password) values ('$username','$password')";
if($conn->query($query)){
    echo "success";
}else{
    echo $conn->error;
}

?>
