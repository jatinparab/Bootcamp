<?php 
  include 'template/header.php';
  include 'backend/getdetails.php';
  $product = get_details($_GET['id']);
?>
  
  <div class="container text-center">
  <br>
    <h1 class="text-center"><?=$product['name']?></h1>   
    <img src="<?=$product['img']?>" class="text-center" alt="">
    <br><br>
    <h2>Price - <?=$product['price'];?> Rs</h2> 
    <p> <?=$product['description'];?> </p>    
    <a onclick="addtocart('<?=$_SESSION['id']?>','<?=$product['id']?>')"  class="btn btn-lg btn-success text-white">Add to cart</a>
    <br><br>
  </div>
  
  


<?php 
  include 'template/footer.php';

?>